<x-app-layout>
  <x-resuable.hero-image
  {{-- https://unsplash.com/photos/turned-on-flat-screen-monitor-0qvBNep1Y04 --}}
    :image="'/img/programming.jpg'"
    :altText="'Computer monitor with code'"
    :header="'Some of My Latest Work'"
  ></x-resuable.hero-image>
  <x-portfolio.portfolio-container></x-portfolio.portfolio-container>
</x-app-layout>