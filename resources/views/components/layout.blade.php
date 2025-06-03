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
<body class="bg-gray-800 text-white mb-10">
<div>
    <nav class="flex justify-center  py-4 border-b border-white/10 bg-gray-900">
        <div class="">
            <x-opciones-head-bar href="/">Inicio</x-opciones-head-bar>
            <x-opciones-head-bar href="https://github.com/ferrer67/" >Github</x-opciones-head-bar>
            <x-opciones-head-bar href="https://www.linkedin.com/in/sergi-ferrer-sala-9a21a2277/">LinkedIn</x-opciones-head-bar>
            <x-opciones-head-bar href="/contacto">Contacto</x-opciones-head-bar>
        </div>
    </nav>

    <main class="mt-10 mx-auto">
        {{$slot}}
    </main>
</div>
</body>
</html>
