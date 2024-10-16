<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\Auth\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $messages = [
                'name.required' => 'Full name is required.',
                'name.max' => 'Full name cannot be longer than 255 characters.',
                'email.required' => 'Email is required.',
                'email.email' => 'Please provide a valid email address.',
                'email.unique' => 'This email is already registered.',
                'phone.required' => 'Phone number is required.',
                'phone.max' => 'Phone number cannot be longer than 15 characters.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.'
            ];

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required|string|max:15',
                'password' => 'required|string|min:8',
            ], $messages);

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = Hash::make($request->input('password'));

            $user->email_verification_token = Str::random(60);

            $userRole = Role::where('name', 'User')->first();
            if ($userRole) {
                $user->role_id = $userRole->id;
            }

            $user->save();

            Mail::to($user->email)->send(new EmailVerification($user));

            return redirect()->route('login')->with('success_message_create', 'Registration successful! Check your email for confirmation.');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error_message', 'An error occurred during registration. Please try again.');
        }
    }



}
