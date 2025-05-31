<x-layout>
    <div class="flex justify-center p-2">
        <h3 class="pb-4">Sobre mi:</h3>
        <div class="">
            <p>Hola, me llamo Sergi.</p>
        </div>
    </div>
    {{$data = 2}}
    <div {{$data}}="{ active: 2 }" class="relative w-full max-w-3xl mx-auto">
        <!-- Cards -->
        <div class="overflow-hidden">
            <div class="flex transition-transform duration-500" :style="'transform: translateX(-' + (active * 100) + '%)'">
                <!-- Card 1 -->
                <div class="w-full flex-shrink-0 p-4">
                    <div class="bg-white shadow rounded-2xl p-6 text-center">
                        <h2 class="text-xl font-bold">Card 1</h2>
                        <p class="text-gray-500">Contenido de la primera tarjeta.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="w-full flex-shrink-0 p-4">
                    <div class="bg-white shadow rounded-2xl p-6 text-center">
                        <h2 class="text-xl font-bold">Card 2</h2>
                        <p class="text-gray-500">Contenido de la segunda tarjeta.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="w-full flex-shrink-0 p-4">
                    <div class="bg-white shadow rounded-2xl p-6 text-center">
                        <h2 class="text-xl font-bold">Card 3</h2>
                        <p class="text-gray-500">Contenido de la tercera tarjeta.</p>
                    </div>
                </div>
            </div>
        </div>
    @php
        $jobs = ["test1", "test2", "test3"];
    @endphp

    @foreach($jobs as $job)
        <div class="block px-4 py-6 border border-b-gray-200 rounded-lg mb-4">
            <h1 class="text-xl font-bold text-blue-500">{{ $job }}</h1>
        </div>
    @endforeach

    {{--  Layout from tailwind to interact with pagination --}}
    <div>
        {{ $jobs->links() }}
    </div>

</x-layout>
