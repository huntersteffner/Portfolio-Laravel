<section>
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto mb-4 place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Hunter Steffner Web Development</h1>
            <p class="max-w-2xl mb-6 lg:mb-8 md:text-lg lg:text-xl">Ready for a Web Development solution?</p>
            <x-resuable.button
            :btnText="'Get Started'"
            :btnLink="'/contact'"
            :isPrimary="true"
            :hasArrow="true"
            :newTab="false"
          ></x-resuable.button>
        </div>
        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{'/img/Hunter-on-subway.jpg'}}" alt="Hunter Steffner standing in New York Subway Station">
        </div>                
    </div>
</section>