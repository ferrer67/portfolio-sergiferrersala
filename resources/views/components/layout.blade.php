<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - sferrer</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gradient-to-tl from-gray-800 to-gray-600 text-white mb-10">
<div>
    <nav class="bg-gray-900 py-4 px-4 flex justify-center items-center relative">
        <!-- Menú escritorio -->
            <div class="hidden md:flex text-white">
                <x-opciones-head-bar href="/">Inicio</x-opciones-head-bar>
                <x-opciones-head-bar href="https://github.com/ferrer67/">Github</x-opciones-head-bar>
                <x-opciones-head-bar href="https://www.linkedin.com/in/sergi-ferrer-sala-9a21a2277/">LinkedIn</x-opciones-head-bar>
                <x-opciones-head-bar href="/contacto">Contacto</x-opciones-head-bar>
            </div>
        <!-- Botón hamburguesa (solo en móvil) -->
        <button id="menu-toggle" class="text-white md:hidden ml-auto z-30 active:scale-90">
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Panel lateral móvil (oculto por defecto) -->
        <div id="mobile-menu"
             class="fixed top-1 right-0 h-auto w-64 bg-gray-700 shadow-lg transform translate-x-full opacity-0 transition-all duration-300 ease-in-out md:hidden p-2 z-20 flex flex-col  space-y-4 rounded-md">
            <x-opciones-head-bar href="/">Inicio</x-opciones-head-bar>
            <x-opciones-head-bar href="https://github.com/ferrer67/">Github</x-opciones-head-bar>
            <x-opciones-head-bar href="https://www.linkedin.com/in/sergi-ferrer-sala-9a21a2277/">LinkedIn</x-opciones-head-bar>
            <x-opciones-head-bar href="/contacto">Contacto</x-opciones-head-bar>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('menu-toggle');
            const menu = document.getElementById('mobile-menu');

            toggleButton.addEventListener('click', () => {
                const isOpen = menu.classList.contains('translate-x-0');
                menu.classList.toggle('translate-x-full', isOpen);
                menu.classList.toggle('translate-x-0', !isOpen);
                menu.classList.toggle('opacity-0', isOpen);
                menu.classList.toggle('opacity-100', !isOpen);
            });
        });
    </script>

{{-- Border navbar --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.navItem');
            if (items.length) {
                items[0].classList.add('border-l-1');
            }
        });
    </script>


    <main class="mx-auto mt-10 min-h-screen">
        {{$slot}}
    </main>
</div>
</body>
</html>
