@extends('layouts.app-layout')

@section('page-title')
    {{ 'Quick Talk'}}
@endsection

@section('page-contents')
    <div class=" w-full h-screen overflow-y-scroll overflow-x-hidden relative">

        @foreach ($friends as $friend)
            <livewire:chat-list-component :friend="$friend" />
        @endforeach


        <footer class=" w-fit fixed bottom-6 right-6 rounded-full bg-primary p-2">
            <a href="" class=" w-full absoulute bottom-0 right-0 text-right ">
                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" class="  stroke-white pointer-events-none">
                    <path d="M16.42 7.95C18.86 10.39 18.86 14.35 16.42 16.79C13.98 19.23 10.02 19.23 7.58 16.79C5.14 14.35 5.14 10.39 7.58 7.95C10.02 5.51 13.98 5.51 16.42 7.95Z" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    <path d="M8.24999 21.64C6.24999 20.84 4.49999 19.39 3.33999 17.38C2.19999 15.41 1.81999 13.22 2.08999 11.13" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    <path d="M5.84998 4.47998C7.54998 3.14998 9.67997 2.35999 12 2.35999C14.27 2.35999 16.36 3.12997 18.04 4.40997" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                    <path d="M15.75 21.64C17.75 20.84 19.5 19.39 20.66 17.38C21.8 15.41 22.18 13.22 21.91 11.13" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
                </svg>
            </a>
        </footer>
    </div>
@endsection