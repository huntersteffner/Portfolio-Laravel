<section class="antialiased">
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl">
        Portfolio
      </h2>
      <p class="mt-4 text-base font-normal text-lg">
        Here are some of the projects I've been working on.
      </p>
    </div>
    <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($items as $item)
      <x-portfolio.portfolio-card
          :item="$item"
          ></x-portfolio.portfolio-card>
      @endforeach
    </div>
  </div>
</section>