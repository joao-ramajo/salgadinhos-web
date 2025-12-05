<x-layouts.main_layout pageTitle="home">

    <section
        class="w-full min-h-[85vh] flex flex-col items-center justify-center text-center 
                    py-20 bg-gray-50 border-b border-gray-200">

        <div class="max-w-4xl px-8 py-10">

            <h1 class="text-6xl sm:text-7xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">
                Salgadinhos Web
            </h1>

            <p class="mt-4 text-2xl text-gray-700 font-light max-w-3xl mx-auto">
                O Catálogo Definitivo da <span class="text-gray-800 font-black">Crocância</span>.
            </p>

            <p class="mt-3 text-lg text-gray-500 max-w-xl mx-auto">
                Compare, organize e rankeie seus salgadinhos favoritos de forma <span class="text-gray-800 font-black">simples, moderna e objetiva</span>.
            </p>

            <hr class="w-16 h-1 mx-auto my-8 bg-gray-200 border-0 rounded">

            <a href="/ranking"
                class="inline-flex items-center justify-center 
                       bg-gray-900 text-white font-semibold text-lg 
                       px-10 py-3 rounded-xl 
                       shadow-lg hover:bg-gray-800 transition duration-300 
                       transform hover:scale-[1.03] focus:outline-none focus:ring-4 focus:ring-gray-300">
                Ver Ranking Global de Sabores
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>

            <a href="/sobre" class="mt-4 text-sm text-gray-500 hover:text-gray-900 transition block">
                Saiba como funciona a votação.
            </a>

        </div>
    </section>

</x-layouts.main_layout>
