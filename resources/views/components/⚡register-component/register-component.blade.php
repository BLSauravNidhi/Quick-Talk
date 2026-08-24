
<div>
    <div class="forms-container min-w-80 lg:min-w-110 w-full h-fit pb-15 my-shadow rounded-2xl p-10">
        <div class="w-full h-fit flex items-center justify-center flex-nowrap mb-10">
            <h1 class=" poppins font-bold text-2xl text-primary text-center">Register</h1>
        </div>
        <form wire:submit.prevent="submit" class=" flex flex-col flex-nowrap gap-2.5">
            @csrf
            <input type="text" name="userid" wire:model.live="username" placeholder="Username" autocomplete="username" spellcheck="false" class=" font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
            @error('username')
                <p class="px-1.5 text-red-500 font-medium text-sm flex flex-nowrap items-center gap-1"> 
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="13" height="13" viewBox="0 0 256 256" xml:space="preserve">
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 28.5 65.5 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 33 -33 c 1.561 -1.562 4.096 -1.562 5.656 0 c 1.563 1.563 1.563 4.095 0 5.657 l -33 33 C 30.547 65.109 29.524 65.5 28.5 65.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 61.5 65.5 c -1.023 0 -2.048 -0.391 -2.828 -1.172 l -33 -33 c -1.562 -1.563 -1.562 -4.095 0 -5.657 c 1.563 -1.562 4.095 -1.562 5.657 0 l 33 33 c 1.563 1.562 1.563 4.095 0 5.656 C 63.548 65.109 62.523 65.5 61.5 65.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                        </g>
                    </svg>
                    {{ $errors->first('username') }} 
                </p>
            @enderror
            <input type="email" name="email" wire:model.live="email" placeholder="Email" autocomplete="email" spellcheck="false" class=" font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
            @error('email')
                <p class="px-1.5 text-red-500 font-medium text-sm flex flex-nowrap items-center gap-1"> 
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="13" height="13" viewBox="0 0 256 256" xml:space="preserve">
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 28.5 65.5 c -1.024 0 -2.047 -0.391 -2.829 -1.172 c -1.562 -1.562 -1.562 -4.095 0 -5.656 l 33 -33 c 1.561 -1.562 4.096 -1.562 5.656 0 c 1.563 1.563 1.563 4.095 0 5.657 l -33 33 C 30.547 65.109 29.524 65.5 28.5 65.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 61.5 65.5 c -1.023 0 -2.048 -0.391 -2.828 -1.172 l -33 -33 c -1.562 -1.563 -1.562 -4.095 0 -5.657 c 1.563 -1.562 4.095 -1.562 5.657 0 l 33 33 c 1.563 1.562 1.563 4.095 0 5.656 C 63.548 65.109 62.523 65.5 61.5 65.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                        </g>
                    </svg>
                    {{ $errors->first('email') }} 
                </p>
            @enderror
            <input type="password" name="password" wire:model.live="password" id="password" placeholder="Password" autocomplete="current-password" class=" password font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">

            <input type="password" name="password_confirmation" wire:model.live="password_confirmation" id="confirm-password" placeholder="Confirm Password" autocomplete="current-password" class=" password font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
            <p class=" px-1 text-red-500 font-medium text-sm block">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </p> 

            {{-- Show Password and Forget Password --}}
            <div class="w-full h-fit flex flex-nowrap items-center px-1">
                <div class="w-fit h-fit flex flex-nowrap gap-2.5 items-center">
                    <input type="checkbox" id="show-password" class=" my-shadow w-3 h-3 border-none outline-none">
                    <label for="show-password" class=" text-sm poppins text-gray-500">Show Password</label>
                </div>
            </div>
            {{-- ------------------------------------- --}}

            <button type="submit" @disabled(!$isFormValid) class=" w-full text-center py-1.5 bg-primary text-white font-semibold poppins rounded-md  {{ $isFormValid ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-400 cursor-not-allowed opacity-50' }}">Sign up</button>

        </form>
        <div class="w-fit mx-auto pr-3 text-primary my-3 my-shadow rounded-full">
            <a href="{{ route('auth.google')}}" class=" whitespace-nowrap flex flex-nowrap items-center gap-2 text-xs poppins font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class=" w-8 h-8 stroke-none">
                    <g transform="translate(1.4066 1.4066) scale(2.81)">
                        <circle cx="45" cy="45" r="45" fill="#ffffff"/>
                        <path d="M 74 45.658 c 0 -2.433 -0.197 -4.209 -0.625 -6.05 H 45.592 v 10.982 H 61.9 c -0.329 2.729 -2.104 6.839 -6.05 9.601 l -0.055 0.368 l 8.785 6.805 l 0.609 0.061 C 70.778 62.262 74 54.667 74 45.658" fill="#4285f4"/>
                        <path d="M 45.592 74.592 c 7.99 0 14.697 -2.631 19.596 -7.168 L 55.85 60.19 c -2.499 1.743 -5.853 2.959 -10.258 2.959 c -7.825 0 -14.467 -5.162 -16.835 -12.297 l -0.347 0.029 l -9.134 7.069 l -0.119 0.332 C 24.023 67.95 34.018 74.592 45.592 74.592" fill="#34a853"/>
                        <path d="M 28.757 50.853 c -0.625 -1.841 -0.986 -3.814 -0.986 -5.853 c 0 -2.039 0.362 -4.011 0.953 -5.853 l -0.017 -0.392 l -9.249 -7.183 l -0.303 0.144 C 17.151 35.728 16 40.232 16 45 s 1.151 9.272 3.156 13.283 L 28.757 50.853" fill="#fbbc05"/>
                        <path d="M 45.592 26.85 c 5.557 0 9.305 2.4 11.442 4.406 l 8.351 -8.154 c -5.129 -4.768 -11.804 -7.694 -19.794 -7.694 c -11.574 0 -21.569 6.642 -26.435 16.308 l 9.568 7.431 C 31.125 32.012 37.766 26.85 45.592 26.85" fill="#ea4335"/>
                    </g>
                </svg>
                Signup with Google
            </a>
        </div>
        <div class=" text-sm lexend w-full flex flex-nowrap items-center justify-center gap-1 whitespace-nowrap mt-3">
            <p class=" text-gray-500">Already have an account?</p>
            <a href="{{ route('login')}}" class=" text-primary font-medium">Log in</a>
        </div>
    </div>
</div>