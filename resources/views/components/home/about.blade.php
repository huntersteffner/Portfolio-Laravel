<section>
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="sm:text-lg">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold">A Little About Me</h2>
            <p class="max-w-2xl mb-6 lg:mb-8 md:text-lg lg:text-xl">I am a Full-Stack Web Developer based out of Charlotte North Carolina. I work as an E-Commerce Web Developer for Electrolux, and also do freelancing work on the side.</p>
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
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            {{-- https://unsplash.com/photos/a-view-of-a-city-with-skyscrapers-in-the-background-krhqUywbj-U --}}
            <img class="w-full rounded-lg" src="{{'/img/charlotte-buildings.jpg'}}" alt="Sunrise in Uptown Charlotte">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{'/img/Wedding-photo.jpg'}}" alt="Hunter and his wife Grace">
        </div>
    </div>
</section>