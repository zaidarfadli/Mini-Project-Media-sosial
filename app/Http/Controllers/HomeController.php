<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index()
    {

        $posts = Post::with(['user'])->latest()->get();


        if (Auth::check()) {

            $user = Auth::user();
            $people = User::whereNot('id', $user->id)->latest()->get();

            return view('index', [
                'posts' => $posts,
                'user' => $user,
                'peoples' => $people
            ]);
        } else {
            $people = User::latest()->get();
            return view('index', [
                'posts' => $posts,
                'peoples' => $people
            ]);
        }
    }


    public function indexMyFollowing()
    {
        $user = Auth::user();

        $posts = Post::whereIn('user_id', $user->followings()->pluck('following_id'))->latest()->get();

        $people = User::whereNot('id', $user->id)->latest()->get();


        return view('index', [
            'posts' => $posts,
            'user' => $user,
            'peoples' => $people
        ]);
    }

    public function formPost()
    {
        $user = Auth::user();

        return view('formPost', [
            'user' => $user
        ]);
    }
}
