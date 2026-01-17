<x-layouts.main_layout pageTitle="Cadastrar Marca">

    {{-- Breadcrumb --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-3 sm:py-4">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-bold uppercase">
                <a href="/" class="text-gray-600 hover:text-orange-500 transition">Home</a>
                <span class="text-gray-400">→</span>
                <a href="/brands" class="text-gray-600 hover:text-orange-500 transition">Marcas</a>
                <span class="text-gray-400">→</span>
                <span class="text-gray-900">Cadastrar</span>
            </nav>
        </div>
    </div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-6 sm:py-10">

        {{-- Header --}}
        <div class="mb-8 sm:mb-12">
            <div class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-orange-500 text-gray-900 font-black text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                        rotate-[-1deg] mb-4 sm:mb-6">
                Nova Marca
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 
                       border-b-6 sm:border-b-8 border-orange-400 pb-3 inline-block mb-3 sm:mb-4">
                Cadastrar Marca
            </h1>

            <p class="text-base sm:text-lg text-gray-700 font-medium">
                Adicione uma nova marca de salgadinhos. <span class="font-black text-gray-900">Simples e direto.</span>
            </p>
        </div>

        {{-- Formulário --}}
        <form method="POST" action="{{ route('brands.store') }}" 
              class="bg-white border-4 sm:border-6 border-gray-900 
                     shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                     p-6 sm:p-8 lg:p-10 space-y-6 sm:space-y-8">
            
            @csrf

            {{-- Nome da Marca --}}
            <div>
                <label for="name" class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Nome da Marca <span class="text-orange-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="name"
                    name="name" 
                    required
                    maxlength="100"
                    value="{{ old('name') }}"
                    placeholder="Ex: Doritos, Ruffles, Cheetos..."
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           placeholder:text-gray-400">
                
                <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                    Digite o nome completo da marca
                </p>

                @error('name')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Descrição --}}
            <div>
                <label for="description" class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Descrição
                </label>
                <textarea 
                    id="description"
                    name="description" 
                    rows="5"
                    maxlength="500"
                    placeholder="Conte um pouco sobre a marca, sua história ou características... (opcional)"
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           placeholder:text-gray-400
                           resize-none">{{ old('description') }}</textarea>
                
                <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                    Máximo 500 caracteres (opcional)
                </p>

                @error('description')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Divisor --}}
            <div class="flex items-center justify-center gap-4 my-6 sm:my-8">
                <div class="w-16 h-2 bg-orange-400"></div>
                <div class="w-2 h-2 bg-gray-900 rotate-45"></div>
                <div class="w-16 h-2 bg-gray-900"></div>
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
                    Cadastrar Marca
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                </button>

                <a href="/brands" 
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

        {{-- Dica Visual --}}
        <div class="mt-8 sm:mt-12 p-5 sm:p-6 bg-amber-50 border-4 border-gray-900 
                    shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]">
            <div class="flex items-start gap-3 sm:gap-4">
                <div class="w-8 h-8 sm:w-10 sm:h-10 bg-orange-500 border-3 border-gray-900 
                            flex items-center justify-center flex-shrink-0 rotate-3">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm sm:text-base font-black text-gray-900 uppercase mb-1 sm:mb-2">
                        Dica
                    </h3>
                    <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed">
                        Certifique-se de que a marca ainda não existe antes de cadastrar. 
                        Marcas duplicadas podem causar confusão no catálogo.
                    </p>
                </div>
            </div>
        </div>

    </div>

</x-layouts.main_layout>