<x-layouts.main_layout pageTitle="Sobre o Projeto">

    {{-- Hero Section --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-amber-50 border-b-4 sm:border-b-6 border-gray-900 relative overflow-hidden">
        
        {{-- Elementos decorativos --}}
        <div class="absolute top-10 left-10 w-24 h-24 sm:w-32 sm:h-32 border-6 sm:border-8 border-gray-900 rotate-12 opacity-10"></div>
        <div class="absolute bottom-10 right-10 w-28 h-28 sm:w-40 sm:h-40 bg-orange-400 opacity-20 -rotate-6"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-gray-900 text-amber-300 font-black text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(251,191,36,1)]
                        rotate-[-1deg] mb-6">
                Sobre o Projeto
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-gray-900 
                       border-b-6 sm:border-b-8 border-orange-400 pb-3 inline-block mb-6">
                Salgadinhos Web
            </h1>

            <p class="text-xl sm:text-2xl lg:text-3xl text-gray-900 font-bold leading-tight max-w-3xl">
                A plataforma definitiva para <span class="bg-amber-300 px-2 py-1 inline-block rotate-[-1deg]">catalogar</span>, 
                <span class="bg-orange-300 px-2 py-1 inline-block rotate-[1deg]">comparar</span> e 
                <span class="bg-amber-300 px-2 py-1 inline-block rotate-[-1deg]">avaliar</span> salgadinhos.
            </p>

        </div>
    </section>

    {{-- Objetivo Principal --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            
            <div class="bg-orange-500 border-4 sm:border-6 border-gray-900 
                        shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                        p-6 sm:p-8 lg:p-12">
                
                <div class="flex items-start gap-4 sm:gap-6 mb-6">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-900 border-4 border-white 
                                flex items-center justify-center flex-shrink-0 rotate-3">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-gray-900 uppercase mb-3 sm:mb-4">
                            Nosso Objetivo
                        </h2>
                    </div>
                </div>

                <p class="text-base sm:text-lg text-gray-900 font-medium leading-relaxed mb-4">
                    O <strong class="font-black">Salgadinhos Web</strong> nasceu de uma necessidade simples: 
                    <span class="font-bold">encontrar os melhores salgadinhos do mercado</span> de forma rápida e confiável.
                </p>

                <p class="text-base sm:text-lg text-gray-900 font-medium leading-relaxed">
                    Criamos uma <strong class="font-black">comunidade colaborativa</strong> onde amantes de salgadinhos 
                    podem compartilhar opiniões, descobrir novos sabores e tomar decisões informadas sobre qual 
                    pacote levar para casa.
                </p>

            </div>

        </div>
    </section>

    {{-- Como Funciona --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-amber-50 border-y-4 sm:border-y-6 border-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 text-center uppercase mb-10 sm:mb-16">
                Como Funciona?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                {{-- Passo 1 --}}
                <div class="bg-white p-6 sm:p-8 border-4 sm:border-6 border-gray-900 
                            shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[4px] hover:translate-y-[4px]
                            transition-all duration-200">
                    
                    <div class="inline-block px-4 py-2 bg-orange-500 text-gray-900 font-black text-2xl 
                                border-4 border-gray-900 mb-6 rotate-[-3deg]">
                        01
                    </div>

                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 uppercase mb-3">
                        Explore
                    </h3>

                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Navegue por nosso catálogo completo de salgadinhos. Compare marcas, sabores e preços.
                    </p>
                </div>

                {{-- Passo 2 --}}
                <div class="bg-white p-6 sm:p-8 border-4 sm:border-6 border-gray-900 
                            shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[4px] hover:translate-y-[4px]
                            transition-all duration-200">
                    
                    <div class="inline-block px-4 py-2 bg-orange-500 text-gray-900 font-black text-2xl 
                                border-4 border-gray-900 mb-6 rotate-[2deg]">
                        02
                    </div>

                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 uppercase mb-3">
                        Avalie
                    </h3>

                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Deixe comentários e opiniões sobre os salgadinhos que você já experimentou.
                    </p>
                </div>

                {{-- Passo 3 --}}
                <div class="bg-white p-6 sm:p-8 border-4 sm:border-6 border-gray-900 
                            shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                            hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            hover:translate-x-[4px] hover:translate-y-[4px]
                            transition-all duration-200
                            md:col-span-2 lg:col-span-1">
                    
                    <div class="inline-block px-4 py-2 bg-orange-500 text-gray-900 font-black text-2xl 
                                border-4 border-gray-900 mb-6 rotate-[-2deg]">
                        03
                    </div>

                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 uppercase mb-3">
                        Decida
                    </h3>

                    <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                        Use as avaliações da comunidade para escolher o melhor salgadinho para você.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- Valores do Projeto --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 text-center uppercase mb-10 sm:mb-16">
                Nossos Valores
            </h2>

            <div class="space-y-6 sm:space-y-8">
                
                {{-- Valor 1 --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 p-6 sm:p-8 bg-amber-50 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-[-3deg]">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-lg sm:text-xl font-black text-gray-900 uppercase mb-2">
                            Comunidade em Primeiro Lugar
                        </h3>
                        <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                            Acreditamos no poder das opiniões coletivas. Cada avaliação conta e ajuda outros a fazerem melhores escolhas.
                        </p>
                    </div>
                </div>

                {{-- Valor 2 --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 p-6 sm:p-8 bg-amber-50 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-[3deg]">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-lg sm:text-xl font-black text-gray-900 uppercase mb-2">
                            Simplicidade e Objetividade
                        </h3>
                        <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                            Nada de complicação. Interface direta, informações claras e decisões fáceis.
                        </p>
                    </div>
                </div>

                {{-- Valor 3 --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 p-6 sm:p-8 bg-amber-50 
                            border-4 sm:border-6 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
                    
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-orange-500 border-4 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-[-2deg]">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-lg sm:text-xl font-black text-gray-900 uppercase mb-2">
                            Transparência Total
                        </h3>
                        <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                            Todas as avaliações são públicas e autênticas. Sem filtros, sem manipulação.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- Estatísticas --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-gray-900 border-t-4 sm:border-t-6 border-orange-500">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white text-center uppercase mb-10 sm:mb-16">
                O Projeto em Números
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                
                {{-- Stat 1 --}}
                <div class="bg-orange-500 p-6 sm:p-8 border-4 sm:border-6 border-white 
                            shadow-[8px_8px_0px_0px_rgba(255,255,255,1)] text-center
                            rotate-[-1deg]">
                    <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-2">
                        100+
                    </p>
                    <p class="text-sm sm:text-base font-bold text-gray-900 uppercase tracking-wide">
                        Salgadinhos
                    </p>
                </div>

                {{-- Stat 2 --}}
                <div class="bg-orange-500 p-6 sm:p-8 border-4 sm:border-6 border-white 
                            shadow-[8px_8px_0px_0px_rgba(255,255,255,1)] text-center
                            rotate-[1deg]">
                    <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-2">
                        50+
                    </p>
                    <p class="text-sm sm:text-base font-bold text-gray-900 uppercase tracking-wide">
                        Marcas
                    </p>
                </div>

                {{-- Stat 3 --}}
                <div class="bg-orange-500 p-6 sm:p-8 border-4 sm:border-6 border-white 
                            shadow-[8px_8px_0px_0px_rgba(255,255,255,1)] text-center
                            rotate-[-1deg]">
                    <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-2">
                        500+
                    </p>
                    <p class="text-sm sm:text-base font-bold text-gray-900 uppercase tracking-wide">
                        Avaliações
                    </p>
                </div>

                {{-- Stat 4 --}}
                <div class="bg-orange-500 p-6 sm:p-8 border-4 sm:border-6 border-white 
                            shadow-[8px_8px_0px_0px_rgba(255,255,255,1)] text-center
                            rotate-[2deg]">
                    <p class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-2">
                        24/7
                    </p>
                    <p class="text-sm sm:text-base font-bold text-gray-900 uppercase tracking-wide">
                        Disponível
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- CTA Final --}}
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 uppercase mb-4 sm:mb-6 leading-tight">
                Pronto para Descobrir Novos Sabores?
            </h2>

            <p class="text-base sm:text-lg text-gray-700 font-medium mb-8 sm:mb-10 max-w-2xl mx-auto">
                Junte-se à nossa comunidade e ajude outros amantes de salgadinhos a encontrarem o pacote perfeito!
            </p>

            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center">
                <a href="{{ route('web.snacks.list') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3
                          bg-orange-500 text-gray-900 font-black text-base sm:text-lg uppercase tracking-wide
                          px-8 py-4 sm:px-12 sm:py-5 
                          border-4 sm:border-6 border-gray-900
                          shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                          hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                          hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                          transition-all duration-150">
                    Explorar Catálogo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>

                <a href="/" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-2
                          bg-white text-gray-900 font-bold text-sm sm:text-base uppercase tracking-wide
                          px-6 py-4 sm:px-8 sm:py-5 
                          border-4 sm:border-6 border-gray-900
                          shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                          hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                          hover:translate-x-[2px] hover:translate-y-[2px]
                          hover:bg-amber-50
                          transition-all duration-150">
                    Voltar ao Início
                </a>
            </div>

        </div>
    </section>

</x-layouts.main_layout>