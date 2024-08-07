<header
    x-data="{mobileOpen: false}"
>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Hunter Steffner Web Development</span>
            </a>
            <button x-on:click="mobileOpen = !mobileOpen" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                <ul x-show="mobileOpen" class="flex flex-col mt-4 font-medium lg:hidden">
                    @foreach($navigationItems as $navigationItem)
                    <x-layout.navbar-item :navigationItem="$navigationItem"></x-layout.navbar-item>
                    @endforeach
                </ul>
                <ul class="hidden lg:flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    @foreach($navigationItems as $navigationItem)
                    <x-layout.navbar-item :navigationItem="$navigationItem"></x-layout.navbar-item>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>