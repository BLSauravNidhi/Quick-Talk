
<div>
    <div class="forms-container min-w-80 w-full h-fit pb-15 my-shadow rounded-2xl p-10">
        <div class="w-full h-fit flex items-center justify-center flex-nowrap mb-10">
            <h1 class=" poppins font-bold text-2xl text-primary text-center">Register</h1>
        </div>
        <form wire:submit.prevent="submit" class=" flex flex-col flex-nowrap gap-2.5">
            @csrf
            <input type="text" name="userid" wire:model.live="username" placeholder="Username" autocomplete="username" spellcheck="false" class=" font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
            @if($errors->has('username'))
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
            @else
                @if(filled($username))
                    <p class="px-1 text-green-500 font-medium text-sm whitespace-nowrap flex flex-nowrap items-center gap-1">
                        <svg class=" fill-g-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="13" height="13" viewBox="0 0 256 256" xml:space="preserve">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path class=" fill-green-500" d="M 43.077 63.077 c -0.046 0 -0.093 -0.001 -0.14 -0.002 c -1.375 -0.039 -2.672 -0.642 -3.588 -1.666 L 23.195 43.332 c -1.84 -2.059 -1.663 -5.22 0.396 -7.06 c 2.059 -1.841 5.22 -1.664 7.06 0.396 l 12.63 14.133 l 38.184 -38.184 c 1.951 -1.952 5.119 -1.952 7.07 0 c 1.953 1.953 1.953 5.119 0 7.071 L 46.612 61.612 C 45.674 62.552 44.401 63.077 43.077 63.077 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path class=" fill-green-500" d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 2.762 0 5 2.239 5 5 s -2.238 5 -5 5 c -19.299 0 -35 15.701 -35 35 s 15.701 35 35 35 s 35 -15.701 35 -35 c 0 -2.761 2.238 -5 5 -5 s 5 2.239 5 5 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            </g>
                        </svg>
                        Username is available.
                    </p>
                @endif
            @endif

            <input type="password" name="password" wire:model.live="password" id="password" placeholder="Password" autocomplete="current-password" class=" password font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">

            <input type="password" name="password_confirmation" wire:model.live="password_confirmation" id="confirm-password" placeholder="Confirm Password" autocomplete="current-password" class=" password font-medium text-gray-700 text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
            <p class=" px-1 text-red-500 font-medium text-sm block">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </p> 

            {{-- Show Password and Forget Password --}}
            <div class="w-full h-fit flex flex-nowrap items-center mt-4 px-1">
                <div class="w-fit h-fit flex flex-nowrap gap-2.5 items-center">
                    <input type="checkbox" id="show-password" class=" my-shadow w-3 h-3 border-none outline-none">
                    <label for="show-password" class=" text-sm poppins text-gray-500">Show Password</label>
                </div>
            </div>
            {{-- ------------------------------------- --}}

            <button type="submit" @disabled(!$isFormValid) class=" w-full text-center py-1.5 bg-primary text-white font-semibold poppins rounded-md mt-6 {{ $isFormValid ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-400 cursor-not-allowed opacity-50' }}">Sign up</button>

        </form>    
        <div class=" text-sm lexend w-full flex flex-nowrap items-center justify-center gap-1 whitespace-nowrap mt-3">
            <p class=" text-gray-500">Already have an account?</p>
            <a href="{{ route('login')}}" class=" text-primary font-medium">Log in</a>
        </div>
    </div>
</div>