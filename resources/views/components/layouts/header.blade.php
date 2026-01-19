<header class="w-full bg-gray-900 border-b-6 border-orange-500 shadow-[0_8px_0px_0px_rgba(251,146,60,0.3)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 sm:py-5 flex items-center justify-between gap-4">

        {{-- Logo / Título --}}
        <a href="/" class="group flex-shrink-0">
            <h1 class="text-xl sm:text-2xl font-black text-white tracking-tight uppercase flex items-center gap-2">
                <span
                    class="inline-block bg-orange-500 text-gray-900 px-2 py-1 sm:px-3 sm:py-1 border-3 sm:border-4 border-white rotate-[-2deg] group-hover:rotate-0 transition-transform">
                    SW
                </span>
                <span class="hidden sm:inline-block">
                    Salgadinhos Web
                </span>
            </h1>
        </a>

        {{-- Navegação e Ações de Usuário --}}
        <div class="flex items-center gap-3 sm:gap-6">
            
            {{-- Navegação Principal --}}
            <nav class="hidden md:flex gap-2 sm:gap-4">
                <a href="/"
                    class="px-3 py-2 sm:px-4 sm:py-2 font-bold text-xs sm:text-sm uppercase tracking-wide
                          text-white hover:text-gray-900
                          hover:bg-orange-400
                          border-3 border-transparent hover:border-white
                          transition-all duration-150
                          shadow-[4px_4px_0px_0px_rgba(251,146,60,0)] hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                          hover:translate-x-[-4px] hover:translate-y-[-4px]">
                    Home
                </a>
                <a href="/about"
                    class="px-3 py-2 sm:px-4 sm:py-2 font-bold text-xs sm:text-sm uppercase tracking-wide
                          text-white hover:text-gray-900
                          hover:bg-orange-400
                          border-3 border-transparent hover:border-white
                          transition-all duration-150
                          shadow-[4px_4px_0px_0px_rgba(251,146,60,0)] hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                          hover:translate-x-[-4px] hover:translate-y-[-4px]">
                    Sobre
                </a>
            </nav>

            {{-- User Actions --}}
            @auth
                {{-- Usuário Logado - Desktop --}}
                <div class="hidden sm:flex items-center gap-3 sm:gap-4" x-data="{ open: false }">
                    
                    {{-- User Info + Dropdown Toggle --}}
                    <div class="relative">
                        <button 
                            @click="open = !open"
                            @click.away="open = false"
                            class="flex items-center gap-2 sm:gap-3 px-3 py-2 sm:px-4 sm:py-2
                                   bg-orange-500 text-gray-900 font-bold text-xs sm:text-sm uppercase
                                   border-3 sm:border-4 border-white
                                   shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                                   hover:shadow-[2px_2px_0px_0px_rgba(255,255,255,1)]
                                   hover:translate-x-[2px] hover:translate-y-[2px]
                                   transition-all duration-150">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="hidden lg:inline-block max-w-[120px] truncate">{{ auth()->user()->name }}</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Dropdown Menu --}}
                        <div 
                            x-show="open"
                            x-transition
                            class="absolute right-0 mt-3 w-64 bg-white border-4 border-gray-900 
                                   shadow-[8px_8px_0px_0px_rgba(17,24,39,1)]
                                   z-50"
                            style="display: none;">
                            
                            {{-- User Info --}}
                            <div class="p-4 border-b-4 border-gray-900 bg-amber-50">
                                <p class="text-sm font-black text-gray-900 uppercase truncate">
                                    {{ auth()->user()->name }}
                                </p>
                                <p class="text-xs text-gray-600 font-medium truncate mt-1">
                                    {{ auth()->user()->email }}
                                </p>
                            </div>

                            {{-- Menu Items --}}
                            <div class="py-2">
                                <a href="{{ route('profile', ['user' => Auth::id()]) }}" 
                                   class="block px-4 py-3 text-sm font-bold text-gray-900 uppercase
                                          hover:bg-amber-50 transition-colors border-b-2 border-transparent hover:border-orange-500">
                                    Meu Perfil
                                </a>
                                <a href="/my-comments" 
                                   class="block px-4 py-3 text-sm font-bold text-gray-900 uppercase
                                          hover:bg-amber-50 transition-colors border-b-2 border-transparent hover:border-orange-500">
                                    Meus Comentários
                                </a>
                            </div>

                            {{-- Logout --}}
                            <div class="border-t-4 border-gray-900">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                            class="w-full px-4 py-3 text-sm font-black text-red-700 uppercase text-left
                                                   hover:bg-red-50 transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                        </svg>
                                        Sair
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Usuário Logado - Mobile --}}
                <div class="flex sm:hidden items-center gap-2 bg-red-500">
                    <a href="{{ route('profile', ['user' => Auth::id()]) }}"
                       class="p-2 bg-orange-500 text-gray-900 border-3 border-white
                              shadow-[3px_3px_0px_0px_rgba(255,255,255,1)]
                              hover:shadow-[1px_1px_0px_0px_rgba(255,255,255,1)]
                              hover:translate-x-[2px] hover:translate-y-[2px]
                              transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="p-2 bg-white text-red-700 border-3 border-white
                                       shadow-[3px_3px_0px_0px_rgba(255,255,255,1)]
                                       hover:shadow-[1px_1px_0px_0px_rgba(255,255,255,1)]
                                       hover:translate-x-[2px] hover:translate-y-[2px]
                                       transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </button>
                    </form>
                </div>

            @else
                {{-- Usuário NÃO Logado - Desktop --}}
                <div class="hidden sm:flex items-center gap-2 sm:gap-3">
                    <a href="{{ route('web.login') }}"
                       class="px-3 py-2 sm:px-4 sm:py-2 font-bold text-xs sm:text-sm uppercase tracking-wide
                              text-white hover:text-gray-900
                              hover:bg-orange-400
                              border-3 border-white
                              transition-all duration-150
                              shadow-[4px_4px_0px_0px_rgba(255,255,255,0)]
                              hover:shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                              hover:translate-x-[-4px] hover:translate-y-[-4px]">
                        Entrar
                    </a>

                    <a href="{{ route('web.register') }}"
                       class="px-3 py-2 sm:px-5 sm:py-2 font-black text-xs sm:text-sm uppercase tracking-wide
                              bg-orange-500 text-gray-900
                              border-3 sm:border-4 border-white
                              shadow-[4px_4px_0px_0px_rgba(255,255,255,1)]
                              hover:shadow-[2px_2px_0px_0px_rgba(255,255,255,1)]
                              hover:translate-x-[2px] hover:translate-y-[2px]
                              transition-all duration-150">
                        Cadastrar
                    </a>
                </div>

                {{-- Usuário NÃO Logado - Mobile --}}
                <div class="flex sm:hidden items-center gap-2">
                    <a href="{{ route('web.login') }}"
                       class="px-3 py-2 font-bold text-xs uppercase
                              text-white hover:text-gray-900
                              hover:bg-orange-400
                              border-3 border-white
                              transition-all duration-150">
                        Entrar
                    </a>

                    <a href="{{ route('web.register') }}"
                       class="px-4 py-2 font-black text-xs uppercase
                              bg-orange-500 text-gray-900
                              border-3 border-white
                              shadow-[3px_3px_0px_0px_rgba(255,255,255,1)]
                              hover:shadow-[1px_1px_0px_0px_rgba(255,255,255,1)]
                              hover:translate-x-[2px] hover:translate-y-[2px]
                              transition-all">
                        Cadastrar
                    </a>
                </div>
            @endauth

        </div>
    </div>

    {{-- Barra decorativa inferior --}}
    <div class="h-1 bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500"></div>
</header>