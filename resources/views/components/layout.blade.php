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
        <div class="bg-blue-500">
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
        </div>

        <div class="">
            <x-opciones-head-bar >Jobs</x-opciones-head-bar>
            <x-opciones-head-bar >Careers</x-opciones-head-bar>
            <x-opciones-head-bar >Salaries</x-opciones-head-bar>
            <x-opciones-head-bar >Companies</x-opciones-head-bar>
        </div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto border-2 rounded-md">
        {{$slot}}
    </main>
</div>
</body>
</html>
