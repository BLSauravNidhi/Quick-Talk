<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component
{
    public array $onlineUsers = [];

    #[On('echo-presence:online-users,here')]
    public function handleHere($users)
    {
        $this->onlineUsers = $users;

        $this->dispatch(
            'online-users-updated',
            users: $this->onlineUsers
        );
    }

    #[On('echo-presence:online-users,joining')]
    public function handleJoining($user)
    {
        // Prevent duplicates
        $exists = collect($this->onlineUsers)
            ->contains('id', $user['id']);

        if (!$exists) {
            $this->onlineUsers[] = $user;
        }

        $this->dispatch(
            'online-users-updated',
            users: $this->onlineUsers
        );
    }

    #[On('echo-presence:online-users,leaving')]
    public function handleLeaving($user)
    {
        $this->onlineUsers = array_values(
            array_filter(
                $this->onlineUsers,
                fn ($onlineUser) => $onlineUser['id'] != $user['id']
            )
        );

        $this->dispatch(
            'online-users-updated',
            users: $this->onlineUsers
        );
    }
};