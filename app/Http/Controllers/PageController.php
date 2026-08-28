<?php

namespace App\Http\Controllers;
use App\Models\Friendship;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        if(!Auth::check()){
            return view('login-page');
        } 
    }
    public function register(){
        if(!Auth::check()){
            return view('register-page');
        } 
    }

    public function world(){
        $loggedInUser = auth()->id();

        $users = User::select(['id', 'username', 'profile', 'email'])
            // Exclude the logged-in user themselves from the list
            ->where('id', '!=', $loggedInUser) 
            // Must NOT have sent a friend request to the logged-in user
            ->whereDoesntHave('sentFriends', function ($query) use ($loggedInUser) {
                $query->where('friend_id', $loggedInUser);
                $query->where('status', 'accepted');
            })
            // Must NOT have received a friend request from the logged-in user
            ->whereDoesntHave('receivedFriends', function ($query) use ($loggedInUser) {
                $query->where('user_id', $loggedInUser);
                $query->where('status', 'accepted');
            })
            ->get();

        return view('world', ['users'=> $users]);
    }

    public function notifications(){
        $user_id = auth()->user()->id;
        // Get Friend Requests
        $friend_requests = Friendship::where('friend_id', $user_id)
        ->where('status','pending')
        ->with('senderInfo:id,username,email,profile')
        ->get();

        
        return view('notifications', [ 'friend_requests' => $friend_requests]);
    }
}
