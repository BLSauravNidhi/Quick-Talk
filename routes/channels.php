<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat-channel.{userId}', function($user, $userId){
    return (int) $user->id === (int) $userId;
});

Broadcast::channel('online-users', function($user){
    // Forcefully reject if session is dead or guest
    if (!Auth::check() || !$user) {
        return false;
    }

    return [
        'id' => $user->id,
        'email' => $user->email,
    ];
});