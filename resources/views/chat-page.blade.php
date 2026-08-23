@extends('layouts.basic-layout')

@section('page-title')
    {{ 'Chat' }}
@endsection

@push('page-scripts')
    <script>
    document.addEventListener("livewire:init", () => {
        const chatContainer = document.getElementById("chats");

        function scrollToBottom() {
            if (chatContainer) {
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
        }

        // 1. Scroll on initial page load
        scrollToBottom();

        // 2. Scroll automatically after every Livewire update (message sent/received)
        Livewire.hook('request', ({ respond }) => {
            respond(() => {
                // Timeout ensures the DOM has fully rendered the new message first
                setTimeout(scrollToBottom, 50);
            });
        });
    });
</script>


@endpush

@section('page-contents')
    <livewire:message-component :reciever_id="$reciever_id" />
@endsection