<?php

use App\Models\Friendship;
use Livewire\Component;

new class extends Component
{
    public $world_user;
    public $world_user_id;
    public $requested = false;
    public $accepted = false;
    public $received_request;
    public $button_status;

    public function mount($world_user){
        $this->world_user_id = $world_user->id;

        // Check if already requested
        $this->requested = Friendship::where(function($query){
            $query->where('user_id', auth()->user()->id);
            $query->where('friend_id', $this->world_user_id);
        })->first() ? true : false ;

        $this->received_request = Friendship::where(function($query){
            $query->where('user_id', $this->world_user_id);
            $query->where('friend_id', auth()->user()->id);
        })->first() ? true : false ;

        $this->updateBtnStatus();
    }

    // Send Friend Request
    public function sendRequest()
    {
        // dd($this->received_request);
        if(!$this->requested){
            $loggedInUser = auth()->user();
            if($this->received_request){
                $loggedInUser->receivedFriends()->updateExistingPivot($this->world_user_id, ['status' => 'accepted']);
            } else {
                $loggedInUser->sentFriends()->attach($this->world_user_id, ['status' => 'pending']);
                $this->requested = true;
            }
        }

        if($this->received_request){
            Friendship::where(function($query){
                $query->where('user_id', $this->world_user_id);
                $query->where('friend_id', auth()->id());
            })->update([
                'status' => 'accepted',
            ]);
            $this->accepted = true;
        }

        $this->updateBtnStatus();
    }

    public function updateBtnStatus(){
        if (!$this->requested){
            if($this->received_request){
                $this->button_status = 'Accept';
            } else{
                $this->button_status = 'Add friend';
            }
        } 
        if($this->requested){
            $this->button_status = 'Requested';
        }
        if($this->accepted){
            $this->button_status = 'Friends';
        }
    }
};