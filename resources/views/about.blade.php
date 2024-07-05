<x-app-layout>
    <x-resuable.hero-image
    {{-- https://unsplash.com/photos/people-walking-near-brown-concrete-building-during-daytime-fAM7KQ2Eunk --}}
      :image="'/img/cusco.jpg'"
      :altText="'Portfolio'"
      :header="'Some of My Latest Work'"
    ></x-resuable.hero-image>
    <section class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="space-y-2 sm:text-lg">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold">A Little About Me</h2>
          <p>I was born and raised in Atlanta, Georgia and currently live in Charlotte, North Carolina with my beautiful Peruvian wife.</p>
          <p>
            I completed my undergradate degree at Georgia Southern University in 2017 with a Major in Logistics and Minor in Spanish. (Sí, puedo
            hablar y trabajar en español, si es necesario).
          </p>
          <p>
            After college I began to work at NCR Corporation as a
            Customer Service Representative for Digital Banking Software. My company's proprietary software fascinated me, and I wanted to better understand what I was working with, so I started studying how computers functioned behind the scenes. While I looked into several different computer topics, I really found my niche when I began understanding the basics of Web Development with HTML, CSS, and JavaScript.
          </p>
          <p>
            After 4.5 years at NCR, I decided to make a career
            change and enrolled in a Full-Stack Coding Bootcamp at Georgia Tech. After completing this course, I worked for a few months as a part-time Teaching Assistant, at a Coding Bootcamp very similar to the one I had studied under. In March 2023, I accepted an offer for a full-time position at Electrolux as an E-Commerce Web Developer.
          </p>
          <p>I'm here to fulfill any Web Development requests you have. I understand how to work with both the Frontend and Backend. Frameworks of projects I have worked on include Angular, React, Springboot, Laravel, and more. Feel free to check out my projects tab to see what I have been working
            on.</p>
          <p>
            If you'd like for me to make your project a success, don't hesitate to reach out to me below.
          </p>
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
</x-app-layout>