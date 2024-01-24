<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Notif;
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

        $this->createNotif($user, $post, $comment);
        return redirect()->back();
    }

    public function deleteComment(Post $post, Comment $comment)
    {

        $user = Auth::user();
        if ($user->id == $comment->user_id) {

            $this->deleteNotif($user, $post, $comment);
            $comment->delete();
            return redirect()->back()->with([
                'message' => 'berhasil menghapus komentar',
            ]);
        } else {

            return redirect()->back()->with([
                'message' => 'Anda tidak punya hak akses'
            ]);
        }
    }




    public function createNotif($user, $post, $comment)
    {

        if ($user->id != $post->user_id) {
            $notif = new Notif();
            $notif->user_id = $user->id;
            $notif->receiver_id = $post->user_id;
            $notif->notifable_id = $comment->id;
            $notif->notifable_type = 'App\Models\Comment';
            $notif->type = 'Comment';
            $comment->notif()->save($notif);
        }
    }


    public function deleteNotif($user, $post, $comment)
    {

        $cekNotif = Notif::where('user_id', $user->id)
            ->where('receiver_id', $post->user_id)
            ->where('notifable_id', $comment->id)
            ->where('notifable_type', 'App\Models\Comment')
            ->where('type', 'Comment')->first();

        if ($cekNotif) {
            $cekNotif->delete();
        }
    }
}
