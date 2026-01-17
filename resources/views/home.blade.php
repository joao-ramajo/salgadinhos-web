<x-layouts.main_layout pageTitle="home">

    <section
        class="w-full min-h-[80vh] sm:min-h-[85vh] flex flex-col items-center justify-center 
               py-12 sm:py-16 lg:py-20 px-4 sm:px-6 
               bg-amber-50 relative overflow-hidden">

        {{-- Elementos decorativos brutalistas - Responsivos --}}
        <div class="absolute top-5 left-5 sm:top-10 sm:left-10 w-20 h-20 sm:w-32 sm:h-32 border-4 sm:border-8 border-gray-900 rotate-12 opacity-10"></div>
        <div class="absolute bottom-10 right-5 sm:bottom-20 sm:right-10 w-24 h-24 sm:w-40 sm:h-40 bg-orange-400 opacity-20 -rotate-6"></div>
        <div class="absolute top-1/2 right-1/4 w-16 h-16 sm:w-24 sm:h-24 border-4 sm:border-8 border-orange-500 opacity-15 hidden sm:block"></div>

        <div class="max-w-5xl w-full px-4 sm:px-8 py-6 sm:py-12 relative z-10">

            {{-- Badge/Tag superior - Responsivo --}}
            <div class="inline-block mb-4 sm:mb-6 
                        px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-gray-900 text-amber-300 font-black 
                        text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(251,191,36,1)] sm:shadow-[8px_8px_0px_0px_rgba(251,191,36,1)] 
                        rotate-[-2deg]">
                Beta 2025
            </div>

            {{-- Título principal - Totalmente responsivo --}}
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 
                       font-black text-gray-900 tracking-tight leading-none 
                       mb-4 sm:mb-6 relative">
                <span class="inline-block border-b-6 sm:border-b-8 border-orange-400 pb-1 sm:pb-2">
                    Salgadinhos
                </span>
                <br>
                <span class="inline-block mt-1 sm:mt-2 text-orange-500">
                    Web
                </span>
            </h1>

            {{-- Subtítulo - Responsivo --}}
            <div class="mt-6 sm:mt-8 mb-4 sm:mb-6 
                        p-4 sm:p-6 
                        bg-white border-4 sm:border-6 border-gray-900 
                        shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)] 
                        max-w-2xl">
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-gray-900 font-bold leading-tight">
                    O Catálogo Definitivo da <span class="bg-amber-300 px-2 py-1 inline-block rotate-[-1deg]">Crocância</span>
                </p>
            </div>

            {{-- Descrição - Melhor legibilidade mobile --}}
            <p class="text-base sm:text-lg lg:text-xl text-gray-700 font-medium max-w-2xl mb-8 sm:mb-10 leading-relaxed">
                Compare, organize e ranqueie seus salgadinhos favoritos.
                <span class="font-black text-gray-900 block sm:inline mt-1 sm:mt-0">Simples. Direto. Crocante.</span>
            </p>

            {{-- Divisor gráfico - Responsivo --}}
            <div class="flex items-center justify-center gap-3 sm:gap-4 my-6 sm:my-10">
                <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-orange-400"></div>
                <div class="w-1.5 sm:w-2 h-1.5 sm:h-2 bg-gray-900 rotate-45"></div>
                <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-gray-900"></div>
            </div>

            {{-- Botão CTA principal - Mobile friendly --}}
            <a href="{{ route('web.snacks.list') }}"
                class="inline-flex items-center justify-center gap-2 sm:gap-3
                       bg-orange-500 text-gray-900 font-black 
                       text-base sm:text-lg uppercase tracking-wide
                       px-8 py-4 sm:px-12 sm:py-5 
                       w-full sm:w-auto
                       border-4 sm:border-6 border-gray-900
                       shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                       hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                       hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                       active:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                       active:translate-x-[4px] active:translate-y-[4px]
                       transition-all duration-150
                       focus:outline-none focus:ring-4 focus:ring-orange-300">

                <span>Ver Ranking Global</span>

                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                    <path stroke-linecap="square" stroke-linejoin="miter" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>

            {{-- Link secundário - Mais visível no mobile --}}
            <div class="mt-6 sm:mt-8 text-center sm:text-left">
                <a href="/sobre"
                    class="inline-block text-sm sm:text-base font-bold text-gray-700 hover:text-gray-900 
                          border-b-3 sm:border-b-4 border-transparent hover:border-gray-900 
                          transition-all duration-200 uppercase tracking-wide
                          px-2 py-1">
                    Como funciona a votação →
                </a>
            </div>

        </div>

        {{-- Elementos gráficos no rodapé da section --}}
        <div class="absolute bottom-0 left-0 right-0 h-2 sm:h-4 bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500">
        </div>

    </section>

    {{-- Nova seção: Features/Destaques - Mobile friendly --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white border-t-4 sm:border-t-6 border-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            
            {{-- Título da seção --}}
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-gray-900 text-center mb-8 sm:mb-12 uppercase">
                Por que usar o <span class="text-orange-500">Salgadinhos Web?</span>
            </h2>

            {{-- Grid de features --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                {{-- Feature 1 --}}
                <div class="bg-amber-50 p-6 sm:p-8 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                            transition-all duration-200">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center mb-4 sm:mb-6 rotate-3">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-black text-gray-900 mb-2 sm:mb-3 uppercase">Rankings</h3>
                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Veja os salgadinhos mais votados pela comunidade em tempo real.
                    </p>
                </div>

                {{-- Feature 2 --}}
                <div class="bg-amber-50 p-6 sm:p-8 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                            transition-all duration-200">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center mb-4 sm:mb-6 rotate-[-3deg]">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-black text-gray-900 mb-2 sm:mb-3 uppercase">Comentários</h3>
                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Compartilhe sua opinião e leia o que outros pensam sobre cada sabor.
                    </p>
                </div>

                {{-- Feature 3 --}}
                <div class="bg-amber-50 p-6 sm:p-8 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                            transition-all duration-200
                            sm:col-span-2 lg:col-span-1">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center mb-4 sm:mb-6 rotate-2">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-black text-gray-900 mb-2 sm:mb-3 uppercase">Comparações</h3>
                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Compare marcas, sabores e preços para tomar a melhor decisão.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA Final - Mobile friendly --}}
    <section class="w-full py-12 sm:py-16 bg-gray-900 border-t-4 sm:border-t-6 border-orange-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white mb-3 sm:mb-4 uppercase leading-tight">
                Pronto para começar?
            </h2>

            <p class="text-base sm:text-lg text-gray-300 font-medium mb-6 sm:mb-8 max-w-2xl mx-auto">
                Explore centenas de salgadinhos e encontre seus favoritos agora mesmo!
            </p>

            <a href="{{ route('web.snacks.list') }}" 
               class="inline-flex items-center justify-center gap-2 sm:gap-3
                      bg-orange-500 text-gray-900 font-black 
                      text-base sm:text-lg uppercase tracking-wide
                      px-8 py-4 sm:px-12 sm:py-5 
                      w-full sm:w-auto max-w-md sm:max-w-none
                      border-4 sm:border-6 border-white
                      shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] sm:shadow-[8px_8px_0px_0px_rgba(255,255,255,1)]
                      hover:shadow-[3px_3px_0px_0px_rgba(255,255,255,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                      hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                      active:shadow-[2px_2px_0px_0px_rgba(255,255,255,1)]
                      active:translate-x-[4px] active:translate-y-[4px]
                      transition-all duration-150">
                Explorar Salgadinhos
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>

        </div>
    </section>

</x-layouts.main_layout>