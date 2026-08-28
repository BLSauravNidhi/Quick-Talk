
<div>
    <div class=" w-full max-w-80 h-fit grid grid-cols-[70px_auto] items-center gap-3 my-shadow rounded-md py-3 px-3 overflow-hidden">
        <img src="{{ $world_user->profile ? $world_user->profile : asset('images/anonymous_user.webp') }}" alt="Profile" class=" rounded-full w-15 h-15 object-cover mx-auto">
        <div class="flex flex-col gap-0 py-2">
            <h3 class="font-semibold text-sm spartan leading-1">{{ $world_user->username }}</h3>
            <p class="text-gray-500 text-xs font-medium inter">{{ $world_user->email}}</p>
            <div class="w-full flex flex-nowrap items-center gap-1">
                <a href="" class=" border box-border text-gray-700 poppins text-xs font-medium mt-1 py-2 px-3 w-fit rounded-md">View profile</a>
                <button wire:click="sendRequest" class="bg-primary poppins text-xs font-medium mt-1 text-white py-2 px-3 w-fit rounded-md">
                    {{ $button_status}}
                </button>
            </div>
        </div>
    </div>
</div>