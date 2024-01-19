<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // public function createPost(Request $request)
    // {
    //     $user = Auth::user();

    //     // $request->validate([
    //     //     'content' => 'required',
    //     //     'image' => 'image|mimes:jpeg,png,jpg',
    //     // ]);

    //     $request->validate([
    //         'content' => 'required',
    //         'image' => 'required',
    //     ]);

    //     // User sudah mengisi data, maka buat postingan
    //     $post = Post::create([
    //         'user_id' => $user->id,
    //         'content' => $request->content,
    //         'image' => $request->image,
    //     ]);

    //     return redirect()->route('home')->with([
    //         'post' => $post
    //     ]);
    // }



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

        // mengambil berdasar id post
        $likes = Like::where('likeable_type', 'App\Models\Post')
            ->where('likeable_id', $post->id)->latest()->get();


        // Variabel dengan usernya
        $listwholikes = $likes->load(['user']);

        return view('post', [
            'post' => $post,
            'likes' => $listwholikes

        ]);
    }


    public function createPost(Request $request)
    {
        try {
            $request->validate([
                'content' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            ]);

            $user = Auth::user();
            $imagePath = $request->file('image')->store('public');

            Post::create([
                'user_id' => $user->id,
                'content' => $request->content,
                'image' => $imagePath,
            ]);

            return redirect()->route('home')->with('success', 'Post berhasil dibuat!');
        } catch (\Exception $e) {
            // Tangkap eksepsi dan redirect kembali dengan pesan kesalahan
            return back()->with('error', 'Terjadi kesalahan. Posting gagal dibuat.');
        }
    }
}
