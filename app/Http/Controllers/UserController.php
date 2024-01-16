<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myProfile()
    {
        $user = Auth::user();
        $user = $user->load(['post']);
        return view('profile', [
            'user' => $user,
            'is_mine' => $user
        ]);
    }

    public function seeProfile(User $user)
    {
        $is_mine = Auth::user();

        if ($is_mine->id == $user->id) {
            return redirect()->route('myProfile');
        }

        return view('profile', [
            'user' => $user,
            'is_mine' => $is_mine
        ]);
    }
}
