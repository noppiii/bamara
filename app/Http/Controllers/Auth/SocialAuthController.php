<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\Auth\Role;
use App\Models\Auth\SocialAccount;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
//        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::where('email', $googleUser->email)->first();
            $userRole = Role::where('name', 'User')->first();

            $isNewUser = false;

            if (!$user) {
                $user = new User();
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->password = Hash::make('random-password');
                $user->role_id = $userRole->id;
                $user->profile_picture = $googleUser->avatar;
                $user->status_account = 'pending';
                $user->email_verification_token = Str::random(60);
                $user->save();

                Mail::to($user->email)->send(new EmailVerification($user));

                $isNewUser = true;
            }

            SocialAccount::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'provider_id' => 1,
                ],
                [
                    'provider_user_id' => $googleUser->id,
                    'access_token' => $googleUser->token,
                    'refresh_token' => $googleUser->refreshToken,
                    'expires_at' => now()->addSeconds($googleUser->expiresIn),
                ]
            );

            if ($isNewUser) {
                return redirect()->route('home')->with('success_message_create', 'Registration successful! Please check your email to confirm your account.');
            } else {
                Auth::login($user);

                if (!$user->hasVerifiedEmail()) {
                    return redirect()->route('home')->with('error_message', 'Please verify your email before proceeding.');
                }

                return redirect()->route('home')->with('success_message_create', 'Logged in successfully!');
            }

//        } catch (Exception $e) {
//            return redirect()->route('login')->with('error_message', 'Failed to login with Google, please try again.');
//        }
    }
}
