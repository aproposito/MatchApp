<nav x-data="{ open: false }" class="bg-gray-900 border-b-2 border-red-600">
    < x-data="{ open: false }" class="bg-gray-900 border-b-2 border-red-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                {{-- Izquierda: Logo + enlaces --}}
                <div class="flex">
                    {{-- Logo --}}
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}" class="font-bebas text-3xl text-white tracking-wide">
                            Match<span class="text-red-600">App</span>
                        </a>
                    </div>

                    {{-- Enlaces principales --}}
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        @auth
                        <x-nav-link :href="route('matchday')" :active="request()->routeIs('matchday')">
                            Jornada
                        </x-nav-link>
                        <x-nav-link :href="route('match_predictions.index')" :active="request()->routeIs('match_predictions.index')">
                            Mis apuestas
                        </x-nav-link>
                        <x-nav-link :href="route('ranking')" :active="request()->routeIs('ranking')">
                            Ranking
                        </x-nav-link>
                        @if(auth()->user()->role === 'admin')
                        <x-nav-link :href="route('matches.index')" :active="request()->routeIs('matches.*')">
                            Gestión partidos
                        </x-nav-link>
                        <x-nav-link :href="route('teams.index')" :active="request()->routeIs('teams.*')">
                            Equipos
                        </x-nav-link>
                        <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
                            Usuarios
                        </x-nav-link>
                        @endif
                        @else
                        <x-nav-link :href="route('login')">
                            Iniciar sesión
                        </x-nav-link>
                        <x-nav-link :href="route('register')">
                            Registrarse
                        </x-nav-link>
                        @endauth
                    </div>
                </div>

                {{-- Derecha: Dropdown usuario --}}
                @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center gap-2 px-3 py-2 font-barlow font-bold text-sm uppercase tracking-wide text-white/70 hover:text-white bg-transparent focus:outline-none transition duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth

                {{-- Hamburger (móvil) --}}
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white/70 hover:text-white hover:bg-white/10 focus:outline-none transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        {{-- Menú responsive (móvil) --}}
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                @auth
                <x-responsive-nav-link :href="route('matchday')" :active="request()->routeIs('matchday')">
                    Jornada
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('match_predictions.index')" :active="request()->routeIs('match_predictions.index')">
                    Mis apuestas
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('ranking')" :active="request()->routeIs('ranking')">
                    Ranking
                </x-responsive-nav-link>
                @if(auth()->user()->role === 'admin')
                <x-responsive-nav-link :href="route('matches.index')" :active="request()->routeIs('matches.*')">
                    Gestión partidos
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('teams.index')" :active="request()->routeIs('teams.*')">
                    Equipos
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
                    Usuarios
                </x-responsive-nav-link>
                @endif
                @else
                <x-responsive-nav-link :href="route('login')">
                    Iniciar sesión
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    Registrarse
                </x-responsive-nav-link>
                @endauth
            </div>

            @auth
            <div class="pt-4 pb-1 border-t border-white/20">
                <div class="px-4">
                    <div class="font-barlow font-bold text-sm uppercase tracking-wide text-white">{{ Auth::user()->name }}</div>
                    <div class="font-noto text-xs text-white/50">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth
        </div>
</nav>