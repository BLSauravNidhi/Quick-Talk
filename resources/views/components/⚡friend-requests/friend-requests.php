<?php

use App\Models\Friendship;
use Livewire\Component;

new class extends Component
{
    public $request;
    public $user_id;
    public $sender_id;
    public $request_accepted;

    public function mount(){
        $this->sender_id = $this->request->senderInfo->id;
        $this->request_accepted = false;
    }

    public function acceptRequest(){
        $this->user_id = auth()->user()->id;

        $friendship = Friendship::where('user_id', $this->sender_id)
        ->where('friend_id', $this->user_id)
        ->update([
            'status' => 'accepted'
        ]);

        $this->request_accepted = true;
    }

    public function declineRequest(){
        $this->user_id = auth()->user()->id;

        $friendship = Friendship::where('user_id', $this->sender_id)
        ->where('friend_id', $this->user_id)
        ->update([
            'status' => 'rejected'
        ]);
    }
};