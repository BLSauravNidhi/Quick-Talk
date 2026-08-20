<?php

use App\Models\Message;
use App\Models\User;
use Livewire\Component;

new class extends Component
{
    public $reciever_id;
    public $recieverInfo;
    public $sender_id;
    public $message;
    public $chats = [];

    public function mount( $reciever_id){

        $this->sender_id = auth()->user()->id;
        // Getting reciever's info
        $this->recieverInfo = User::select(['id','username','profile'])
        ->find($reciever_id);

        // Getting Chats
        $chats = Message::where(function($query){
            $query->where('sender_id', $this->sender_id);
            $query->where('reciever_id', $this->reciever_id);
        })
        ->orWhere(function($query){
            $query->where('sender_id', $this->reciever_id);
            $query->where('reciever_id', $this->sender_id);
        })
        // ->with(['sender' => function($query){
        //     $query->select(['id', 'username', 'profile']);
        // }, 'reciever' => function($query){
        //     $query->select(['id', 'username', 'profile']);
        // }])
        ->get();

        foreach ($chats as $message) {
            $this->appendChatMessage($message);
        }


        // dd($this->chats);
    }

    protected function appendChatMessage($message){
        $this->chats[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender_id' => $message->sender_id,
            'reciever_id' => $message->reciever_id,
            'created_at' => $message->created_at
        ];
    }

    public function send(){
        $chatMessage = new Message();
        $chatMessage->sender_id = $this->sender_id;
        $chatMessage->reciever_id = $this->reciever_id;
        $chatMessage->message = $this->message;
        $chatMessage->save();

        $this->message = '';
    }
};