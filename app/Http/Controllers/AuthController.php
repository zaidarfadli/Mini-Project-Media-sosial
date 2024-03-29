<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function formRegistrasi()
    {
        return view('registrasi');
    }

    public function formLogin()
    {
        return view('login');
    }


    public function registrasi(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'unique:users,email'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required'],
            'cpassword' => 'required|same:password',
            'name' => ['required', 'max:255'],
        ]);

        $validatedData['image'] = 'default_profile.png';

        $validatedData['password'] = Hash::make($validatedData['password']);
        try {

            $user = User::create($validatedData);

            // Redirect with success message and user data
            return redirect()->route('login')->with([
                'success' => 'Registrasi berhasil! Please login',
                'user' => $user
            ]);
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with([]);
        }
    }




    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Password yang dimasukkan salah.'
        ])->with('failed', 'Login Failed');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
