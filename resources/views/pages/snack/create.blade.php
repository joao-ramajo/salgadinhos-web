<x-layouts.main_layout pageTitle="Cadastrar Salgadinho">

    {{-- Breadcrumb --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-3 sm:py-4">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs sm:text-sm font-bold uppercase">
                <a href="/" class="text-gray-600 hover:text-orange-500 transition">Home</a>
                <span class="text-gray-400">→</span>
                <a href="{{ route('web.snacks.list') }}"
                    class="text-gray-600 hover:text-orange-500 transition">Salgadinhos</a>
                <span class="text-gray-400">→</span>
                <span class="text-gray-900">Cadastrar</span>
            </nav>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 py-6 sm:py-10">

        {{-- Header --}}
        <div class="mb-8 sm:mb-12">
            <div
                class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-orange-500 text-gray-900 font-black text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                        rotate-[-1deg] mb-4 sm:mb-6">
                Novo Salgadinho
            </div>

            <h1
                class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 
                       border-b-6 sm:border-b-8 border-orange-400 pb-3 inline-block mb-3 sm:mb-4">
                Cadastrar Salgadinho
            </h1>

            <p class="text-base sm:text-lg text-gray-700 font-medium">
                Adicione um novo salgadinho ao nosso catálogo. <span class="font-black text-gray-900">Preencha todos os
                    campos obrigatórios.</span>
            </p>
        </div>

        {{-- Formulário --}}
        <form method="POST" action="{{  route('snacks.create') }}"
            class="bg-white border-4 sm:border-6 border-gray-900 
                     shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                     p-6 sm:p-8 lg:p-10 space-y-6 sm:space-y-8">

            @csrf

            {{-- Nome --}}
            <div>
                <label for="name"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Nome do Salgadinho <span class="text-orange-500">*</span>
                </label>
                <input type="text" id="name" name="name" required maxlength="100" value="{{ old('name') }}"
                    placeholder="Ex: Doritos Nacho"
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           placeholder:text-gray-400">

                @error('name')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Sabor --}}
            <div>
                <label for="flavor"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Sabor <span class="text-orange-500">*</span>
                </label>
                <input type="text" id="flavor" name="flavor" required maxlength="50" value="{{ old('flavor') }}"
                    placeholder="Ex: Queijo Nacho"
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           placeholder:text-gray-400">

                @error('flavor')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Marca --}}
            <div>
                <label for="brand_id"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Marca <span class="text-orange-500">*</span>
                </label>
                <select id="brand_id" name="brand_id" required
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           cursor-pointer">
                    <option value="" disabled selected>Selecione uma marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>

                @error('brand_id')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Preço --}}
            <div>
                <label for="price"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Preço <span class="text-orange-500">*</span>
                </label>
                <div class="relative">
                    <span
                        class="absolute left-4 sm:left-5 top-1/2 -translate-y-1/2 text-gray-900 font-black text-sm sm:text-base">
                        R$
                    </span>
                    <input type="text" id="price" name="price_display" required
                        value="{{ old('price_display') }}" placeholder="0,00"
                        class="w-full pl-12 sm:pl-14 pr-4 py-3 sm:pr-5 sm:py-4
                               bg-amber-50 text-gray-900 font-bold text-sm sm:text-base
                               border-4 sm:border-6 border-gray-900
                               focus:border-orange-500 focus:outline-none focus:bg-white
                               shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400">
                    <input type="hidden" id="price_cents" name="price" value="{{ old('price') }}">
                </div>
                <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                    Digite o preço em reais (ex: 5,99)
                </p>

                @error('price')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            {{-- Imagem --}}
            <div>
                <label for="image"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    URL da Imagem
                </label>
                <input type="url" id="image" name="image" maxlength="500" value="{{ old('image') }}"
                    placeholder="https://exemplo.com/imagem.jpg"
                    class="w-full px-4 py-3 sm:px-5 sm:py-4
                           bg-amber-50 text-gray-900 font-medium text-sm sm:text-base
                           border-4 sm:border-6 border-gray-900
                           focus:border-orange-500 focus:outline-none focus:bg-white
                           shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                           focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                           transition-all duration-150
                           placeholder:text-gray-400">
                <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                    Cole o link completo da imagem do produto
                </p>

                @error('image')
                    <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                        <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                    </div>
                @enderror

                {{-- Preview da imagem --}}
                <div id="image-preview-container" class="hidden mt-4">
                    <p class="text-xs sm:text-sm font-bold text-gray-900 uppercase mb-2">Preview:</p>
                    <div class="w-full max-w-xs p-4 bg-white border-4 border-gray-900">
                        <img id="image-preview" src="" alt="Preview" class="w-full h-auto">
                    </div>
                </div>
            </div>

            {{-- Descrição --}}
            <div>
                <label for="description"
                    class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-3">
                    Descrição
                </label>
                <textarea id="description" name="description" rows="4" maxlength="500"
                    placeholder="Descreva o salgadinho (opcional)"
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
                    Máximo 500 caracteres
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
                <button type="submit"
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
                    Cadastrar Salgadinho
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                </button>

                <a href="{{ route('web.snacks.list') }}"
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

    </div>

    {{-- Script para máscara de preço e preview de imagem --}}
    <script>
        // Máscara de preço
        const priceInput = document.getElementById('price');
        const priceHidden = document.getElementById('price_cents');

        priceInput.addEventListener('input', function(e) {
            let value = e.target.value;

            // Remove tudo que não é número
            value = value.replace(/\D/g, '');

            // Converte para número e divide por 100
            let numValue = parseInt(value) || 0;

            // Formata para reais
            let formatted = (numValue / 100).toFixed(2).replace('.', ',');

            // Atualiza o input visível
            e.target.value = formatted;

            // Atualiza o input hidden com o valor em centavos
            priceHidden.value = numValue;
        });

        // Preview de imagem
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');
        const imagePreviewContainer = document.getElementById('image-preview-container');

        imageInput.addEventListener('input', function(e) {
            const url = e.target.value.trim();

            if (url && isValidUrl(url)) {
                imagePreview.src = url;
                imagePreviewContainer.classList.remove('hidden');

                // Esconde preview se a imagem não carregar
                imagePreview.onerror = function() {
                    imagePreviewContainer.classList.add('hidden');
                };
            } else {
                imagePreviewContainer.classList.add('hidden');
            }
        });

        function isValidUrl(string) {
            try {
                new URL(string);
                return true;
            } catch (_) {
                return false;
            }
        }

        // Se já tem valor (old input), executa a máscara
        if (priceInput.value) {
            priceInput.dispatchEvent(new Event('input'));
        }

        // Se já tem imagem (old input), mostra preview
        if (imageInput.value) {
            imageInput.dispatchEvent(new Event('input'));
        }
    </script>

</x-layouts.main_layout>
