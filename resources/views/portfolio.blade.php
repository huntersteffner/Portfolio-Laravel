<x-app-layout>
  <x-resuable.hero-image
  {{-- https://unsplash.com/photos/turned-on-laptop-computer-BMnhuwFYr7w --}}
    :image="'/img/computer-with-code.jpg'"
    :altText="'Portfolio'"
    :header="'Some of My Latest Work'"
  ></x-resuable.hero-image>
  <x-portfolio.portfolio-container></x-portfolio.portfolio-container>
</x-app-layout>