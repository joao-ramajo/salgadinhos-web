<x-layouts.main_layout pageTitle="Salgadinhos">

    {{-- Hero Section da Listagem --}}
    <section class="w-full py-8 sm:py-12 lg:py-16 bg-amber-50 border-b-4 sm:border-b-6 border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            {{-- Badge --}}
            <div class="inline-block mb-3 sm:mb-4 px-3 py-1.5 sm:px-4 sm:py-2 
                        bg-orange-500 text-gray-900 font-black text-xs uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[4px_4px_0px_0px_rgba(17,24,39,1)] sm:shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] 
                        rotate-[-1deg]">
                Catálogo Completo
            </div>

            {{-- Título --}}
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-3 
                       inline-block border-b-6 sm:border-b-8 border-orange-400 pb-1 sm:pb-2 
                       leading-tight">
                Todos os Salgadinhos
            </h1>

            <p class="text-base sm:text-lg text-gray-700 font-medium mt-3 sm:mt-4 max-w-2xl">
                Explore nossa coleção completa. <span class="font-black text-gray-900">{{ count($snacks) }} sabores</span> disponíveis.
            </p>

        </div>
    </section>

    {{-- Grid de Salgadinhos --}}
    <section class="w-full py-8 sm:py-12 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            {{-- Grid responsivo otimizado --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">

                @foreach ($snacks as $snack)
                    <a href="{{ route('web.snacks.show', ['snack' => $snack->id]) }}" 
                       class="group block">
                        
                        <article class="bg-amber-50 border-4 sm:border-6 border-gray-900 
                                       shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                                       hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                       hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                                       active:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                                       active:translate-x-[4px] active:translate-y-[4px]
                                       transition-all duration-200 
                                       overflow-hidden flex flex-col h-full">

                            {{-- Imagem --}}
                            <div class="h-[160px] sm:h-[180px] lg:h-[200px] w-full bg-white border-b-4 sm:border-b-6 border-gray-900 relative overflow-hidden">
                                <img src="{{ $snack->image ?? 'https://placehold.co/400x200/fb923c/111827?text=Salgadinho' }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" 
                                     alt="{{ $snack->name }}">
                                
                                {{-- Badge de Preço Flutuante --}}
                                <div class="absolute top-2 right-2 sm:top-3 sm:right-3 
                                           px-2 py-1 sm:px-3 sm:py-1.5 
                                           bg-orange-500 text-gray-900 font-black 
                                           text-xs sm:text-sm 
                                           border-3 sm:border-4 border-white 
                                           shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)] 
                                           rotate-2 sm:rotate-3">
                                    R$ {{ $snack->price / 100 }}
                                </div>
                            </div>

                            {{-- Conteúdo --}}
                            <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">

                                <div>
                                    <h2 class="text-lg sm:text-xl font-black text-gray-900 leading-tight mb-2 sm:mb-3 
                                               group-hover:text-orange-600 transition-colors 
                                               line-clamp-2">
                                        {{ $snack->name }}
                                    </h2>

                                    <div class="space-y-1">
                                        <p class="text-xs sm:text-sm font-bold text-gray-700 uppercase tracking-wide truncate">
                                            <span class="text-gray-500">Marca:</span> {{ $snack->brand_name }}
                                        </p>

                                        <p class="text-xs sm:text-sm font-bold text-gray-700 uppercase tracking-wide truncate">
                                            <span class="text-gray-500">Sabor:</span> {{ $snack->flavor }}
                                        </p>
                                    </div>
                                </div>

                                {{-- CTA --}}
                                <div class="mt-3 sm:mt-4 pt-3 sm:pt-4 border-t-3 sm:border-t-4 border-gray-900">
                                    <span class="inline-flex items-center gap-2 text-xs sm:text-sm font-black text-orange-500 uppercase tracking-wide 
                                                 group-hover:gap-3 transition-all">
                                        Ver Detalhes
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                            <path stroke-linecap="square" stroke-linejoin="miter" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </span>
                                </div>

                            </div>
                        </article>
                    </a>
                @endforeach

            </div>

            {{-- Mensagem caso não tenha salgadinhos --}}
            @if(count($snacks) === 0)
                <div class="text-center py-12 sm:py-20">
                    <div class="inline-block p-6 sm:p-8 bg-amber-50 
                                border-4 sm:border-6 border-gray-900 
                                shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                                max-w-md mx-auto">
                        <h3 class="text-xl sm:text-2xl font-black text-gray-900 mb-2 uppercase leading-tight">
                            Ops! Nenhum salgadinho encontrado
                        </h3>
                        <p class="text-base sm:text-lg text-gray-700 font-medium">
                            Volte mais tarde ou adicione o primeiro!
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </section>

    {{-- Seção de CTA no final --}}
    <section class="w-full py-12 sm:py-16 bg-gray-900 border-t-4 sm:border-t-6 border-orange-500">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
            
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white mb-3 sm:mb-4 uppercase leading-tight">
                Não encontrou seu favorito?
            </h2>

            <p class="text-base sm:text-lg text-gray-300 font-medium mb-6 sm:mb-8 max-w-xl mx-auto">
                Sugira novos salgadinhos para nossa comunidade avaliar!
            </p>

            <a href="/sugerir" 
               class="inline-flex items-center justify-center gap-2 sm:gap-3
                      bg-orange-500 text-gray-900 font-black 
                      text-base sm:text-lg uppercase tracking-wide
                      px-8 py-4 sm:px-12 sm:py-5 
                      border-4 sm:border-6 border-white
                      shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] sm:shadow-[8px_8px_0px_0px_rgba(255,255,255,1)]
                      hover:shadow-[3px_3px_0px_0px_rgba(255,255,255,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                      hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                      active:shadow-[2px_2px_0px_0px_rgba(255,255,255,1)]
                      active:translate-x-[4px] active:translate-y-[4px]
                      transition-all duration-150">
                Sugerir Salgadinho
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
            </a>

        </div>
    </section>

</x-layouts.main_layout>