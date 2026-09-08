<?php

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public $friend;
    public $last_message;
    public $activity_time;
    // Online users
    public array $onlineUsers = [];
    public $friendStatus;

    public function mount($friend){
        $this->friend = $friend;

        $chat = Message::where(function ($query) use ($friend) {
            $query->where('sender_id', Auth::user()->id)->where('reciever_id', $friend->id);
        })
        ->orWhere(function ($query) use ($friend) {
            $query->where('sender_id', $friend->id)->where('reciever_id', Auth::user()->id);
        })
        ->latest()
        ->first();

        $this->last_message = $chat ? $chat->message : 'No messages yet';
        $this->activity_time = $chat ? $chat->created_at : '';
    }

    // Update status after dispach from online-users component
    #[On('online-users-updated')]
    public function updateFriendStatus($users)
    {
        $this->friendStatus = 'offline';

        foreach ($users as $user) {

            if ((int) $user['id'] === (int) $this->friend->id) {
                $this->friendStatus = 'online';
                break;
            }
        }
    }
};