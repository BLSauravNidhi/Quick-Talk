@extends('layouts.basic-layout')

@section('page-title')
    {{'Profile'}}
@endsection

@section('page-contents')
    <div class="w-screen h-screen">
        <nav class="w-full h-13 bg-[#e9e9e9]">
            <div class="w-full px-6 py-3 flex justify-start gap-3 items-center">
                <a href="{{ route('chat.index')}}"  class=" text-sm poppins">
                    <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                    </svg>
                </a>
                <h2 class="text-lg font-semibold poppins">Profile</h2>
            </div>
        </nav>
        <div class="w-fit border border-gray-300 mx-auto px-6">
        
            <livewire:profile-component />
        
            <div class=" w-full max-w-100 mx-auto py-6 h-full flex flex-col">
                <h3 class="poppins text-md font-bold mb-6">Other settings</h3>
                <a href="" class=" poppins text-sm px-6 py-2 hover:bg-gray-300">Change Password</a>
                <a href="" class=" poppins text-sm px-6 py-2 hover:bg-gray-300">Privacy Policy</a>
                <a href="" class=" w-fit ml-auto bg-red-700 text-sm text-white px-3 py-2 my-5 rounded-md poppins font-medium">Delete Account</a>
            </div>
        </div>
    </div>
@endsection