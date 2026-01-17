<x-layouts.main_layout pageTitle="{{ $snack->name }}">

    {{-- Breadcrumb --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-3 sm:py-4">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-bold uppercase">
                <a href="/" class="text-gray-600 hover:text-orange-500 transition">Home</a>
                <span class="text-gray-400">→</span>
                <a href="{{ route('web.snacks.list') }}"
                    class="text-gray-600 hover:text-orange-500 transition">Salgadinhos</a>
                <span class="text-gray-400">→</span>
                <span class="text-gray-900 truncate max-w-[150px] sm:max-w-none">{{ $snack->name }}</span>
            </nav>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6 sm:py-10 space-y-6 sm:space-y-8">

        {{-- Mensagem de sucesso --}}
        @if (session('success'))
            <div
                class="p-4 sm:p-5 bg-green-100 border-4 border-green-600 
                        shadow-[6px_6px_0px_0px_rgba(22,163,74,1)]
                        animate-pulse">
                <p class="font-black text-green-900 uppercase text-sm sm:text-base">
                    ✓ {{ session('success') }}
                </p>
            </div>
        @endif

        {{-- Detalhes do Salgadinho --}}
        <section
            class="bg-white border-4 sm:border-6 border-gray-900 
                        shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                        overflow-hidden">

            <div class="flex flex-col lg:flex-row">

                {{-- Imagem --}}
                <div
                    class="w-full lg:w-2/5 bg-amber-50 border-b-4 lg:border-b-0 lg:border-r-4 sm:border-b-6 sm:lg:border-r-6 border-gray-900 
                            p-6 sm:p-8 flex items-center justify-center min-h-[250px] sm:min-h-[300px] lg:min-h-[400px]">
                    @if ($snack->image)
                        <img src="{{ $snack->image }}" alt="{{ $snack->name }}"
                            class="w-full h-full max-w-[280px] max-h-[280px] sm:max-w-[320px] sm:max-h-[320px] object-contain">
                    @else
                        <div
                            class="w-40 h-40 sm:w-48 sm:h-48 border-6 border-gray-300 bg-gray-100 
                                    flex items-center justify-center rotate-3">
                            <span class="text-gray-400 font-black text-sm sm:text-base uppercase">Sem imagem</span>
                        </div>
                    @endif
                </div>

                {{-- Informações --}}
                <div class="w-full lg:w-3/5 p-6 sm:p-8 space-y-4 sm:space-y-6">

                    {{-- Badge de categoria --}}
                    <div
                        class="inline-block px-3 py-1 sm:px-4 sm:py-1.5 
                                bg-orange-500 text-gray-900 font-black text-xs uppercase tracking-widest 
                                border-3 sm:border-4 border-gray-900 
                                shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                rotate-[-1deg]">
                        Salgadinho
                    </div>

                    {{-- Nome --}}
                    <h1
                        class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 leading-tight 
                               border-b-6 border-orange-400 pb-3 sm:pb-4 inline-block">
                        {{ $snack->name }}
                    </h1>

                    {{-- Informações principais --}}
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <span
                                class="text-sm sm:text-base font-bold text-gray-500 uppercase tracking-wide min-w-[80px]">Marca:</span>
                            <span class="text-base sm:text-lg font-black text-gray-900">{{ $snack->brand->name }}</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <span
                                class="text-sm sm:text-base font-bold text-gray-500 uppercase tracking-wide min-w-[80px]">Sabor:</span>
                            <span class="text-base sm:text-lg font-black text-gray-900">{{ $snack->flavor }}</span>
                        </div>
                    </div>

                    {{-- Preço destacado --}}
                    <div
                        class="inline-block p-4 sm:p-6 bg-amber-50 border-4 sm:border-6 border-gray-900 
                                shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                                rotate-1">
                        <p class="text-xs sm:text-sm font-bold text-gray-600 uppercase tracking-wide mb-1">Preço médio:
                        </p>
                        <p class="text-3xl sm:text-4xl font-black text-orange-500">
                            R$ {{ number_format($snack->price / 100, 2, ',', '.') }}
                        </p>
                    </div>

                    {{-- Descrição --}}
                    @if ($snack->description)
                        <div class="pt-4 sm:pt-6 border-t-4 border-gray-900">
                            <h3 class="text-sm sm:text-base font-black text-gray-900 uppercase mb-2 sm:mb-3">Sobre:</h3>
                            <p class="text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                                {{ $snack->description }}
                            </p>
                        </div>
                    @endif

                </div>
            </div>
        </section>

        {{-- Seção de Comentários --}}
        <section
            class="bg-white border-4 sm:border-6 border-gray-900 
                        shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                        p-5 sm:p-8 space-y-6 sm:space-y-8">

            {{-- Header --}}
            <div class="flex items-center justify-between flex-wrap gap-3">
                <h2 class="text-2xl sm:text-3xl font-black text-gray-900 uppercase">
                    Comentários
                </h2>
                <span
                    class="px-4 py-2 bg-gray-900 text-amber-300 font-black text-sm sm:text-base border-4 border-gray-900 shadow-[4px_4px_0px_0px_rgba(251,191,36,1)]">
                    {{ $comments->count() }}
                </span>
            </div>

            {{-- Lista de comentários --}}
            <div class="space-y-4 sm:space-y-6">
                @forelse ($comments as $comment)
                    <article
                        class="p-4 sm:p-5 bg-amber-50 border-4 border-gray-900 
                        shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                        hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                        hover:translate-x-[2px] hover:translate-y-[2px]
                        transition-all duration-150">

                        {{-- Meta info --}}
                        <div class="flex items-center gap-2 sm:gap-3 mb-3 flex-wrap">
                            <div
                                class="px-3 py-1 bg-gray-900 text-white font-bold text-xs uppercase border-2 border-gray-900">
                                {{ $comment->user?->name ?? 'Anônimo' }}
                            </div>
                            <span class="text-xs sm:text-sm text-gray-600 font-medium">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </div>

                        {{-- Conteúdo --}}
                        <p class="text-sm sm:text-base text-gray-800 font-medium leading-relaxed">
                            {{ $comment->content }}
                        </p>
                    </article>
                @empty
                    <div class="text-center py-8 sm:py-12">
                        <div class="inline-block p-6 sm:p-8 bg-amber-50 border-4 sm:border-6 border-gray-300">
                            <p class="text-base sm:text-lg text-gray-500 font-bold uppercase">
                                Nenhum comentário ainda.
                            </p>
                            <p class="text-sm text-gray-400 font-medium mt-2">
                                Seja o primeiro a comentar!
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

            {{-- Paginação Brutalista --}}
            @if ($comments->hasPages())
                <div class="mt-8 sm:mt-10">
                    <nav role="navigation" aria-label="Paginação de comentários"
                        class="flex items-center justify-center gap-2 sm:gap-3 flex-wrap">

                        {{-- Botão Anterior --}}
                        @if ($comments->onFirstPage())
                            <span
                                class="px-4 py-2 sm:px-5 sm:py-3 
                             bg-gray-200 text-gray-400 font-black text-sm uppercase
                             border-4 border-gray-300 
                             cursor-not-allowed opacity-60">
                                ← Anterior
                            </span>
                        @else
                            <a href="{{ $comments->previousPageUrl() }}"
                                class="px-4 py-2 sm:px-5 sm:py-3 
                          bg-white text-gray-900 font-black text-sm uppercase
                          border-4 border-gray-900 
                          shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                          hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                          hover:translate-x-[2px] hover:translate-y-[2px]
                          active:shadow-[1px_1px_0px_0px_rgba(17,24,39,1)]
                          active:translate-x-[3px] active:translate-y-[3px]
                          transition-all duration-150">
                                ← Anterior
                            </a>
                        @endif

                        {{-- Números de Página --}}
                        <div class="flex items-center gap-2 flex-wrap justify-center">
                            @foreach ($comments->getUrlRange(1, $comments->lastPage()) as $page => $url)
                                @if ($page == $comments->currentPage())
                                    {{-- Página Atual --}}
                                    <span
                                        class="px-4 py-2 sm:px-5 sm:py-3 
                                     bg-orange-500 text-gray-900 font-black text-sm
                                     border-4 border-gray-900 
                                     shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                     min-w-[44px] text-center">
                                        {{ $page }}
                                    </span>
                                @elseif ($page == 1 || $page == $comments->lastPage() || abs($page - $comments->currentPage()) <= 2)
                                    {{-- Páginas próximas ou primeira/última --}}
                                    <a href="{{ $url }}"
                                        class="px-4 py-2 sm:px-5 sm:py-3 
                                  bg-white text-gray-900 font-bold text-sm
                                  border-4 border-gray-900 
                                  shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                  hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                                  hover:translate-x-[2px] hover:translate-y-[2px]
                                  hover:bg-amber-50
                                  active:shadow-[1px_1px_0px_0px_rgba(17,24,39,1)]
                                  active:translate-x-[3px] active:translate-y-[3px]
                                  transition-all duration-150
                                  min-w-[44px] text-center">
                                        {{ $page }}
                                    </a>
                                @elseif (abs($page - $comments->currentPage()) == 3)
                                    {{-- Separador (três pontos) --}}
                                    <span class="px-2 text-gray-500 font-black">...</span>
                                @endif
                            @endforeach
                        </div>

                        {{-- Botão Próximo --}}
                        @if ($comments->hasMorePages())
                            <a href="{{ $comments->nextPageUrl() }}"
                                class="px-4 py-2 sm:px-5 sm:py-3 
                          bg-white text-gray-900 font-black text-sm uppercase
                          border-4 border-gray-900 
                          shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                          hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                          hover:translate-x-[2px] hover:translate-y-[2px]
                          active:shadow-[1px_1px_0px_0px_rgba(17,24,39,1)]
                          active:translate-x-[3px] active:translate-y-[3px]
                          transition-all duration-150">
                                Próximo →
                            </a>
                        @else
                            <span
                                class="px-4 py-2 sm:px-5 sm:py-3 
                             bg-gray-200 text-gray-400 font-black text-sm uppercase
                             border-4 border-gray-300 
                             cursor-not-allowed opacity-60">
                                Próximo →
                            </span>
                        @endif
                    </nav>

                    {{-- Informação de Página --}}
                    <div class="mt-4 sm:mt-6 text-center">
                        <p class="text-xs sm:text-sm text-gray-600 font-bold uppercase">
                            Mostrando
                            <span class="text-gray-900">{{ $comments->firstItem() ?? 0 }}</span>
                            até
                            <span class="text-gray-900">{{ $comments->lastItem() ?? 0 }}</span>
                            de
                            <span class="text-gray-900">{{ $comments->total() }}</span>
                            comentários
                        </p>
                    </div>
                </div>
            @endif
        </section>

        {{-- Formulário de Comentário --}}
        <section
            class="bg-gray-900 border-4 sm:border-6 border-gray-900 
                        shadow-[8px_8px_0px_0px_rgba(251,146,60,1)] sm:shadow-[12px_12px_0px_0px_rgba(251,146,60,1)]
                        p-5 sm:p-8 space-y-4 sm:space-y-6">

            <h2 class="text-2xl sm:text-3xl font-black text-white uppercase">
                Deixe seu comentário
            </h2>

            <form method="POST" action="{{ route('snacks.comments.store', $snack) }}" class="space-y-4 sm:space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-bold text-amber-300 uppercase tracking-wide mb-2 sm:mb-3">
                        Seu comentário:
                    </label>
                    <textarea name="content" rows="4" required minlength="3" maxlength="500"
                        placeholder="O que você achou deste salgadinho?"
                        class="w-full px-4 py-3 sm:px-5 sm:py-4
                               bg-white text-gray-900 font-medium text-sm sm:text-base
                               border-4 sm:border-6 border-white
                               focus:border-orange-500 focus:outline-none
                               shadow-[4px_4px_0px_0px_rgba(255,255,255,1)] sm:shadow-[6px_6px_0px_0px_rgba(255,255,255,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)] sm:focus:shadow-[8px_8px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400 placeholder:font-normal
                               resize-none">{{ old('content') }}</textarea>

                    <p class="text-xs sm:text-sm text-amber-200 font-medium mt-2">
                        Mínimo 3 caracteres, máximo 500.
                    </p>

                    @error('content')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-3
                           bg-orange-500 text-gray-900 font-black text-base sm:text-lg uppercase tracking-wide
                           px-8 py-4 sm:px-12 sm:py-5 
                           border-4 sm:border-6 border-white
                           shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] sm:shadow-[8px_8px_0px_0px_rgba(255,255,255,1)]
                           hover:shadow-[3px_3px_0px_0px_rgba(255,255,255,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                           hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                           active:shadow-[2px_2px_0px_0px_rgba(255,255,255,1)]
                           active:translate-x-[4px] active:translate-y-[4px]
                           transition-all duration-150
                           disabled:opacity-50 disabled:cursor-not-allowed">
                    Enviar Comentário
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </form>
        </section>

        {{-- Botão voltar --}}
        <div class="pt-4">
            <a href="{{ route('web.snacks.list') }}"
                class="inline-flex items-center gap-2 
                      text-sm sm:text-base font-bold text-gray-700 hover:text-gray-900 
                      border-b-4 border-transparent hover:border-orange-500 
                      transition-all duration-200 uppercase tracking-wide">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Voltar para listagem
            </a>
        </div>

    </div>

</x-layouts.main_layout>
