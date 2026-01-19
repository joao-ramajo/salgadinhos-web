<x-layouts.main_layout pageTitle="{{ $user->name }} - Perfil">

    {{-- Hero Section --}}
    <section class="w-full py-8 sm:py-12 bg-amber-50 border-b-4 sm:border-b-6 border-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">

                {{-- Avatar --}}
                <div
                    class="w-20 h-20 sm:w-24 sm:h-24 bg-orange-500 border-4 sm:border-6 border-gray-900 
                            flex items-center justify-center flex-shrink-0 rotate-[-2deg]
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
                    <span class="text-3xl sm:text-4xl font-black text-gray-900">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    </span>
                </div>

                {{-- Info --}}
                <div class="flex-1">
                    <div
                        class="inline-block px-3 py-1 sm:px-4 sm:py-1.5 
                                bg-gray-900 text-amber-300 font-black text-xs uppercase tracking-widest 
                                border-3 border-gray-900 
                                shadow-[4px_4px_0px_0px_rgba(251,191,36,1)]
                                rotate-[-1deg] mb-3">
                        @if (auth()->check() && auth()->id() === $user->id)
                            Meu Perfil
                        @else
                            Perfil Público
                        @endif
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-2">
                        {{ $user->name }}
                    </h1>

                    {{-- Email visível apenas para o próprio usuário --}}
                    @if (auth()->check() && auth()->id() === $user->id)
                        <p class="text-sm sm:text-base text-gray-700 font-medium">
                            {{ $user->email }}
                        </p>
                    @endif

                    <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                        Membro desde {{ $user->created_at->format('d/m/Y') }}
                    </p>
                </div>

                {{-- Botão Editar - apenas para o próprio usuário --}}
                @if (auth()->check() && auth()->id() === $user->id)
                    <a href="{{ route('profile.update') }}"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2
                              bg-white text-gray-900 font-bold text-sm sm:text-base uppercase tracking-wide
                              px-6 py-3 sm:px-8 sm:py-4 
                              border-4 sm:border-6 border-gray-900
                              shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                              hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                              hover:translate-x-[2px] hover:translate-y-[2px]
                              hover:bg-amber-50
                              transition-all duration-150">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Editar Perfil
                    </a>
                @endif
            </div>
        </div>
    </section>

    {{-- Estatísticas --}}
    <section class="w-full py-8 sm:py-12 bg-white border-b-4 border-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                {{-- Total de Comentários --}}
                <div
                    class="bg-amber-50 p-4 sm:p-6 border-4 sm:border-6 border-gray-900 
                            shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            text-center">
                    <p class="text-3xl sm:text-4xl font-black text-orange-500 mb-2">
                        {{ $totalComments->count() }}
                    </p>
                    <p class="text-xs sm:text-sm font-bold text-gray-900 uppercase tracking-wide">
                        Comentários
                    </p>
                </div>

                {{-- Salgadinhos Avaliados --}}
                <div
                    class="bg-amber-50 p-4 sm:p-6 border-4 sm:border-6 border-gray-900 
                            shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            text-center">
                    <p class="text-3xl sm:text-4xl font-black text-orange-500 mb-2">
                        {{ $snacksReviewed }}
                    </p>
                    <p class="text-xs sm:text-sm font-bold text-gray-900 uppercase tracking-wide">
                        Salgadinhos
                    </p>
                </div>

                {{-- Dias Ativo --}}
                @php
                    $created = $user->created_at;
                    $now = now();

                    if ($created->diffInMinutes($now) < 60) {
                        $value = (int) $created->diffInMinutes($now);
                        $label = 'Minutos ativo';
                    } elseif ($created->diffInHours($now) < 24) {
                        $value = $created->diffInHours($now);
                        $label = 'Horas ativo';
                    } else {
                        $value = $created->diffInDays($now);
                        $label = 'Dias ativo';
                    }
                @endphp

                <div
                    class="bg-amber-50 p-4 sm:p-6 border-4 sm:border-6 border-gray-900 
            shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
            text-center">
                    <p class="text-3xl sm:text-4xl font-black text-orange-500 mb-2">
                        {{ $value }}
                    </p>
                    <p class="text-xs sm:text-sm font-bold text-gray-900 uppercase tracking-wide">
                        {{ $label }}
                    </p>
                </div>

                {{-- Último Comentário --}}
                <div
                    class="bg-amber-50 p-4 sm:p-6 border-4 sm:border-6 border-gray-900 
                            shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                            text-center">
                    <p class="text-sm sm:text-base font-black text-gray-900 mb-2">
                        {{ $lastComment ? $lastComment->created_at->diffForHumans() : 'Nunca' }}
                    </p>
                    <p class="text-xs sm:text-sm font-bold text-gray-900 uppercase tracking-wide">
                        Último Post
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- 3 Últimos Comentários --}}
    <section class="w-full py-8 sm:py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <div class="flex items-center justify-between mb-6 sm:mb-8">
                <h2 class="text-2xl sm:text-3xl font-black text-gray-900 uppercase">
                    Últimos Comentários
                </h2>
            </div>

            @if ($recentComments->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                    @foreach ($recentComments as $comment)
                        <article
                            class="bg-amber-50 border-4 sm:border-6 border-gray-900 
                                       shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                                       hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)]
                                       hover:translate-x-[3px] hover:translate-y-[3px]
                                       transition-all duration-200
                                       overflow-hidden flex flex-col">

                            {{-- Imagem do Salgadinho --}}
                            <div
                                class="h-[140px] sm:h-[160px] w-full bg-white border-b-4 sm:border-b-6 border-gray-900 relative overflow-hidden">
                                <a href="{{ route('web.snacks.show', $comment->snack_id) }}"
                                    class="block w-full h-full">
                                    @if ($comment->snack->image)
                                        <img src="{{ $comment->snack->image }}" alt="{{ $comment->snack->name }}"
                                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                            <span class="text-gray-400 font-black text-sm uppercase">Sem imagem</span>
                                        </div>
                                    @endif
                                </a>
                            </div>

                            {{-- Conteúdo --}}
                            <div class="p-4 sm:p-5 flex-1 flex flex-col">

                                <a href="{{ route('web.snacks.show', $comment->snack_id) }}" class="block mb-3">
                                    <h3
                                        class="text-base sm:text-lg font-black text-gray-900 leading-tight 
                                               hover:text-orange-600 transition-colors line-clamp-1">
                                        {{ $comment->snack->name }}
                                    </h3>
                                </a>

                                <p
                                    class="text-sm sm:text-base text-gray-800 font-medium leading-relaxed mb-4 flex-1 line-clamp-3">
                                    "{{ $comment->content }}"
                                </p>

                                <div
                                    class="flex items-center justify-between gap-2 pt-3 border-t-3 sm:border-t-4 border-gray-900">
                                    <span class="text-xs text-gray-600 font-medium">
                                        {{ $comment->created_at->diffForHumans() }}
                                    </span>
                                    <a href="{{ route('web.snacks.show', $comment->snack_id) }}"
                                        class="text-xs font-bold text-orange-500 hover:text-orange-600 uppercase">
                                        Ver Produto →
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            @else
                <div class="text-center py-12 sm:py-16">
                    <div class="inline-block p-6 sm:p-8 bg-amber-50 border-4 sm:border-6 border-gray-300">
                        <p class="text-base sm:text-lg text-gray-500 font-bold uppercase">
                            @if (auth()->check() && auth()->id() === $user->id)
                                Você ainda não comentou nada
                            @else
                                {{ $user->name }} ainda não comentou nada
                            @endif
                        </p>
                        @if (auth()->check() && auth()->id() === $user->id)
                            <p class="text-sm text-gray-400 font-medium mt-2 mb-4">
                                Explore salgadinhos e compartilhe sua opinião!
                            </p>
                            <a href="{{ route('web.snacks.list') }}"
                                class="inline-flex items-center gap-2 mt-4
                                      bg-orange-500 text-gray-900 font-bold text-sm uppercase
                                      px-6 py-3 border-4 border-gray-900
                                      shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                      hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                                      hover:translate-x-[2px] hover:translate-y-[2px]
                                      transition-all">
                                Explorar Salgadinhos
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Todos os Salgadinhos Comentados --}}
    <section class="w-full py-8 sm:py-12 bg-amber-50 border-t-4 sm:border-t-6 border-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 uppercase mb-6 sm:mb-8">
                @if (auth()->check() && auth()->id() === $user->id)
                    Todos os Meus Comentários
                @else
                    Todos os Comentários de {{ $user->name }}
                @endif
            </h2>

            @if ($allComments->count() > 0)
                <div class="space-y-6 sm:space-y-8">

                    @foreach ($allComments as $snack)
                        <article
                            class="bg-white border-4 sm:border-6 border-gray-900 
                                       shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                                       overflow-hidden">

                            {{-- Header do Salgadinho --}}
                            <div
                                class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 
                                        p-4 sm:p-6 bg-orange-500 border-b-4 sm:border-b-6 border-gray-900">

                                {{-- Imagem Miniatura --}}
                                <div
                                    class="w-20 h-20 sm:w-24 sm:h-24 border-4 border-gray-900 bg-white flex-shrink-0 overflow-hidden">
                                    @if ($snack->image)
                                        <img src="{{ $snack->image }}" alt="{{ $snack->name }}"
                                            class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                            <span class="text-gray-400 font-bold text-xs">Sem imagem</span>
                                        </div>
                                    @endif
                                </div>

                                {{-- Info --}}
                                <div class="flex-1">
                                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 mb-1">
                                        {{ $snack->name }}
                                    </h3>
                                    <p class="text-sm sm:text-base font-bold text-gray-800">
                                        {{ $snack->brand->name }} • {{ $snack->flavor }}
                                    </p>
                                    <p class="text-xs sm:text-sm text-gray-700 font-medium mt-1">
                                        {{ $snack->comments->count() }}
                                        {{ $snack->comments->count() === 1 ? 'comentário' : 'comentários' }}
                                    </p>
                                </div>

                                {{-- Link --}}
                                <a href="{{ route('web.snacks.show', $snack->id) }}"
                                    class="w-full sm:w-auto px-6 py-3 bg-gray-900 text-white font-bold text-sm uppercase text-center
                                          border-4 border-gray-900
                                          shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                          hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                                          hover:translate-x-[2px] hover:translate-y-[2px]
                                          transition-all">
                                    Ver Produto
                                </a>
                            </div>

                            {{-- Lista de Comentários deste Salgadinho --}}
                            <div class="p-4 sm:p-6 space-y-4">
                                @foreach ($snack->comments as $comment)
                                    <div class="p-4 sm:p-5 bg-amber-50 border-4 border-gray-900">
                                        <div class="flex items-center justify-between mb-3">
                                            <span class="text-xs sm:text-sm text-gray-600 font-medium">
                                                {{ $comment->created_at->format('d/m/Y H:i') }}
                                            </span>
                                            <span class="text-xs text-gray-500 font-medium">
                                                {{ $comment->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                        <p class="text-sm sm:text-base text-gray-800 font-medium leading-relaxed">
                                            {{ $comment->content }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>

                        </article>
                    @endforeach

                </div>
            @else
                <div class="text-center py-12 sm:py-16">
                    <div class="inline-block p-6 sm:p-8 bg-white border-4 sm:border-6 border-gray-900">
                        <p class="text-base sm:text-lg text-gray-700 font-bold uppercase">
                            Nenhum salgadinho avaliado ainda
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </section>

</x-layouts.main_layout>
