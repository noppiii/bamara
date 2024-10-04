<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verifyEmail($token)
    {
        $user = User::where('email_verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error_message', 'Invalid verification token.');
        }

        $user->markEmailAsVerified();
        $user->status_account = 'active';
        $user->email_verification_token = null;
        $user->save();

        return redirect()->route('home')->with('success_message', 'Email successfully verified. You can now login.');
    }

}
