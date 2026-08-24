<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Function: googleLogin
     * Description: This function will redirect to Google
     * @param NA
     * @return void
     */
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    /**
     * Function: googleAuthentication
     * Description: This functionn will authenticate the user through google
     * @param NA
     * @return void
     */
    public function googleAuthentication(){
        $googleUser = Socialite::driver('google')->user();
        // dd($googleUser);

        $user = User::where('google_id', $googleUser->id)->first();

        if($user){
            Auth::login($user);
            return redirect()->route('chat.index');
        } else {
            $userData = User::create([
                'username' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => 'GoogleUser92344ByAdmin',
                'profile' => $googleUser->avatar,
                'google_id' => $googleUser->id
            ]);

            if($userData){
                Auth::login($userData);
                return redirect()->route('chat.index');
            }
        }
    }
}
