<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function sendComment(Request $request, Post $post)
    {
        $user = Auth::user();

        $comment = Comment::create([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'comment' => $request->comment
        ]);
        return redirect()->back();
    }


    public function deleteComment(Post $post, Comment $comment)
    {

        $user = Auth::user();
        if ($user->id == $comment->user_id) {
            $comment->delete();
            return redirect()->back()->with([
                'message' => 'berhasil menghapus komen',
            ]);
        } else {

            return redirect()->back()->with([
                'message' => 'Anda tidak punya hak akses'
            ]);
        }
    }
}
