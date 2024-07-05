<x-app-layout>
    {{-- https://unsplash.com/photos/a-lake-in-the-middle-of-a-mountain-range-R0QbOkBF5lU --}}
    <x-resuable.hero-image
        :image="'/img/mountain-colorado.jpg'"
        :altText="'Lake next to the base of a mountain in Colorado'"
        :header="'Blank'"
    ></x-resuable.hero-image>
    <x-home.hero></x-home.hero>
    <x-home.about></x-home.about>
    <x-home.skills></x-home.skills>
    <x-home.portfolio></x-home.portfolio>
    <x-home.call-to-action></x-home.call-to-action>
</x-app-layout>
