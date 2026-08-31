
<div>
    <a href="{{ route('chat.show', $friend->id)}}" class=" messages-list-item">
        <img src="{{ $friend->profile && file_exists(public_path('storage/'. $friend->profile)) ?  asset('storage/'. $friend->profile) : ($friend->profile ? $friend->profile : asset('images/anonymous_user.webp'))}}" alt="Profile" class=" rounded-full w-12 h-12 mx-auto object-cover">
        <div class="flex flex-col py-1.5" referrerpolicy="no-referrer">
            <h3 class="font-semibold text-sm spartan">{{ $friend->username }}</h3>
            <p class="text-gray-500 text-xs font-medium inter">{{ $last_message}}</p>
        </div>
        <span class="text-gray-500 spartan text-xs ml-auto mt-1.5">
            @empty(!$activity_time)
                {{ \Carbon\Carbon::parse($activity_time)->format('g:i A')}}  
            @endempty
        </span>
    </a>
</div>