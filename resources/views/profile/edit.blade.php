<x-layouts.main_layout pageTitle="Editar Perfil">

    {{-- Breadcrumb --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-3 sm:py-4">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-bold uppercase">
                <a href="/" class="text-gray-600 hover:text-orange-500 transition">Home</a>
                <span class="text-gray-400">→</span>
                <a href="{{ route('profile.show', auth()->user()) }}" class="text-gray-600 hover:text-orange-500 transition">Meu Perfil</a>
                <span class="text-gray-400">→</span>
                <span class="text-gray-900">Editar</span>
            </nav>
        </div>
    </div>

    <div class="w-full py-8 sm:py-12 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">

            {{-- Header --}}
            <div class="mb-8 sm:mb-12">
                <div class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                            bg-orange-500 text-gray-900 font-black text-xs sm:text-sm uppercase tracking-widest 
                            border-3 sm:border-4 border-gray-900 
                            shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                            rotate-[-1deg] mb-4 sm:mb-6">
                    Configurações
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 
                           border-b-6 sm:border-b-8 border-orange-400 pb-3 inline-block mb-3 sm:mb-4">
                    Editar Perfil
                </h1>

                <p class="text-base sm:text-lg text-gray-700 font-medium">
                    Atualize suas informações. <span class="font-black text-gray-900">Suas mudanças serão públicas.</span>
                </p>
            </div>

            {{-- Mensagem de Sucesso --}}
            @if (session('success'))
                <div class="mb-6 p-4 sm:p-5 bg-green-100 border-4 border-green-600 
                            shadow-[6px_6px_0px_0px_rgba(22,163,74,1)]
                            animate-pulse">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-900 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm sm:text-base font-bold text-green-900">
                            ✓ {{ session('success') }}
                        </p>
                    </div>
                </div>
            @endif

            {{-- Avatar Preview --}}
            <div class="mb-8 sm:mb-10 p-6 sm:p-8 bg-amber-50 border-4 sm:border-6 border-gray-900 
                        shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]">
                
                <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                    
                    {{-- Avatar Atual --}}
                    <div class="w-20 h-20 sm:w-24 sm:h-24 bg-orange-500 border-4 sm:border-6 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-[-2deg]
                                shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
                        <span class="text-3xl sm:text-4xl font-black text-gray-900" id="avatar-preview">
                            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
                        </span>
                    </div>

                    {{-- Info do Avatar --}}
                    <div class="text-center sm:text-left">
                        <h3 class="text-base sm:text-lg font-black text-gray-900 uppercase mb-1">
                            Seu Avatar
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-700 font-medium">
                            Gerado automaticamente com as iniciais do seu nome
                        </p>
                    </div>
                </div>
            </div>

            {{-- Formulário --}}
            <form method="POST" action="{{ route('profile.update') }}" 
                  class="bg-amber-50 border-4 sm:border-6 border-gray-900 
                         shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                         p-6 sm:p-8 space-y-6 sm:space-y-8">
                
                @csrf
                @method('PUT')

                {{-- Nome --}}
                <div>
                    <label for="name" class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        Nome <span class="text-orange-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name"
                        name="name" 
                        required
                        maxlength="50"
                        value="{{ old('name', auth()->user()->name) }}"
                        placeholder="Como você quer ser chamado?"
                        autofocus
                        class="w-full px-4 py-3 sm:px-5 sm:py-4
                               bg-white text-gray-900 font-medium text-sm sm:text-base
                               border-4 sm:border-6 border-gray-900
                               focus:border-orange-500 focus:outline-none
                               shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400">
                    
                    <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                        Esse nome aparecerá em todos os seus comentários
                    </p>

                    @error('name')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Email (Apenas Visualização) --}}
                <div>
                    <label class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        E-mail
                    </label>
                    <div class="w-full px-4 py-3 sm:px-5 sm:py-4
                                bg-gray-100 text-gray-600 font-medium text-sm sm:text-base
                                border-4 sm:border-6 border-gray-300
                                opacity-60 cursor-not-allowed">
                        {{ auth()->user()->email }}
                    </div>
                    <p class="text-xs sm:text-sm text-gray-500 font-medium mt-2 flex items-start gap-2">
                        <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        O e-mail não pode ser alterado por questões de segurança
                    </p>
                </div>

                {{-- Divisor --}}
                <div class="flex items-center justify-center gap-3 sm:gap-4 my-6 sm:my-8">
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-orange-400"></div>
                    <div class="w-1.5 sm:w-2 h-1.5 sm:h-2 bg-gray-900 rotate-45"></div>
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-gray-900"></div>
                </div>

                {{-- Botões --}}
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                    <button 
                        type="submit" 
                        class="flex-1 inline-flex items-center justify-center gap-3
                               bg-orange-500 text-gray-900 font-black text-base sm:text-lg uppercase tracking-wide
                               px-8 py-4 sm:px-12 sm:py-5 
                               border-4 sm:border-6 border-gray-900
                               shadow-[6px_6px_0px_0px_rgba(17,24,39,1)] sm:shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                               hover:shadow-[3px_3px_0px_0px_rgba(17,24,39,1)] sm:hover:shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               hover:translate-x-[3px] hover:translate-y-[3px] sm:hover:translate-x-[4px] sm:hover:translate-y-[4px]
                               active:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                               active:translate-x-[4px] active:translate-y-[4px]
                               transition-all duration-150
                               disabled:opacity-50 disabled:cursor-not-allowed">
                        Salvar Alterações
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </button>

                    <a href="{{ route('profile.show', auth()->user()) }}" 
                       class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-2
                              bg-white text-gray-900 font-bold text-sm sm:text-base uppercase tracking-wide
                              px-6 py-4 sm:px-8 sm:py-5 
                              border-4 sm:border-6 border-gray-900
                              shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                              hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                              hover:translate-x-[2px] hover:translate-y-[2px]
                              hover:bg-amber-50
                              transition-all duration-150">
                        Cancelar
                    </a>
                </div>

            </form>

            {{-- Informação Adicional --}}
            <div class="mt-8 sm:mt-10 p-5 sm:p-6 bg-white border-4 border-gray-900 
                        shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]">
                <div class="flex items-start gap-3 sm:gap-4">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-orange-500 border-3 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm sm:text-base font-black text-gray-900 uppercase mb-1 sm:mb-2">
                            Sobre Suas Informações
                        </h3>
                        <ul class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed space-y-1">
                            <li class="flex items-start gap-2">
                                <span class="text-orange-500 font-black">•</span>
                                Seu nome é <strong>público</strong> e aparece em todos os comentários
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-500 font-black">•</span>
                                Seu e-mail é <strong>privado</strong> e nunca será compartilhado
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-500 font-black">•</span>
                                O avatar é gerado automaticamente pelas iniciais do nome
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Script para preview do avatar --}}
    <script>
        const nameInput = document.getElementById('name');
        const avatarPreview = document.getElementById('avatar-preview');

        nameInput.addEventListener('input', function(e) {
            const name = e.target.value.trim();
            if (name.length >= 2) {
                const initials = name.substring(0, 2).toUpperCase();
                avatarPreview.textContent = initials;
            } else if (name.length === 1) {
                avatarPreview.textContent = name.toUpperCase();
            }
        });
    </script>

</x-layouts.main_layout>