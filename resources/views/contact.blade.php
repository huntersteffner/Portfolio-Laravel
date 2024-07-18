<x-app-layout>
    {{-- image https://unsplash.com/photos/blue-and-white-logo-guessing-game-LPZy4da9aRo --}}
    <x-resuable.hero-image
        :image="'/img/email-notification.jpg'"
        :altText="'Email Background'"
        :header="'Send Me a Message'"
    ></x-resuable.hero-image>
    <section>
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center">Send Me a Message</h2>
            <p class="mb-8 lg:mb-16 text-center text-lg">Need help maintaining a website? Want to set up a website for the first time? Does your online presence need to grow and scale? Please reach out so we can discuss how I can assist.</p>
            <form
                action="/contact/submit"
                method="POST"
                class="space-y-8"
                x-data="
                {
                    formData: {
                        name: '',
                        email: '',
                        website: '',
                        message: '',
                        source: ''
                    },
                    errors: {},
                    successMessage: '',
                    displayError: false,

                    submitForm(event) {
                        this.successMessage = ''
                        this.displayError = ''
                        this.errors = {}

                        console.log(this.formData)

                        fetch(`/contact/submit`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                            },
                            body: JSON.stringify(this.formData)
                        })
                        .then(response => {
                            if (response.status === 200) {
                                return response.json()
                            }
                            throw response
                        })
                        .then(result => {
                            this.formData = {
                                name: '',
                                email: '',
                                website: '',
                                message: '',
                                source: ''
                            }
                            this.successMessage = 'Thank you for your request.'
                        })
                        .catch(async (response) => {
                            const res = await response.json()
                            if (response.status === 422) {
                                this.errors = res.errors
                                this.displayError = res.message
                            }
                            console.log(res)
                        })
                    }
                }
                "
                x-on:submit.prevent="submitForm"
                >
                <template x-if="successMessage">
                    <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4"></div>
                </template>
                <template x-if="displayError">
                    <div x-text="displayError" class="py-4 px-6 bg-red-600 text-gray-100 mb-4"></div>
                </template>
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium">Your Name * Required</label>
                    <input type="text" id="name" x-model="formData.name" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Name">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Your Email * Required</label>
                    <input type="email" id="email" x-model="formData.email" class="shadow-sm bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@email.com">
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium">Existing Website (if applicable)</label>
                    <input type="text" id="website" x-model="formData.website" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Existing Website (if applicable)">
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium">Your message * Required</label>
                    <textarea id="message" rows="6" x-model="formData.message" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                </div>
                <div>
                    <label for="source" class="block mb-2 text-sm font-medium">How did you hear about my services?</label>
                    <input type="text" id="source" x-model="formData.source" class="block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-100 dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="I heard from...">
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
            </form>
        </div>
      </section>
</x-app-layout>