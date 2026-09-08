
<div>
    <div class=" relative mx-auto w-screen h-screen bg-primary overflow-x-hidden overflow-y-scroll text-white fill-white" id="chats">
        <header class=" fixed bg-primary top-0 left-0 w-full h-13 flex gap-3 px-3 items-center pt-2">
                <a href="{{ route('chat.index')}}"  class=" text-sm poppins">
                    <svg height="20px" viewBox="0 -960 960 960" width="20px">
                        <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                    </svg>
                </a>
                <a href="" class=" flex flex-nowrap items-center gap-2">
                    <img src="{{ $recieverInfo->profile && file_exists(public_path('storage/'. $recieverInfo->profile)) ?  asset('storage/'. $recieverInfo->profile) : ($recieverInfo->profile ? $recieverInfo->profile : asset('images/anonymous_user.webp'))}}" alt="dp" class=" bg-white rounded-full w-10 h-10 mx-auto object-cover" referrerpolicy="no-referrer">
                    <div class="poppins">
                        <h2 class="text-sm font-medium">{{ $recieverInfo->username}}</h2>
                        <p class=" text-xs">{{ $friendStatus }}</p>
                    </div>
                </a>
        </header>
        
        <div class="w-full h-13"></div>

        <div id="chats-section" class="w-full poppins p-4 text-sm flex flex-col flex-nowrap gap-3">
            @php $lastDate = null; @endphp
            {{-- Chats --}}
            @foreach ($chats as $message)
                @php
                    // 1. Determine the appropriate label for the current message
                    if ($message['created_at']->isToday()) {
                        $currentLabel = 'Today';
                    } elseif ($message['created_at']->isYesterday()) {
                        $currentLabel = 'Yesterday';
                    } else {
                        $currentLabel = $message['created_at']->format('M d, Y');
                    }
                @endphp
                
                {{-- 2. Printint the day of the chats --}}
                @if ($currentLabel !== $lastDate)
                    <span class="mx-auto text-center text-xs my-2 block">
                        {{ $currentLabel }}
                    </span>
                    @php $lastDate = $currentLabel; @endphp
                @endif
                
                {{-- Messages --}}
                <div class=" {{ $message['sender_id'] === auth()->user()->id ? 'ml-auto' : 'mr-auto'}} flex flex-nowrap items-end justify-between gap-1.5 max-w-70 bg-primary-light rounded-tr-3xl rounded-b-3xl py-2 px-3">
                    <p>{{ $message['message']}}</p> 
                    <span class=" whitespace-nowrap text-[9px]">{{ $message['created_at']->format('g:i a')}}</span>
                </div>
            @endforeach
        </div>

        <div class=" min-w-full min-h-13"></div>

        <form wire:submit.prevent="send" class=" bg-inherit fixed bottom-0 left-0 w-full h-15 grid grid-cols-[auto_40px] items-center gap-4 px-4 py-3">
            <div class="w-full relative">
                <input wire:model="message" type="text" name="" placeholder="Message" spellcheck="false" class=" w-full bg-white text-primary-dark px-5 py-2 rounded-full poppins text-sm font-medium focus:outline-none">
                <svg width="21px" height="21px" viewBox="0 0 24 24" fill="none" class=" absolute top-2 right-3">
                    <path d="M8.9126 15.9336C10.1709 16.249 11.5985 16.2492 13.0351 15.8642C14.4717 15.4793 15.7079 14.7653 16.64 13.863" class=" stroke-gray-400" stroke-width="1.5" stroke-linecap="round"/>
                    <ellipse cx="14.5094" cy="9.77405" rx="1" ry="1.5" transform="rotate(-15 14.5094 9.77405)" class=" fill-gray-400 stroke-none"/>
                    <ellipse cx="8.71402" cy="11.3278" rx="1" ry="1.5" transform="rotate(-15 8.71402 11.3278)" class=" fill-gray-400 stroke-none"/>
                    <path d="M13 16.0004L13.478 16.9742C13.8393 17.7104 14.7249 18.0198 15.4661 17.6689C16.2223 17.311 16.5394 16.4035 16.1708 15.6524L15.7115 14.7168" class=" stroke-gray-400" stroke-width="1.5"/>
                    <path d="M4.92847 4.92663C6.12901 3.72408 7.65248 2.81172 9.41185 2.34029C14.7465 0.910876 20.2299 4.0767 21.6593 9.41136C23.0887 14.746 19.9229 20.2294 14.5882 21.6588C9.25357 23.0882 3.7702 19.9224 2.34078 14.5877C1.86936 12.8284 1.89775 11.0528 2.33892 9.41186" class=" stroke-gray-400" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <button type="submit" class=" bg-white rounded-full p-1">
                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none">
                    <path d="M6.99811 10.2467L7.43298 11.0077C7.70983 11.4922 7.84825 11.7344 7.84825 12C7.84825 12.2656 7.70983 12.5078 7.43299 12.9923L7.43298 12.9923L6.99811 13.7533C5.75981 15.9203 5.14066 17.0039 5.62348 17.5412C6.1063 18.0785 7.24961 17.5783 9.53623 16.5779L15.8119 13.8323C17.6074 13.0468 18.5051 12.654 18.5051 12C18.5051 11.346 17.6074 10.9532 15.8119 10.1677L9.53624 7.4221C7.24962 6.42171 6.1063 5.92151 5.62348 6.45883C5.14066 6.99615 5.75981 8.07966 6.99811 10.2467Z" class=" fill-primary stroke-0"/>
                </svg>
            </button>
        </form>
    </div>
</div>