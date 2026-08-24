<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

new class extends Component
{
    public $username = '';
    public $password = '';
    public $password_confirmation = '';
    public $isFormValid = false; // Tracks button state

    protected function rules()
    {
        return [
            'username' => ['required', 'string', 'min:5', 'max:255', 'regex:/^[A-Za-z0-9@_]+$/', 'unique:users,username','lowercase'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ];
    }

    protected function messages()
    {
        return [
            'username.regex' => 'Use only letters, numbers, and @.',
            'username.lowercase' => 'Use only lowercase letters.',
            'username.min' => 'Username should be at least 5 characters',
            'password.min' => 'Password must contain at least 8 characters',
            'password.confirmed' => 'The passwords do not match.',
        ];
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'password_confirmation') {
            $this->validateOnly('password');
        }

        // 1. Validate only the single field for inline user errors
        $this->validateOnly($propertyName);

        // 2. Silently check if the ENTIRE form is valid to toggle the button
        $validator = Validator::make(
            [
                'username' => $this->username,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation
            ],
            $this->rules(),
            $this->messages()
        );

        $this->isFormValid = $validator->passes();
    }

    public function submit()
    {
        $this->validate();
        
        // creating user data
        $user = User::create([
            'username' => $this->username,
            'password' => $this->password,
            'created_at' => now(),
            'updated_at', NULL,
        ]);
        

        // authenticate & login
        Auth::login($user);
        return redirect()->route('chat.index');
    }
};