<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body>
    <nav class="w-screen h-screen pt-9 pb-6 bg-[#e9e9e9]">
        <div class="w-full px-6 py-3 flex justify-start gap-3 items-center">
            <a href="{{ route('chat.index')}}"  class=" text-sm poppins">
                <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </a>
            <h2 class="text-lg font-semibold poppins">User Settings</h2>
        </div>
        <div class="links grid p-6 font-medium text-gray-700">
            <a href="{{ route('edit-profile')}}" class=" text-sm poppins px-3 py-2 hover:bg-white">Manage Account</a>
            <a href="" class=" text-sm poppins px-3 py-2 hover:bg-white">Privacy settings</a>
            <a href="" class=" text-sm poppins px-3 py-2 hover:bg-white">Appearence</a>
            <a href="{{ route('logout')}}" class=" text-sm poppins px-3 py-2 hover:bg-white">Logout</a>
        </div>

    </nav>
    <livewire:online-users />
</body>
</html>