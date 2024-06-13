<x-app-layout>
    <x-resuable.hero-image
    {{-- https://unsplash.com/photos/turned-on-laptop-computer-BMnhuwFYr7w --}}
      :image="'/img/computer-with-code.jpg'"
      :altText="'Portfolio'"
      :header="'Some of My Latest Work'"
    ></x-resuable.hero-image>
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">A Little About Me</h2>
            <p>I was born and raised in Atlanta, Georgia and currently live in Charlotte, North Carolina with my beautiful Peruvian wife.</p>
            <p>
              I completed my undergradate degree at Georgia Southern University in 2017 with a Major in Logistics and Minor in Spanish. (Sí, puedo
              hablar y trabajar en español, si es necesario).
            </p>
            <p>
              After college I began to work at NCR Corporation as a
              Customer Service Representative for Digital Banking Software. My company's proprietary software fascinated me, so I began to teach myself the
              basics of HTML, CSS, and JavaScript.
            </p>
            <p>
              After 4.5 years at NCR, I decided to make a career
              change and enrolled in a Full-Stack Web Development Bootcamp at Georgia Tech. After completing this course, I worked for a few months as a part-time Teaching Assistant, at a Coding Bootcamp very similar to the one I had studied under. In March 2023, I accepted an offer for a full-time position at Electrolux as an Angular Developer.
            </p>
            <p>Any Web Development request that you have, I can fulfill. I understand both Frontend and Backend Web Development. Frameworks of projects I have worked on include Angular, React, Springboot, Laravel, and more. Feel free to check out my projects tab to see what I have been working
              on.</p>
            <p>
              If you'd like for me to make your project a success, don't hesitate to reach out to me below.
            </p>
        </div>
        <div class="mt-8">
            {{-- https://unsplash.com/photos/a-view-of-a-city-with-skyscrapers-in-the-background-krhqUywbj-U --}}
            {{-- <img class="w-full rounded-lg" src="{{'/img/charlotte-buildings.jpg'}}" alt="Sunrise in Uptown Charlotte"> --}}
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{'/img/Joshua-Tree.jpg'}}" alt="Hunter and his wife Grace">
        </div>
    </div>
</x-app-layout>