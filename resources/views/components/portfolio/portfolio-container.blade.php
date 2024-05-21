<main class="antialiased">
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
        Portfolio
      </h2>
      <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
        Here are some of the projects I've been working on.
      </p>
    </div>
    <div>
      <ul class="flex justify-center">
        <li>
          <button class="text-white inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">All</button>
        </li>
        @foreach($tabs as $tab)
        <li>
          <button class="text-white inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">{{$tab}}</button>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($items as $item)
      <x-portfolio.portfolio-card
          :item="$item"
          ></x-portfolio.portfolio-card>
      @endforeach
    </div>
  </div>
</main>