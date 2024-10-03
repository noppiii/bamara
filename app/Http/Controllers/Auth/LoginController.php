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
            'email.required' => 'Email is required!',
            'email.email' => 'Please provide a valid email address!',
            'password.required' => 'Password is required!',
        ];
        $this->validate($request, $rules, $customMessages);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->status_account === 'pending') {
                Auth::logout();
                return redirect()->back()->with('error_message', 'Your account is not yet verified.');
            }

            if ($user->status_account === 'inactive') {
                Auth::logout();
                return redirect()->back()->with('error_message', 'Sorry, your account is inactive.');
            }

            Session::flash('success_message', 'Login successful');

            if ($user->hasRole('Admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('User')) {
                return redirect()->route('user.dashboard');
            }

            return redirect()->route('login')->with('error_message', 'You do not have access.');
        }

        return redirect()->back()->with("error_message", "Invalid email or password. Please enter correct information!");
    }
}
