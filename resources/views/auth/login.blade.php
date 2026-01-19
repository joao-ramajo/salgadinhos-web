<x-layouts.main_layout pageTitle="Entrar">

    {{-- Hero minimalista --}}
    <div class="w-full bg-amber-50 border-b-4 border-gray-900 py-6 sm:py-8">
        <div class="max-w-md mx-auto px-4 sm:px-6 text-center">
            <div
                class="inline-block px-4 py-1.5 sm:px-6 sm:py-2 
                        bg-orange-500 text-gray-900 font-black text-xs sm:text-sm uppercase tracking-widest 
                        border-3 sm:border-4 border-gray-900 
                        shadow-[6px_6px_0px_0px_rgba(17,24,39,1)]
                        rotate-[-1deg] mb-4">
                Bem-vindo de Volta!
            </div>

            <h1 class="text-3xl sm:text-4xl font-black text-gray-900 mb-2">
                Fazer Login
            </h1>

            <p class="text-sm sm:text-base text-gray-700 font-medium">
                Continue avaliando seus <span class="font-black text-gray-900">salgadinhos favoritos</span>
            </p>
        </div>
    </div>

    <div class="w-full py-8 sm:py-12 bg-white">
        <div class="max-w-md mx-auto px-4 sm:px-6">

            {{-- Mensagem de Erro Geral --}}
            @if ($errors->any())
                <div
                    class="mb-6 p-4 sm:p-5 bg-red-100 border-4 border-red-600 
                            shadow-[6px_6px_0px_0px_rgba(220,38,38,1)]">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-red-900 flex-shrink-0 mt-0.5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="text-sm sm:text-base font-black text-red-900 uppercase mb-1">
                                Ops! Algo deu errado
                            </p>
                            @foreach ($errors->all() as $error)
                                <p class="text-sm text-red-800 font-medium">• {{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            {{-- Mensagem de Sucesso (ex: após cadastro) --}}
            @if (session('success'))
                <div
                    class="mb-6 p-4 sm:p-5 bg-green-100 border-4 border-green-600 
                            shadow-[6px_6px_0px_0px_rgba(22,163,74,1)]">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-900 flex-shrink-0 mt-0.5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm sm:text-base font-bold text-green-900">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            @endif

            {{-- Formulário --}}
            <form method="POST" action="{{ route('login') }}"
                class="bg-amber-50 border-4 sm:border-6 border-gray-900 
                         shadow-[8px_8px_0px_0px_rgba(17,24,39,1)] sm:shadow-[12px_12px_0px_0px_rgba(17,24,39,1)]
                         p-6 sm:p-8 space-y-5 sm:space-y-6">

                @csrf

                {{-- Email --}}
                <div>
                    <label for="email"
                        class="block text-sm sm:text-base font-black text-gray-900 uppercase tracking-wide mb-2 sm:mb-3">
                        E-mail <span class="text-orange-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" required value="{{ old('email') }}"
                        placeholder="seu@email.com" autocomplete="email" autofocus
                        class="w-full px-4 py-3 sm:px-5 sm:py-4
                               bg-white text-gray-900 font-medium text-sm sm:text-base
                               border-4 sm:border-6 border-gray-900
                               focus:border-orange-500 focus:outline-none
                               shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                               focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                               transition-all duration-150
                               placeholder:text-gray-400
                               @error('email') border-red-600 @enderror">

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
                            autocomplete="current-password" placeholder="Digite sua senha"
                            class="w-full px-4 py-3 sm:px-5 sm:py-4 pr-12 sm:pr-14
                                   bg-white text-gray-900 font-medium text-sm sm:text-base
                                   border-4 sm:border-6 border-gray-900
                                   focus:border-orange-500 focus:outline-none
                                   shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                                   focus:shadow-[6px_6px_0px_0px_rgba(249,115,22,1)]
                                   transition-all duration-150
                                   placeholder:text-gray-400
                                   @error('password') border-red-600 @enderror">

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

                    @error('password')
                        <div class="mt-3 p-3 bg-red-100 border-4 border-red-600">
                            <p class="text-sm font-bold text-red-900">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- Lembrar-me e Esqueceu a senha --}}
                {{-- <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4">

                    <label class="flex items-center gap-2 sm:gap-3 cursor-pointer group">
                        <input type="checkbox" name="remember" id="remember"
                            class="w-4 h-4 sm:w-5 sm:h-5 
                                   border-3 sm:border-4 border-gray-900 
                                   text-orange-500 
                                   focus:ring-4 focus:ring-orange-300 
                                   focus:outline-none
                                   cursor-pointer
                                   rounded-sm
                                   transition-all">
                        <span class="text-sm sm:text-base text-gray-900 font-bold uppercase">
                            Lembrar-me
                        </span>
                    </label>

                    <a href="{{ route('password.request') }}"
                        class="text-sm sm:text-base font-bold text-gray-700 hover:text-orange-500 
                              border-b-2 border-gray-700 hover:border-orange-500 
                              transition-all uppercase inline-block">
                        Esqueceu a senha?
                    </a>
                </div> --}}

                {{-- Divisor --}}
                <div class="flex items-center justify-center gap-3 sm:gap-4 my-4 sm:my-6">
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-orange-400"></div>
                    <div class="w-1.5 sm:w-2 h-1.5 sm:h-2 bg-gray-900 rotate-45"></div>
                    <div class="w-12 sm:w-16 h-1.5 sm:h-2 bg-gray-900"></div>
                </div>

                {{-- Botão de Login --}}
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
                    Entrar
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>

            </form>

            {{-- Link para Cadastro --}}
            <div class="mt-6 sm:mt-8 text-center">
                <p class="text-sm sm:text-base text-gray-700 font-medium mb-4">
                    Ainda não tem uma conta?
                </p>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center gap-2
                          w-full sm:w-auto
                          bg-white text-gray-900 font-black text-sm sm:text-base uppercase tracking-wide
                          px-6 py-3 sm:px-8 sm:py-4 
                          border-4 sm:border-6 border-gray-900
                          shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]
                          hover:shadow-[2px_2px_0px_0px_rgba(17,24,39,1)]
                          hover:translate-x-[2px] hover:translate-y-[2px]
                          hover:bg-amber-50
                          transition-all duration-150">
                    Criar Conta Grátis
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </a>
            </div>

            {{-- Benefícios de criar conta --}}
            <div
                class="mt-8 sm:mt-10 p-4 sm:p-5 bg-white border-4 border-gray-900 
                        shadow-[4px_4px_0px_0px_rgba(17,24,39,1)]">
                <h3 class="text-sm sm:text-base font-black text-gray-900 uppercase mb-3 flex items-center gap-2">
                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Por que criar uma conta?
                </h3>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2 text-xs sm:text-sm text-gray-700 font-medium">
                        <span class="text-orange-500 font-black">•</span>
                        Comente e avalie salgadinhos
                    </li>
                    <li class="flex items-start gap-2 text-xs sm:text-sm text-gray-700 font-medium">
                        <span class="text-orange-500 font-black">•</span>
                        Salve seus favoritos
                    </li>
                    <li class="flex items-start gap-2 text-xs sm:text-sm text-gray-700 font-medium">
                        <span class="text-orange-500 font-black">•</span>
                        Participe da comunidade
                    </li>
                </ul>
            </div>

        </div>
    </div>

</x-layouts.main_layout>
