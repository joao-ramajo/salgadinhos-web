<x-layouts.main_layout pageTitle="Cadastre-se">

    {{-- Hero minimalista --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-6 sm:py-8">
        <div class="max-w-md mx-auto px-4 sm:px-6 text-center">
            <div
                class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-orange-500 text-gray-900 font-black text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                        rotate-[-1deg] mb-4">
                Bem-vindo!
            </div>

            <h1 class="text-3xl sm:text-4xl font-black text-gray-900 mb-2">
                Criar Conta
            </h1>

            <p class="text-sm sm:text-base text-gray-700 font-medium">
                Junte-se à nossa comunidade de <span class="font-black text-gray-900">amantes de salgadinhos</span>
            </p>
        </div>
    </div>

    <div class="w-full py-8 sm:py-12 bg-white">
        <div class="max-w-lg mx-auto px-4 sm:px-6">

            {{-- Formulário --}}
            <form method="POST" action="{{ route('register') }}"
                class="bg-amber-50 border-4 sm:border-6 border-gray-900 
                         shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                         p-6 sm:p-8 space-y-5 sm:space-y-6">

                @csrf

                {{-- name --}}
                <div>
                    <label for="name"
                        class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        Como quer ser chamado? <span class="text-orange-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" required maxlength="30"
                        value="{{ old('name') }}" placeholder="Ex: João, Maria, ChipsLover..." autofocus
                        class="w-full px-4 py-3 sm:px-5 sm:py-4
                               bg-white text-gray-900 font-medium text-sm sm:text-base
                               border-4 sm:border-6 border-gray-900
                               focus:border-orange-500 focus:outline-none
                               shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400">

                    <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                        Esse nome aparecerá nos seus comentários
                    </p>

                    @error('name')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email"
                        class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        E-mail <span class="text-orange-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                        placeholder="seu@email.com" autocomplete="email"
                        class="w-full px-4 py-3 sm:px-5 sm:py-4
                               bg-white text-gray-900 font-medium text-sm sm:text-base
                               border-4 sm:border-6 border-gray-900
                               focus:border-orange-500 focus:outline-none
                               shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400">

                    @error('email')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Senha --}}
                <div x-data="{ showPassword: false }">
                    <label for="password"
                        class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        Senha <span class="text-orange-500">*</span>
                    </label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" id="password" name="password" required
                            minlength="8" autocomplete="new-password" placeholder="Mínimo 8 caracteres"
                            class="w-full px-4 py-3 sm:px-5 sm:py-4 pr-12 sm:pr-14
                                   bg-white text-gray-900 font-medium text-sm sm:text-base
                                   border-4 sm:border-6 border-gray-900
                                   focus:border-orange-500 focus:outline-none
                                   shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                   focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                                   transition-all duration-150
                                   placeholder:text-gray-400">

                        {{-- Toggle password visibility --}}
                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 
                                   text-gray-600 hover:text-gray-900 
                                   focus:outline-none focus:text-orange-500
                                   transition-colors"
                            :aria-label="showPassword ? 'Ocultar senha' : 'Mostrar senha'">
                            <svg x-show="!showPassword" class="w-5 h-5 sm:w-6 sm:h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPassword" class="w-5 h-5 sm:w-6 sm:h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>

                    <p class="text-xs sm:text-sm text-gray-600 font-medium mt-2">
                        Use letras, números e caracteres especiais
                    </p>

                    @error('password')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Confirmar Senha --}}
                <div x-data="{ showPasswordConfirm: false }">
                    <label for="password_confirmation"
                        class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        Confirme a Senha <span class="text-orange-500">*</span>
                    </label>
                    <div class="relative">
                        <input :type="showPasswordConfirm ? 'text' : 'password'" id="password_confirmation"
                            name="password_confirmation" required minlength="8" autocomplete="new-password"
                            placeholder="Digite a senha novamente"
                            class="w-full px-4 py-3 sm:px-5 sm:py-4 pr-12 sm:pr-14
                                   bg-white text-gray-900 font-medium text-sm sm:text-base
                                   border-4 sm:border-6 border-gray-900
                                   focus:border-orange-500 focus:outline-none
                                   shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                   focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                                   transition-all duration-150
                                   placeholder:text-gray-400">

                        <button type="button" @click="showPasswordConfirm = !showPasswordConfirm"
                            class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 
                                   text-gray-600 hover:text-gray-900 
                                   focus:outline-none focus:text-orange-500
                                   transition-colors"
                            :aria-label="showPasswordConfirm ? 'Ocultar senha' : 'Mostrar senha'">
                            <svg x-show="!showPasswordConfirm" class="w-5 h-5 sm:w-6 sm:h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPasswordConfirm" class="w-5 h-5 sm:w-6 sm:h-6" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>

                    @error('password_confirmation')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Divisor --}}
                <div class="flex items-center justify-center gap-3 sm:gap-4 my-4 sm:my-6">
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-orange-400"></div>
                    <div class="w-1.5 sm:w-2 h-1.5 sm:h-2 bg-gray-900 rotate-45"></div>
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-gray-900"></div>
                </div>

                {{-- Termos de Uso --}}
                <div>
                    <label class="flex items-start gap-3 sm:gap-4 cursor-pointer group">
                        <input type="checkbox" name="terms" id="terms" required
                            class="mt-1 w-5 h-5 sm:w-6 sm:h-6 
                                   border-4 border-gray-900 
                                   text-orange-500 
                                   focus:ring-4 focus:ring-orange-300 
                                   focus:outline-none
                                   cursor-pointer
                                   rounded-sm
                                   transition-all">
                        <span class="flex-1 text-sm sm:text-base text-gray-700 font-medium leading-relaxed">
                            Eu li e aceito os
                            <a href="/termos" target="_blank"
                                class="font-black text-gray-900 hover:text-orange-500 border-b-2 border-gray-900 hover:border-orange-500 transition-colors">
                                Termos de Uso
                            </a>
                            e a
                            <a href="/privacidade" target="_blank"
                                class="font-black text-gray-900 hover:text-orange-500 border-b-2 border-gray-900 hover:border-orange-500 transition-colors">
                                Política de Privacidade
                            </a>
                            <span class="text-orange-500 font-black">*</span>
                        </span>
                    </label>

                    @error('terms')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Botão de Cadastro --}}
                <button type="submit"
                    class="w-full inline-flex items-center justify-center gap-3
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
                    Criar Minha Conta
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                </button>

            </form>

            {{-- Link para Login --}}
            <div class="mt-6 sm:mt-8 text-center">
                <p class="text-sm sm:text-base text-gray-700 font-medium">
                    Já tem uma conta?
                    <a href="{{ route('web.login') }}"
                        class="font-black text-gray-900 hover:text-orange-500 
                              border-b-3 sm:border-b-4 border-gray-900 hover:border-orange-500 
                              transition-all uppercase tracking-wide">
                        Faça Login
                    </a>
                </p>
            </div>

            {{-- Dica de Segurança --}}
            <div
                class="mt-6 sm:mt-8 p-4 sm:p-5 bg-white border-4 border-gray-900 
                        shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]">
                <div class="flex items-start gap-3">
                    <div
                        class="w-8 h-8 sm:w-10 sm:h-10 bg-orange-500 border-3 border-gray-900 
                                flex items-center justify-center flex-shrink-0 rotate-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-900" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xs sm:text-sm font-black text-gray-900 uppercase mb-1">
                            Seus dados estão seguros
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed">
                            Nunca compartilharemos seu e-mail. Sua senha é criptografada e segura.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layouts.main_layout>
