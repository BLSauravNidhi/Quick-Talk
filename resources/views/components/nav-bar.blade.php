<nav class="w-full h-fit pb-5 pt-8 flex flex-col flex-nowrap gap-2 px-6 shadow-2xs sticky z-10 bg-[#e9e9e9] top-0 left-0">
    <div class="w-full flex items-center justify-between">
        <div class="w-fit mb-1">
            <p class="text-xs text-gray-500 inter font-medium italic whitespace-nowrap">Welcome to</p>
            <h2 class="font-bold spartan text-2xl whitespace-nowrap">Quick Talk</h2>
        </div>

        <div class="w-fit flex grow-0 flex-nowrap items-center gap-1.5 justify-center">
            <a href="{{ route('settings-page')}}" class=" inter p-1.5 font-medium my-shadow rounded-full flex items-center text-md my-hover transition-all duration-200">
                <svg  viewBox="0 -960 960 960" class=" w-6 h-6">
                    <path d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z"/>
                </svg>
            </a>
        </div>
    </div>

    <form action="" method="get">
        <input type="text" name="true" placeholder="Find Your Friends" class=" w-full min-w-60 py-3 px-5  my-shadow rounded-full text-sm placeholder:italic focus:outline-0" />
    </form>

    <div class="w-fit mx-auto mt-1 flex items-center rounded-full bg-gray-200 my-shadow">
        <a href="" class=" tab-bar inter chat-tab-active">All Chats</a>
        <a href="" class=" tab-bar inter">Groups</a>
        <a href="" class=" tab-bar inter">Contacts</a>
    </div>
</nav>