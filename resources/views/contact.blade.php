<x-app-layout>
    {{-- image https://unsplash.com/photos/blue-and-white-logo-guessing-game-LPZy4da9aRo --}}
    <x-resuable.hero-image
        :image="'/img/email-notification.jpg'"
        :altText="'Patrick'"
        :header="'Send Me a Message'"
    ></x-resuable.hero-image>
    <section>
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">Send Me a Message</h2>
            <p class="mb-8 lg:mb-16 text-center sm:text-xl">Need help maintaining a website? Want to set up a website for the first time? Does your online presence need to grow and scale? Please reach out so we can discuss how I can assist.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Your email * Required</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@email.com" required>
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium">Existing Website (if applicable)</label>
                    <input type="text" id="website" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Existing Website (if applicable)">
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium">Subject * Required</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let me know how I can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium">Your message * Required</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium">How did you hear about my services?</label>
                    <input type="text" id="website" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="I heard from...">
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
            </form>
        </div>
      </section>
</x-app-layout>