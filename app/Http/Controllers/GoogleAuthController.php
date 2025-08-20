<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     *
     * @return \Illuminate\Http\Response
     * */
   public function handleGoogleCallback()
{
    try {
        // Fetch the user's data from Google
        $googleUser = Socialite::driver('google')->stateless()->user();
        
        // Check if user already exists in the database
        $user = User::where('email', $googleUser->getEmail())->first();
        
        if (!$user) {
            // If user doesn't exist, create a new user
            
            $randomNumber = rand(20, 50);  // Random age value for the new user
            $user = User::create([
                'name' => $googleUser->getName(),
                'slug' => Str::slug($googleUser->getName()),
                'email' => $googleUser->getEmail(),
                'age' => $randomNumber,       
                'password' => bcrypt('password'),
                'is_active' => 1, 
                     // Mark as active
            ]);
            // dd($user);
        }
         
        // Mark email as verified if not already
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }
       
        // Log the user in (this is done for both new and existing users)
        Auth::login($user);

        // Redirect to posts page (regardless of whether it's a new user or an existing one)
        return redirect()->route('posts.index')->with('success', 'Login successful with Google!');
    } catch (\Exception $e) {
        // Redirect to login page on error
        return redirect()->route('login')->with('error', 'Google login failed. Please try again.');
    }
}

}