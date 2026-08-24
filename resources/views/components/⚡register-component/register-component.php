<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

new class extends Component
{
    public $username = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $isFormValid = false; // Tracks button state

    protected function rules()
    {
        return [
            'username' => ['required', 'string', 'min:5', 'max:255', 'regex:/^[A-Za-z0-9@_]+$/','lowercase'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ];
    }

    protected function messages()
    {
        return [
            'username.regex' => 'Use only letters, numbers, and @.',
            'email.email' => 'Enter a valid email address.',
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
                'email' => $this->email,
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
            'email' => $this->email,
            'password' => $this->password,
            'created_at' => now(),
            'updated_at', NULL,
        ]);

        // authenticate & login
        Auth::login($user);
        return redirect()->route('chat.index');
    }
};