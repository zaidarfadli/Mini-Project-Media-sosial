<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $posts = Post::with(['user'])->latest()->get();

        return view('index', [
            'posts' => $posts,
            'user' => $user
        ]);
    }

    public function formPost()
    {
        return view('formPost');
    }
}
