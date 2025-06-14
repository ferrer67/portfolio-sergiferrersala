<x-layout>
    <h1 class="mb-4 text-center text-3xl font-extrabold">Contacta conmigo</h1>



    <div class="p-2 mx-auto max-w-5xl bg-slate-800 rounded-2xl mb-8">
        <div class="p-4 mb-6 border-b-1">
            <p>Rellena este formulario para enviarme un email.</p>
        </div>
        <div>
            <form action="https://formsubmit.co/sferrersala@gmail.com" method="POST" class="space-y-4">
                <!--Honeypot anti-bots -->
                <input type="text" name="_honey" style="display: none">

                <!-- Anti-spam (opcional) -->
                <input type="hidden" name="_captcha" value="false">

                <!-- Redirección después de enviar -->
                <input type="hidden" name="_next" value="https://ferrer67.github.io/index.html">

                <div>
                    <label for="email" class="block font-semibold">Tu correo:</label>
                    <input type="email" name="email" required class="w-full border px-3 py-2 rounded" placeholder="name@email.com">
                </div>

                <div>
                    <label for="subject" class="block font-semibold">Asunto:</label>
                    <input type="text" name="subject" id="subject" required class="w-full border px-3 py-2 rounded">
                </div>

                <div>
                    <label for="message" class="block font-semibold">Mensaje:</label>
                    <textarea name="message" required class="w-full border px-3 py-2 rounded"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 transition cursor-pointer">
                        Enviar
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-layout>
