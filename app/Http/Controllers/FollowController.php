<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Notif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(User $people)
    {

        // $user disini adalah id dari user yang inginkita follow
        // $variabel untuk user kita adalah $is_me

        $user = Auth::user();

        $cekfollow = Follow::where('user_id', $user->id)
            ->where('following_id', $people->id)
            ->first();

        if ($cekfollow) {

            $this->deleteNotif($user, $people, $cekfollow);

            $cekfollow->delete();
            return redirect()->back();
        } else {

            $follow = new Follow();
            $follow->following_id = $people->id;
            $follow->user_id = $user->id;
            $follow->save();

            $this->createNotif($user, $people, $follow);

            return redirect()->back();
        }
    }

    public function deleteFollower(User $people)
    {
        $user = Auth::user();

        $follower = Follow::where('user_id', $people->id)
            ->where('following_id', $user->id)
            ->first();

        if ($follower) {

            $follower->delete();
            return redirect()->back();
        }

        return redirect()->back()->with([
            'message' => 'Follower sudah dihapus'
        ]);
    }

    public function seeFollower(Request $request, User $people)
    {

        $user = Auth::user();
        $follows = Follow::where('following_id', $people->id)->latest()->get();
        $followers = $follows->map(function ($follow) {
            return $follow->follower;
        });


        return view('follow', [
            'follows' => $followers,
            'judul' => "Follower",
            'people' => $people,
            'user' => $user
        ]);
    }

    public function seeFollowing(User $people)
    {
        $user = Auth::user();
        $follows = Follow::where('user_id', $people->id)->latest()->get();
        $followings = $follows->map(function ($follow) {
            return $follow->following;
        });


        return view('follow', [
            'follows' => $followings,
            'judul' => "Following",
            'people' => $people,
            'user' => $user
        ]);
    }



    // NOTIFIKASI
    public function createNotif($user, $people, $follow)
    {
        $notif = new Notif();
        $notif->user_id = $user->id;
        $notif->receiver_id = $people->id;
        $notif->notifable_id = $follow->id;
        $notif->notifable_type = 'App\Models\Follow';
        $notif->type = 'Follow';

        $follow->notif()->save($notif);
    }


    public function deleteNotif($user, $people, $cekfollow)
    {

        $cekNotif = Notif::where('user_id', $user->id)
            ->where('receiver_id', $people->id)
            ->where('notifable_id', $cekfollow->id)
            ->where('notifable_type', 'App\Models\Follow')
            ->where('type', 'Follow')->first();

        if ($cekNotif) {
            $cekNotif->delete();
        }
    }
}
