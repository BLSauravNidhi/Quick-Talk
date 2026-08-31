
<div>
    <form wire:submit="submit" id="profile" class="w-[80vw] max-w-100 mx-auto py-6 h-full flex flex-col gap-3" enctype="multipart/form-data">
        @error('profile')
            <p class="text-red-600 font-medium text-center mx-auto">{{$message}}</p>
        @enderror
        <div class=" w-35 h-35 mx-auto rounded-full bg-white border border-gray-400 relative">
            <img src="{{ $loggedInUser->profile && file_exists(public_path('storage/' . $loggedInUser->profile))
                ? asset('storage/' . $loggedInUser->profile) 
                : ($loggedInUser->profile ? $loggedInUser->profile : asset('images/anonymous_user.webp')) }}" alt="" class=" w-full h-full object-cover rounded-full" referrerpolicy="no-referrer">
            <div class=" absolute right-1 bottom-1 bg-primary p-2 rounded-full">
                <label for="image-input"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                </svg></label>
                <input type="file" id="image-input" wire:model.live="profile" value="{{ $profile }}" class=" text-[0px] hidden">
            </div>
        </div>
        <div class=" w-full flex flex-col flex-nowrap mt-4">
            <input type="text" wire:model.live="username" class=" px-8 py-3 focus:outline-0 border-b-2 border-gray-300 poppins text-sm placeholder:text-red-600 placeholder:font-medium" placeholder="{{ $errors->first('username') }}" value="{{ $username}}">

            <p class="  px-8 py-3 border-b-2 border-gray-300 poppins text-sm italic text-gray-500">{{ $loggedInUser->email}}</p>

            <button type="submit" class=" w-fit mx-auto bg-emerald-700 text-white px-3 py-2 my-5 rounded-md poppins font-medium text-sm" @disabled(!$isFormValid) >Save changes</button>
        </div>
    </form>
</div>