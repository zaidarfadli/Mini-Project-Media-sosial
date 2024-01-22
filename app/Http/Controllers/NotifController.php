<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifController extends Controller
{
    public function myNotifikasi()
    {
        $user = Auth::user();

        $notifs = Notif::with('comment.post')
            ->where('receiver_id', $user->id)
            ->latest()->get();

        if ($notifs->isEmpty()) {
            return view('notifikasi', [
                'message' => 'active',
                'user' => $user

            ]);
        }
        return view('notifikasi', [
            'notifs' => $notifs
        ]);
    }
}
