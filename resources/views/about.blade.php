<x-app-layout>
    <x-resuable.hero-image
    {{-- https://unsplash.com/photos/people-walking-near-brown-concrete-building-during-daytime-fAM7KQ2Eunk --}}
      :image="'/img/cusco.jpg'"
      :altText="'Portfolio'"
      :header="'Some of My Latest Work'"
    ></x-resuable.hero-image>
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="space-y-2 sm:text-lg">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold">A Little About Me</h2>
            <p>I was born and raised in Atlanta, Georgia and currently live in Charlotte, North Carolina with my beautiful Peruvian wife.</p>
            <p>
              I completed my undergradate degree at Georgia Southern University in 2017 with a Major in Logistics and Minor in Spanish. (Sí, puedo
              hablar y trabajar en español, si es necesario).
            </p>
            <p>
              After college I began to work at NCR Corporation as a
              Customer Service Representative for Digital Banking Software. My company's proprietary software fascinated me, so I began to study how computers functioned behind the scenes. While I looked into several different computer topics, I really found my niche when I began learning the basics of Web Development with HTML, CSS, and JavaScript.
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
            <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
              Contact Me
              <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
            <a href="/portfolio" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
              See My Portfolio
              <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
        </div>
        <div class="mt-8">
            {{-- https://unsplash.com/photos/a-view-of-a-city-with-skyscrapers-in-the-background-krhqUywbj-U --}}
            {{-- <img class="w-full rounded-lg" src="{{'/img/charlotte-buildings.jpg'}}" alt="Sunrise in Uptown Charlotte"> --}}
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{'/img/Joshua-Tree.jpg'}}" alt="Hunter and his wife Grace in Joshua Tree National Park">
        </div>
    </div>
</x-app-layout>