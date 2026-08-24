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
                <input type="text" name="username" placeholder="Username" autocomplete="username" class=" text-sm px-6 py-3 my-shadow inter w-full focus:outline-none">
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

            </form>
            
            <div class=" text-sm lexend w-full flex flex-col items-center justify-center gap-1 mt-3 text-center">
                <p class=" text-gray-500">or</p>
                <a href="{{ route('register')}}" class=" text-primary font-medium">Create an account</a>
            </div>
        </div>
    </div>
</body>
</html>