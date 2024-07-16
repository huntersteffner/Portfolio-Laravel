<section class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
    <div class="space-y-2 sm:text-lg">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold">A Little About Me</h2>
        @foreach ($paragraphs as $paragraph)
        <p class="text-xl pb-2">{{$paragraph}}</p>
        @endforeach
    <x-resuable.button
        :btnText="'Contact Me'"
        :btnLink="'/contact'"
        :isPrimary="true"
        :hasArrow="true"
        :newTab="false"
    ></x-resuable.button>
    <x-resuable.button
        :btnText="'See My Portfolio'"
        :btnLink="'/portfolio'"
        :isPrimary="false"
        :hasArrow="true"
        :newTab="false"
    ></x-resuable.button>
    </div>
    <div class="mt-8">
        {{-- https://unsplash.com/photos/a-view-of-a-city-with-skyscrapers-in-the-background-krhqUywbj-U --}}
        {{-- <img class="w-full rounded-lg" src="{{'/img/charlotte-buildings.jpg'}}" alt="Sunrise in Uptown Charlotte"> --}}
        <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{'/img/Joshua-Tree.jpg'}}" alt="Hunter and his wife Grace in Joshua Tree National Park">
    </div>
</section>