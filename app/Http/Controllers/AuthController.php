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
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'username' => ['required'],
            'password' => ['required'],
            'name' => ['required', 'max:255'],
        ]);

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

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credentials = $validator->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Mendapatkan pengguna yang terotentikasi
            $user = Auth::user();

            // Mengarahkan ke halaman yang sesuai berdasarkan peran (role)
            return redirect()->intended('/home')
                ->with('succces', 'anda berhasil login');
        }

        return back()->withErrors(
            ['password' => 'Password yang dimasukkan salah.']
        )->with('failed', 'Login Failed');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
