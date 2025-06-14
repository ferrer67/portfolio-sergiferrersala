<x-layout>
    <section>
        <div class="p-4 mx-auto max-w-5xl bg-slate-800 rounded-2xl mb-14 border-2">
            <h2 class="pb-4 text-2xl font-bold">Sobre mi:</h2>
            <div class="pb-4">
                <p>Hola, me llamo Sergi Ferrer Sala termine los estudios hace 1 año y llevo trabajando mas de 2 años como tecnico IT, en mis trabajos he hecho un poco de todo pero lo mas frequente es: administracion de servidores windows, active directory, bases de datos, redes, firewalls y VPN's. Despues de terminar mis estudios busco un trabajo donde poder aplicar mis conocimientos sobre programacion y desarrollar mis habilidades. Actualmente mi tiempo libre lo dedico a realizar pequeños proyectos personales los cuales tengo públicos en mi GitHub y se pueden observar a continuacion.
                </p>
            </div>
            <h2 class="pb-4 text-2xl font-bold">Conocimientos:</h2>
            <p class="pb-3">En el grado superior de Desarrollo de Aplicaciones Web (DAW) aprendi distintas cosas desde crear aplicaciones web a crear el servidor que hostea la aplicacion y crear la base de datos. Durante el curso nos prepararon para ser un perfil Full Stack, en lo que profundizamos mas fue en la creacion de APIs y bastante programacion sin framework sobretodo con Java y javascript, el unico framework que utilizamos fue Laravel y Bootstrap para el proyecto final que consistia en crear una borsa de trebajo para el instituto.
            </p>

            <hr class="pb-2 border-white ">

            <h1 class="text-lg font-bold">Estas son las tecnologias con las que he practicado:</h1>
            <ul class="list-disc list-inside space-y-2 text-white text-lg m-2">
                <li>Java con POO</li>
                <li>C# con ASP.NET</li>
                <li>PHP con laravel</li>
                <li>JavaScript y TypeScript</li>
                <li>Node.js y canvas</li>
                <li>Html/CSS</li>
                <li>Bootstrap</li>
                <li>MySQL</li>
                <li>Git y GitHub</li>
                <li>Docker y VMware</li>
                <li>Linux y windows server</li>
                <li>Los IDEs utilizados son: Visual Studio Code (js,html,css,php), Eclipse (Java), NetBeans (Java), Visual Studio (C#), MySQL Server (MySQL)</li>
            </ul>
        </div>
    </section>

    <section id="tema2">
        <div class="p-2 mx-auto bg-slate-800 border-y-1 mb-8">
            <h2 class="text-center font-bold text-2xl mb-2">Mis proyectos</h2>
            <p class="mx-8">Mi tiempo libre lo dedico a aprender distintos lenguages de programacion y realizar pequeños proyectos que me ayuden a aprender, en este caso este mismo portfolio a sido uno de ellos el cual a sido creado con laravel y tailwind, pero al estar publicado desde github.io en el repositorio solo tengo la pagina estatica y no todo el proyecto. Ademas durante mi curso en grado superior DAW hice otros proyectos web mas grandes con compañeros como: Reproductor de audio (recrear el spotify), pagina sobre una borsa de trabajos para el instituto hecha con API y una tienda donde poder vender productos. En estos proyectos he tenido que crear tanto las maquina virtuales donde se hostea la aplicacion, crear la base de datos y crear la aplicacion.</p>
        </div>

        <div>
            <div class="mx-auto max-w-fit">
                <h1 class="text-2xl font-bold mb-4">Mis Repositorios</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 mx-auto max-w-fit">
                @foreach ($repos as $repo)
                    <div class="mb-4 border rounded-lg bg-slate-800 lg:w-[400px] min-h-[150px] h-fit mx-2">
                        <div class="bg-gray-900 rounded-t-lg p-3 ">
                            <a href="{{ $repo->url }}" target="_blank" class="text-blue-600 font-semibold hover:underline">
                                <div class="flex items-center justify-center">
                                    {{ $repo->name }}
                                    <svg width="20" height="20" viewBox="0,0,256,256">
                                        <g fill="#155dfc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" style="mix-blend-mode: normal"><g transform="scale(16,16)"><path d="M9,2v1h3.29297l-6.26953,6.27344l0.70313,0.70313l6.27344,-6.26953v3.29297h1v-5zM4,4c-1.10547,0 -2,0.89453 -2,2v6c0,1.10547 0.89453,2 2,2h6c1.10547,0 2,-0.89453 2,-2v-5l-1,1v4c0,0.55078 -0.44922,1 -1,1h-6c-0.55078,0 -1,-0.44922 -1,-1v-6c0,-0.55078 0.44922,-1 1,-1h4l1,-1z"></path></g></g>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="p-4">
                            <p class="text-white">{{ $repo->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Boton scroll down -->
    <button id="scroll-button" onclick="document.getElementById('tema2').scrollIntoView({ behavior: 'smooth' })"
            class="hidden md:flex fixed bottom-3 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-cyan-600 z-50">
        ↓ Ver más
    </button>

    <!-- funcion mostrar/ocultar scroll-button -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('scroll-button');
            const target = document.getElementById('tema2');

            const observer = new IntersectionObserver(
                function(entries) {
                    // entries: array con los elementos observados en este caso ( const target)
                    const entry = entries[0];
                        if (entry.isIntersecting) {
                            button.classList.add('opacity-0', 'pointer-events-none');
                        } else {
                            button.classList.remove('opacity-0', 'pointer-events-none');
                        }
                },
                {
                    threshold: 0.5 // activa cuando el elemento observado oscila entre 0.5
                }
            );

            // elemento observado
            observer.observe(target);
        });

    </script>
</x-layout>

