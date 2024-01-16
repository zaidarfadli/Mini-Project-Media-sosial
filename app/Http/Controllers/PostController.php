<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $user = Auth::user();

        // $request->validate([
        //     'content' => 'required',
        //     'image' => 'image|mimes:jpeg,png,jpg',
        // ]);

        $request->validate([
            'content' => 'required',
            'image' => 'required',
        ]);

        // User sudah mengisi data, maka buat postingan
        $post = Post::create([
            'user_id' => $user->id,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        return redirect()->route('home')->with([
            'post' => $post
        ]);
    }



    public function deletePost(Post $post)
    {

        $user = Auth::user();

        if ($post->user_id === $user->id) {

            $post->delete();
            return redirect()->back()->with('message', 'berhasil menghapus postingan');
        } else {
            return redirect()->back()->with('message', "Anda Tidak punya hak akses");
        }
    }


    public function seePost(Post $post)
    {
        $post = $post->load(['user', 'comment']);

        return view('post', [
            'post' => $post,

        ]);
    }
}
