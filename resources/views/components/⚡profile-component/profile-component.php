<?php

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\ValidationException;

new class extends Component
{
    use WithFileUploads;

    public $loggedInUser;
    public $profile; // This can be a string (from DB) or an uploaded file object
    public $username;
    public $isFormValid = false;

    public function mount(){
        $this->loggedInUser = auth()->user();
        $this->profile = $this->loggedInUser->profile;
        $this->username = $this->loggedInUser->username;
    }

    protected function rules(){
        // Base rule for username
        $rules = [
            'username' => ['required'],
            'profile' => ['nullable']
        ];

        // If a new file is being uploaded, add the image validation rules
        if (is_object($this->profile)) {
            $rules['profile'][] = 'image';
            $rules['profile'][] = 'mimes:jpeg,png,jpg,webp,jfif';
            $rules['profile'][] = 'max:2048';
        }

        return $rules;
    }


    protected function messages(){
        return [
            'profile.image' => 'Please choose only an image file.',
            'username.required' => 'Username can\'t be empty.'
        ];
    }

    public function updated($propertyName){
        // Try-catch blocks prevent validation failures from breaking execution
        try {
            $this->validateOnly($propertyName);
            
            // Re-validate everything to ensure the *whole* form is valid before enabling button
            $this->validate();
            $this->isFormValid = true;
        } catch (ValidationException $e) {
            $this->isFormValid = false;
            throw $e; // Rethrow to show errors in the UI
        }
    }

    public function submit(){
        $this->validate();

        $updateData = ['username' => $this->username];

        // Only store the profile if a new file object was uploaded
        if (is_object($this->profile)) {
            $filename = $this->loggedInUser->id . "." . $this->profile->getClientOriginalExtension();
            // This stores the image in 'storage/app/public/profiles' and gets the filename
            $updateData['profile'] = $this->profile->storeAs('profiles', $filename , 'public');
        }

        User::where('id', $this->loggedInUser->id)->update($updateData);

        return redirect()->route('edit-profile');
    }
};
