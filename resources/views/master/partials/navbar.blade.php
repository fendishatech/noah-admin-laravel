<header class="text-gray-600 bg-gray-200 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="hidden md:flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Header Logo</span>
        </a>
        <nav class="hidden md:flex md:ml-auto flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">First Link</a>
            <a class="mr-5 hover:text-gray-900">Second Link</a>
        </nav>
        <form action="{{ url('/logout') }}" method="post">
            @csrf
            <input class="bg-green-600 px-6 py-2 rounded text-white font-semibold cursor-pointer" type="submit"
                value="Logout" />
        </form>
    </div>
</header>
