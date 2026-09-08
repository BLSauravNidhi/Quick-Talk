<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        // Fetch friends in a single database query using an OR condition
        $friends = User::whereHas('receivedFriends', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orWhereHas('sentFriends', function ($query) use ($userId) {
                $query->where('friend_id', $userId);
            })
            ->select('id', 'username', 'profile')
            ->get();

        return view('dashboard', ['friends'=> $friends]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $friend_id)
    {
        $userId = auth()->id();

        $friend = User::where('id', $friend_id)
            ->where(function ($query) use ($userId) {
                $query->whereHas('receivedFriends', function ($query) use ($userId) {
                    $query->where('user_id', $userId);
                })
                ->orWhereHas('sentFriends', function ($query) use ($userId) {
                    $query->where('friend_id', $userId);
                });
            })
            ->first();

        if (!$friend) {
            abort(404);
        }
        
        return view('chat-page', ['reciever_id' => $friend_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
