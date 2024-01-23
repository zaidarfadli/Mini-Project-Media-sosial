<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function myProfile()
    {
        $user = Auth::user();
        $user = $user->load(['post']);
        $people = $user;
        return view('profile', [
            'people' => $people,
            'user' => $user,
        ]);
    }

    public function seeProfile(User $people)
    {
        $user = Auth::user();

        if (auth()->check()) {
            if ($user->id == $people->id) {
                return redirect()->route('myProfile');
            }

            return view('profile', [
                'people' => $people,
                'user' => $user
            ]);
        } else {
            return view('profile', [
                'people' => $people,
                'user' => $user
            ]);
        }
    }


    public function confirmPassword(Request $request)
    {
        $inputPassword = $request->input('password');
        $user = Auth::user();

        if (Hash::check($inputPassword, $user->password)) {

            return redirect()->route('editProfileForm');
        }

        return redirect()->back()->with('failed', 'Password tidak sesuai');
    }


    public function editProfileForm()
    {

        $user = Auth::user();

        return view('edit_profile', [
            'user' => $user
        ]);
    }

  public function editProfile(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'bio' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000'
        ];



        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users,username';
        }

        $customMessages = [
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah digunakan.',
        ];

        $validatedData = $request->validate($rules, $customMessages);


        $validatedData['email'] = $user->email;
        $validatedData['password'] = $user->password;

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/profile'), $imageName);

        $validatedData['image'] = $imageName;

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect()->route('myProfile');
    }






    public function explorePeople(Request $request)
    {

        $user = Auth::user();
        $suggested = $this->suggestionFollow($user);

        $search = $request->input('search');

        if (!$search) {
            return view('explore', [
                'message' => 'Tidak ada pencarian',
                'user' => $user,
                'suggested' => $suggested
            ]);
        }

        $peoples = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('username', 'like', '%' . $search . '%')
            ->get();

        if ($peoples->isEmpty()) {
            return view('explore', [
                'message' => 'User tidak ditemukan',
                'user' => $user,
                'suggested' => $suggested
            ]);
        }


        // MENGAMBIL POSTINGAN DENGAN LIKE TERBANYAK
        $posts = Post::select(
            'posts.*',
            DB::raw('COUNT(likes.id) as like_count'),
            DB::raw('count(comments.id) + count(replies.id) as comment_count')
        )
            ->leftJoin('likes', 'posts.id', '=', 'likes.likeable_id')
            ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
            ->leftJoin('replies', 'posts.id', '=', 'replies.post_id')
            ->whereIn('posts.user_id', $peoples->pluck('id'))
            ->groupBy('posts.id', 'posts.user_id', 'posts.image', 'posts.content', 'posts.created_at', 'posts.updated_at')
            ->orderByDesc('like_count')
            ->orderByDesc('comment_count')
            ->take(2)
            ->get();


        return view('explore', [
            'user' => $user,
            'peoples' => $peoples,
            'posts' => $posts,
            'suggested' => $suggested
        ]);
    }


    // SUGGESTION FOLLOWING
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
            $suggested = User::select(
                'users.*',
                DB::raw('count(follows.id) as follower_count')
            )
                ->leftJoin('follows', 'users.id', '=', 'follows.following_id')
                ->groupBy('users.id', 'users.bio', 'users.username', 'users.name', 'users.email', 'users.password', 'users.image', 'users.email_verified_at', '.users.remember_token', 'users.created_at', 'users.updated_at')
                ->orderByDesc('follower_count')
                ->take(5)
                ->get();
        }

        return $suggested;
    }
}
