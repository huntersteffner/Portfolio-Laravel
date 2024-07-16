<x-app-layout>
    <x-resuable.hero-image
    {{-- https://unsplash.com/photos/people-walking-near-brown-concrete-building-during-daytime-fAM7KQ2Eunk --}}
      :image="'/img/cusco.jpg'"
      :altText="'Portfolio'"
      :header="'Some of My Latest Work'"
    ></x-resuable.hero-image>
    <x-about.about-container></x-about.about-container>
</x-app-layout>