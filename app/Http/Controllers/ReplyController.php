<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{

    public function sendReply(Request $request, Post $post, Comment $comment)
    {
        // CEK POSTINGAN MASIH ADA ATAU TIDAK
        if ($post) {

            // CEK KOMENTAR MASIH ADA ATAU TIDAK
            if ($comment) {
                $user = Auth::user();

                $reply = Reply::create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                    'comment_id' => $comment->id,
                    'reply' => $request->reply
                ]);
                return redirect()->back();
            } else {

                return redirect()->route('home')->with([
                    'message' => 'Postingan sudah tak tersedia'
                ]);
            }
        } else {
            return redirect()->route('home')->with([
                'message' => 'Postingan sudah tak tersedia'
            ]);
        }
    }


    public function deleteReply(Reply $reply)
    {
        $user = Auth::user();

        if ($user->id == $reply->user_id) {
            $reply->delete();
            return redirect()->back()->with([
                'message' => 'berhasil menghapus balasan',
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Anda tidak punya hak akses'
            ]);
        }
    }
}
