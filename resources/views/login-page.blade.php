<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Quick Talk - Login</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <script src="{{ asset('js/show-password.js')}}" defer></script>
</head>
<body>
    <div class="w-screen h-screen bg-[#e9e9e9] flex justify-center items-center px-7 py-8">
        <div class="forms-container max-w-100 w-full h-fit pb-15 my-shadow rounded-2xl p-10">
            <div class="w-full h-fit flex items-center justify-center flex-nowrap mb-10">
                <h1 class=" poppins font-bold text-2xl text-primary text-center">Log in</h1>
            </div>

            <form id="login" action="{{ route('auth')}}" method="post" class=" flex flex-col flex-nowrap gap-3">
                @csrf
                <input type="email" name="email" placeholder="Email" autocomplete="email" class=" text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
                <input type="password" name="password" placeholder="Password" autocomplete="current-password" class=" password text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">

                @error('login')
                    <p class=" text-red-500 poppins font-semibold text-xs px-2">{{ $message }}</p>
                @enderror
                {{-- Show Password and Forget Password --}}
                <div class="w-full h-fit flex flex-nowrap gap-3 items-center justify-between mt-4 px-1">
                    <div class="w-fit h-fit flex flex-nowrap gap-2.5 items-center">
                        <input type="checkbox" id="show-password" class=" my-shadow w-3 h-3 border-none outline-none">
                        <label for="show-password" class=" text-xs poppins text-gray-500">Show Password</label>
                    </div>

                    <div class="w-fit h-fit text-xs poppins text-primary font-medium">
                        <a href="">Forgot password?</a>
                    </div>
                </div>
                {{-- ------------------------------------- --}}

                <button type="submit" class=" w-full text-center py-1.5 bg-primary text-white font-semibold poppins rounded-md mt-6">Login</button>

                <span class="border-t border-gray-400 mt-3"></span>
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
                        Login with Google
                    </a>
                </div>

            </form>
            
            <div class=" text-sm lexend w-full flex flex-col items-center justify-center gap-1 mt-3 text-center">
                <p class=" text-gray-500">or</p>
                <a href="{{ route('register')}}" class=" text-primary font-medium">Create an account</a>
            </div>
        </div>
    </div>
</body>
</html>