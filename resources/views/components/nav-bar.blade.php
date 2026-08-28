<nav class="w-full h-fit pb-5 pt-8 flex flex-col flex-nowrap gap-2 px-6 shadow-2xs sticky z-10 bg-[#e9e9e9] top-0 left-0">
    <div class="w-full flex items-center justify-between">
        <div class="w-fit mb-1">
            <p class="text-xs text-gray-500 inter font-medium italic whitespace-nowrap">Welcome to</p>
            <h2 class="font-bold spartan text-2xl whitespace-nowrap">Quick Talk</h2>
        </div>

        <div class="w-fit flex grow-0 flex-nowrap items-center gap-1.5 justify-center">
            <a href="{{ route('notification-page')}}" class=" p-1.5 my-shadow rounded-full flex items-center bg-primary fill-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class=" w-5 h-5 stroke-0"><path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z"/></svg>
            </a>
            <a href="{{ route('settings-page')}}" class=" p-1.5 my-shadow rounded-full flex items-center text-md my-hover transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class=" w-6 h-6">
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