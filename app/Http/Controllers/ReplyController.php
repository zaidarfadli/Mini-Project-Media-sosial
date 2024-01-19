<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Notif;
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

                $this->createNotif($user, $comment, $reply);
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


    public function deleteReply(Comment $comment, Reply $reply)
    {
        $user = Auth::user();

        if ($user->id == $reply->user_id) {

            $this->deleteNotif($user, $comment, $reply);

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

    public function createNotif($user, $comment, $reply)
    {
        if ($user->id != $comment->user_id) {
            $notif = new Notif();
            $notif->user_id = $user->id;
            $notif->receiver_id = $comment->user_id;
            $notif->notifable_id = $reply->id;
            $notif->notifable_type = 'App\Models\Reply';
            $notif->type = 'Reply';
            $reply->notif()->save($notif);
        }
    }


    public function deleteNotif($user, $comment, $reply)
    {

        $cekNotif = Notif::where('user_id', $user->id)
            ->where('receiver_id', $comment->user_id)
            ->where('notifable_id', $reply->id)
            ->where('notifable_type', 'App\Models\Reply')
            ->where('type', 'Reply')->first();

        if ($cekNotif) {
            $cekNotif->delete();
        }
    }
}
