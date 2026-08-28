@extends('layouts.basic-layout')

@section('page-title')
    {{ 'All Users'}}
@endsection

@section('page-contents')
    <div class="relative w-screen h-screen">
        <nav class="w-full h-fit sticky z-10 top-0 left-0">
            <div class="w-full px-6 py-3 flex justify-start gap-3 items-center">
                <a href="{{ route('chat.index')}}"  class=" text-sm poppins">
                    <svg height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                        <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                    </svg>
                </a>
                <h3 class="lexend font-medium text-lg">Notifications</h3>
            </div>
        </nav>
        <div class=" w-full mx-auto flex flex-row flex-wrap justify-center gap-1">
            @foreach ($friend_requests as $request)
                <livewire:friend-requests :request="$request" />
            @endforeach
        </div>
    </div>
@endsection