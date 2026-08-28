<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->id();
            // The user who sends the friend request
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // The user who receives the friend request
            $table->foreignId('friend_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['pending','accepted','blocked', 'rejected'])->default('pending'); 
            $table->timestamps();

            // Prevent duplicate entries between the same two users
            $table->unique(['user_id', 'friend_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friendships');
    }
};
