<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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


    public function formConfirmPassword()
    {

        return view('formConfirm');
    }


    public function confirmPassword(Request $request)
    {
        $inputPassword = $request->input('password');
        $user = Auth::user();

        if (Hash::check($inputPassword, $user->password)) {
            // Password sesuai, redirect ke halaman ubah profile
            return redirect()->route('formUbahProfile'); // Ganti 'editProfile' dengan nama route ke halaman ubah profile
        }

        // Password tidak sesuai, kembali ke halaman konfirmasi password
        return redirect()->back()->with('error', 'Password tidak sesuai');
    }



    public function formUbahProfile()
    {
        $user = Auth::user();

        return view('formProfile', [
            'user' => $user
        ]);
    }
}
