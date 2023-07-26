<header class="text-yellow-700 bg-gray-200 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <div class="flex items-center border-b border-green-500 py-2">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text" placeholder="Search">
            <button
                class="flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-green-700 text-sm border-4 text-white py-1 px-2 rounded"
                type="button">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <nav class="hidden md:flex md:ml-auto flex-wrap items-center text-base justify-center">

            @if (Auth::check())
                <a class="mr-5 hover:text-green-900 cursor-pointer" href="/user_profile">Welcome
                    {{ Auth::user()['first_name'] }}
                    {{ Auth::user()['last_name'] }}
                </a>
            @endif
        </nav>
        <form action="{{ url('/logout') }}" method="post">
            @csrf
            <input class="bg-green-600 hover:bg-green-800 px-6 py-2 rounded text-white font-semibold cursor-pointer"
                type="submit" value="Logout" />
        </form>
    </div>
</header>
