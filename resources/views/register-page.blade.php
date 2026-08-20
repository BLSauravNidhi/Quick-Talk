<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Quick Talk - Register</title>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <script src="{{ asset('js/show-password.js')}}" defer></script>
    @livewireStyles
</head>
<body>
    <div class="w-screen h-screen bg-[#e9e9e9] flex justify-center items-center px-7 py-8">
        <livewire:register-component />
    </div>
    @livewireScripts
</body>
</html>