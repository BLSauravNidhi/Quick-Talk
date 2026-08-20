<?php

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component
{
    public $friend;
    public $last_message;
    public $activity_time;

    public function mount($friend){
        $this->friend = $friend;

        $chat = Message::where(function ($query) use ($friend) {
            $query->where('sender_id', Auth::user()->id)->where('reciever_id', $friend->id);
        })
        ->orWhere(function ($query) use ($friend) {
            $query->where('sender_id', $friend->id)->where('reciever_id', Auth::user()->id);
        })
        ->first();

        $this->last_message = $chat ? $chat->message : 'No messages yet';
        $this->activity_time = $chat ? $chat->created_at : '';
    }
};