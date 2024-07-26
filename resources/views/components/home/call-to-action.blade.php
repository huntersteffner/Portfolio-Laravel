<section>
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        {{-- https://unsplash.com/photos/black-and-green-pencils-PdfRE-xB--s --}}
        <img class="w-full" src="{{'/img/notebook.jpg'}}" alt="Notebook with pencils and crumpled paper">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold">Ready to get started</h2>
            <p class="mb-6 md:text-lg">I am always looking for freelancing opportunities. If you are looking for a web based solution, look no further. Let's connect!</p>
            <x-resuable.button
                :btnText="'Connect'"
                :btnLink="'/contact'"
                :isPrimary="true"
                :hasArrow="true"
                :newTab="false"
            ></x-resuable.button>
        </div>
    </div>
</section>