
<div class="w-full">
    <a href="" class=" w-full h-fit flex items-center gap-3 py-3 px-3 overflow-hidden bg-gray-300">
        <img src="{{ $request->senderInfo->profile ? $request->senderInfo->profile : asset('images/anonymous_user.webp') }}" alt="Profile" class=" rounded-full w-15 h-15 object-cover" referrerpolicy="no-referrer">
        <div class="w-full">
            <p class=" text-sm spartan"><span class="font-semibold">{{ $request->senderInfo->username }}</span> sent you friend request.</p>
        </div>
        <div class=" ml-auto w-fit flex flex-row flex-nowrap gap-4 items-center">
            <button wire:click="declineRequest" class=" poppins text-xs font-medium mt-1 w-fit rounded-md fill-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
            <button wire:click="acceptRequest" class="bg-primary poppins text-xs font-medium mt-1 text-white py-2 px-3 w-fit rounded-md">
                @if ($request_accepted)
                    {{ 'Accepted'}}
                @else
                    {{ 'Accept' }}
                @endif
            </button>
        </div>
    </a>
</div>