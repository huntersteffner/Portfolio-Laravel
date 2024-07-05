<section>
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="sm:text-lg">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold">A Little About Me</h2>
            <p class="max-w-2xl mb-6 lg:mb-8 md:text-lg lg:text-xl">I am a Full-Stack Web Developer based out of Charlotte North Carolina. My professional work consists of a full-time position at Electrolux and Freelance Web Projects.</p>
            {{-- <a href="/about" class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Read More About Me</a> --}}
            <x-resuable.button
                :btnText="'More About Me'"
                :btnLink="'/about'"
                :isPrimary="true"
                :hasArrow="false"
                :newTab="false"
            ></x-resuable.button>
            <x-resuable.button
                :btnText="'See My Portfolio'"
                :btnLink="'/portfolio'"
                :isPrimary="false"
                :hasArrow="false"
                :newTab="false"
            ></x-resuable.button>
            {{-- <a href="/portfolio" class="text-black bg-secondary-700 justify-center hover:bg-secondary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-secondary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-secondary-600 dark:hover:bg-secondary-700 dark:focus:ring-secondary-800">See My Portfolio</a> --}}
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            {{-- https://unsplash.com/photos/a-view-of-a-city-with-skyscrapers-in-the-background-krhqUywbj-U --}}
            <img class="w-full rounded-lg" src="{{'/img/charlotte-buildings.jpg'}}" alt="Sunrise in Uptown Charlotte">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{'/img/Wedding-photo.jpg'}}" alt="Hunter and his wife Grace">
        </div>
    </div>
</section>