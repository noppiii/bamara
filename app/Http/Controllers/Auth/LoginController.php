<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ];
        $customMessages = [
            'email.required' => 'Email harus diisi!!!',
            'email.email' => 'Email tidak sesuai format!!!',
            'password.required' => 'Password harus diisi!!!',
        ];
        $this->validate($request, $rules, $customMessages);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->status_account === 'pending') {
                Auth::logout();
                return redirect()->back()->with('error_message', 'Data anda belum terverifikasi.');
            }

            if ($user->status_account === 'inactive') {
                Auth::logout();
                return redirect()->back()->with('error_message', 'Maaf data anda tidak aktif.');
            }

            Session::flash('success_message', 'Berhasil Masuk');

            if ($user->hasRole('Admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('User')) {
                return redirect()->route('user.dashboard');
            }

            return redirect()->route('login')->with('error_message', 'Anda tidak memiliki akses.');
        }

        return redirect()->back()->with("error_message", "Email atau Password tidak sesuai. Silahkan masukan data dengan benar!!!!!");
    }
}
