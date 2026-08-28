@extends('layouts.basic-layout')

@section('page-title')
    {{ 'All Users'}}
@endsection

@section('page-contents')
    <nav class="w-full h-fit">
        <div class="w-full px-6 py-3 flex justify-start gap-3 items-center">
            <a href="{{ route('chat.index')}}"  class=" text-sm poppins">
                <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </a>
            <input placeholder="Search for friends" class=" w-full px-7 py-3 text-xs font-semibold poppins text-gray-800 rounded-full my-shadow focus:outline-1 outline-gray-300">
        </div>
    </nav>
    <div class="w-screen h-screen overflow-x-hidden overflow-y-scroll bg-inherit flex flex-col flex-nowrap gap-3">
        <div id="list" class="w-full mx-auto flex flex-row flex-wrap justify-center gap-3 p-6">
            @foreach ($users as $user)
                <livewire:world-user :world_user="$user" />
            @endforeach
        </div>
    </div>
@endsection