<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>

        .image{
            width: 50px;

        }
    </style>

    <title>My Portfolio</title>
</head>

<body class="min-h-screen bg-white" x-data="{ open: false }">
    <button class="md:hidden p-4" @click="open = !open">
        ☰ Menu
    </button>
    <div class="flex">
        <aside class="w-64 bg-white shadow-md hidden md:block h-screen" :class="{ 'hidden': !open, 'block': open }"
            class="fixed z-20 md:relatve md:block">
            <x-side-bar></x-side-bar>

        </aside>
        <main class="flex-1 p-6 ml-0 transition-all duration-300">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
