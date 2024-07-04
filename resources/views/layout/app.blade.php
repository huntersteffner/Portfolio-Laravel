<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hunter Steffner Web Development</title>

        <script src="//unpkg.com/alpinejs" defer></script>
        @vite('resources/css/app.css')
        <!-- Styles -->
        
    </head>
    <body>
        <x-layout.navbar></x-layout.navbar>
        <main class="bg-neutral-200 text-gray-900 dark:bg-stone-800 dark:text-white">
            {{$slot}}
        </main>
        <x-layout.footer></x-layout.footer>
    </body>
</html>
