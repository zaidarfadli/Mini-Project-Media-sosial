<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Notif;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likePost(Post $post)
    {

        $user = Auth::user();
        if ($post) {

            $like = Like::where('user_id', $user->id)
                ->where('likeable_type', 'App\Models\Post')
                ->where('likeable_id', $post->id)->first();

            if ($like) {

                $this->deleteNotifPostLike($user, $post, $like);
                $like->delete();
                return redirect()->back()->with([
                    'message' => 'Berhasil menghapus like dari postingan'
                ]);
            } else {

                $like = new Like();
                $like->user_id = $user->id;
                $like->likeable_id = $post->id;
                $like->likeable_type = 'App\Models\Post';

                $savelike = $post->like()->save($like);

                $this->createNotifPostLike($user, $post, $savelike);


                return redirect()->back()->with([
                    'message' => 'Postingan di like'
                ]);
            }
        } else {
            return redirect()->route('home')->with([
                'message' => 'Postingan sudah dihapus'
            ]);
        }
    }


    public function likeComment(Post $post, Comment $comment)
    {

        $user = Auth::user();
        if ($post) {

            $like = Like::where('user_id', $user->id)
                ->where('likeable_type', 'App\Models\Comment')
                ->where('likeable_id', $comment->id)->first();

            if ($like) {

                $this->deleteNotifCommentLike($user, $post, $like);
                $like->delete();
                return redirect()->back()->with([
                    'message' => 'Berhasil menghapus like dari postingan'
                ]);
            } else {

                $like = new Like();
                $like->user_id = $user->id;
                $like->likeable_id = $comment->id;
                $like->likeable_type = 'App\Models\Comment';

                $savelike = $comment->like()->save($like);

                $this->createNotifCommentLike($user, $post, $savelike);




                return redirect()->back()->with([
                    'message' => 'Postingan di like'
                ]);
            }
        } else {
            return redirect()->route('home')->with([
                'message' => 'Postingan sudah dihapus'
            ]);
        }
    }





    public function seeWhoLike(Post $post)
    {
        if ($post) {

            // mengambil berdasar id post
            $likes = Like::where('likeable_type', 'App\Models\Post')
                ->where('likeable_id', $post->id)->latest()->get();


            // Variabel dengan usernya
            $listwholikes = $likes->load(['user']);


            return view('like', [
                'likes' => $listwholikes,
                'post'  => $post
            ]);
        } else {
            return redirect()->route('home')->with([
                'message' => 'Postingan sudah dihapus'
            ]);
        }
    }


    public function createNotifPostLike($user, $post, $like)
    {
        if ($user->id != $post->user_id) {
            $notif = new Notif();
            $notif->user_id = $user->id;
            $notif->receiver_id = $post->user_id;
            $notif->notifable_id = $like->id;
            $notif->notifable_type = 'App\Models\Like';
            $notif->type = 'LikePost';
            $like->notif()->save($notif);
        }
    }


    public function deleteNotifPostLike($user, $post, $like)
    {

        $cekNotif = Notif::where('user_id', $user->id)
            ->where('receiver_id', $post->user_id)
            ->where('notifable_id', $like->id)
            ->where('notifable_type', 'App\Models\Like')
            ->where('type', 'LikePost')->first();

        if ($cekNotif) {
            $cekNotif->delete();
        }
    }


    // NOTIF LIKE KOMEN
    public function createNotifCommentLike($user, $comment, $like)
    {
        if ($user->id != $comment->user_id) {
            $notif = new Notif();
            $notif->user_id = $user->id;
            $notif->receiver_id = $comment->user_id;
            $notif->notifable_id = $like->id;
            $notif->notifable_type = 'App\Models\Like';
            $notif->type = 'LikeComment';
            $like->notif()->save($notif);
        }
    }


    public function deleteNotifCommentLike($user, $comment, $like)
    {

        $cekNotif = Notif::where('user_id', $user->id)
            ->where('receiver_id', $comment->user_id)
            ->where('notifable_id', $like->id)
            ->where('notifable_type', 'App\Models\Like')
            ->where('type', 'LikeComment')->first();

        if ($cekNotif) {
            $cekNotif->delete();
        }
    }
}
