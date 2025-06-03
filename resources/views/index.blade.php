<x-layout>
    <div class="p-2 mx-auto max-w-5xl bg-cyan-950 rounded-2xl mb-8">
        <h2 class="pb-4 text-2xl">Sobre mi:</h2>
        <div class="">
            <p>Hola, me llamo Sergi termine los estudios hace 1 año y llevo trabajando 2 años como tecnico IT, en mis trabajos he hecho un poco de todo pero lo mas frequente es: administracion de servidores windows, active directory, bases de datos, redes, firewalls y VPN's. Despues de terminar mis estudios busco un trabajo donde poder aplicar mis conocimientos sobre programacion y desarrollar mis habilidades. Actualmente mi tiempo libre lo dedico a realizar pequeños proyectos personales los cuales tengo públicos en mi GitHub y se pueden observar a continuacion.
            </p>
        </div>
    </div>

    <div class="">
        <div class="mx-auto max-w-fit">
            <h1 class="text-2xl font-bold mb-4">Mis Repositorios</h1>
        </div>
        <div class="grid grid-cols-3 mx-auto max-w-fit">
            @foreach ($repos as $repo)
                <div class="mb-4 border rounded-lg p-4 bg-gray-900 w-[400px] min-h-[150px] h-fit mx-2">
                    <a href="{{ $repo->url }}" target="_blank" class="text-blue-600 font-semibold">
                        {{ $repo->name }}
                    </a>
                    <p class="text-gray-700">{{ $repo->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
