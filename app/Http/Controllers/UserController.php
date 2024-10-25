<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;



class UserController extends Controller
{


    public function source()
    {
        return view('dashboard.source');
    }

    public function billing()
    {
        return view('dashboard.billing');
    }

    public function connection()
    {
        return view('dashboard.connection');
    }

    public function performance()
    {
        return view('dashboard.performance');
    }

    public function user()
    {
        return view('dashboard.user');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function support()
    {
        return view('dashboard.support');
    }

    // google auth method
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id, // Save the google_id
                    'password' => bcrypt(Str::random(16)), // Generate a random password
                    'terms_accepted_at' => now(), // Accept terms automatically
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['google' => 'Unable to login using Google.']);
        }
    }


    public function handleGoogleCallback22()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
