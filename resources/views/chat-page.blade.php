@extends('layouts.basic-layout')

@section('page-title')
    {{ 'Chat' }}
@endsection

@section('page-contents')
    <livewire:message-component :reciever_id="$reciever_id" />
@endsection