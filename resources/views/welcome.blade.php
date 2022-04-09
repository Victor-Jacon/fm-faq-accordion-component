<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="/css/app.css" rel="stylesheet" />
        <script
            defer
            src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="bg-black h-screen flex flex-col justify-center items-center">
        <div>
            <a class="text-white font-bold text-2xl"
                >Welcome to my Playground - Laravel, Blade, Tailwind, Alpine,
                Livewire
            </a>
        </div>

        <div class="mt-8 flex gap-8">
            <div class="bg-purple-300 rounded-lg p-2">
                <a
                    href="/accordion-component"
                    class="text-white font-bold text-2xl"
                    >Accordion Component</a
                >
            </div>

            <div class="bg-purple-300 rounded-lg p-2">
                <a class="text-white font-bold text-2xl">Accordion Component</a>
            </div>
        </div>
    </body>
</html>
