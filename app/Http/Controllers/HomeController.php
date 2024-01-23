<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index()
    {

        $user = Auth::user();

        $posts = Post::select(
            'posts.*',
            DB::raw('COUNT(likes.id) as like_count'),
            DB::raw('count(comments.id) + count(replies.id) as comment_count')
        )
            ->leftJoin('likes', 'posts.id', '=', 'likes.likeable_id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->leftJoin('replies', 'posts.id', '=', 'replies.post_id')
            ->groupBy('posts.id', 'posts.user_id', 'posts.image', 'posts.content', 'posts.created_at', 'posts.updated_at')
            ->orderByDesc('created_at')
            ->orderByDesc('comment_count')
            ->orderByDesc('like_count')
            ->get();



        $suggested = Auth::check() ? $this->suggestionFollow($user) : User::latest()->get();

        return view('index', [
            'posts' => $posts,
            'user' => $user,
            'suggested' => $suggested
        ]);
    }


    public function indexMyFollowing()
    {
        $user = Auth::user();

        $posts = Post::whereIn('user_id', $user->followings()->pluck('following_id'))
            ->latest()->get();

        $suggested =  $this->suggestionFollow($user);



        if ($posts->isEmpty()) {
            return view('index', [
                'message' => 'Anda Belum memfollow siapapun',
                'user' => $user,
                'suggested ' => $suggested
            ]);
        }

        return view('index', [
            'posts' => $posts,
            'user' => $user,
            'suggested' => $suggested
        ]);
    }




    public function formPost()
    {
        $user = Auth::user();
        $suggested =  $this->suggestionFollow($user);

        return view('formPost', [
            'user' => $user,
            'suggested' => $suggested
        ]);
    }



    public function searchRoute()
    {
        $posts = Post::with(['user'])->latest()->get();

        if (Auth::check()) {
            $user = Auth::user();
            $people = User::whereNot('id', $user->id)->latest()->get();
            return view('explore', [
                'posts' => $posts,
                'user' => $user,
                'peoples' => $people
            ]);
        } else {
            $people = User::latest()->get();
            return view('explore', [
                'posts' => $posts,
                'peoples' => $people
            ]);
        }
    }


    public function suggestionFollow($user)
    {
        if (auth()->check()) {
            $suggested  = User::whereNotIn('id', function ($query) use ($user) {
                $query->select('following_id')
                    ->from('follows')
                    ->where('user_id', $user->id);
            })->where('id', '!=', $user->id)
                ->latest()
                ->take(5)
                ->get();
        } else {
            $suggested = User::latest()
                ->take(6)
                ->get();
        }

        return $suggested;
    }
}
