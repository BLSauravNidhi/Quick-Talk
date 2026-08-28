<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    // Get User Info
    public function senderInfo(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
