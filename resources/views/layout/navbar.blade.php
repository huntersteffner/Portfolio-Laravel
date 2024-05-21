<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
                <img src="https://a1cf74336522e87f135f-2f21ace9a6cf0052456644b80fa06d4f.ssl.cf2.rackcdn.com/images/characters/large/800/Patrick-Star.SpongeBob-SquarePants.webp" class="mr-3 h-6 sm:h-9" alt="Placeholder of Patrick Star" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Hunter Steffner</span>
            </a>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    @foreach($navigationItems as $navigationItem)
                    <x-layout.navbar-item :navigationItem="$navigationItem"></x-layout.navbar-item>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>