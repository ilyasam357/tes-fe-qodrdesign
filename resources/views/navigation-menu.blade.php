<nav x-data="{ open: false }" class="bg-white   ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-[64px]  py-7">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <div
                            class="logo flex bg-neutral_100 rounded-xl border border-neutral_300 px-5 py-3 text-black gap-2 items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.25 3.125H3.75C2.71447 3.125 1.875 3.96447 1.875 5V15C1.875 16.0355 2.71447 16.875 3.75 16.875H16.25C17.2855 16.875 18.125 16.0355 18.125 15V5C18.125 3.96447 17.2855 3.125 16.25 3.125Z"
                                    stroke="#656565" stroke-linejoin="round" />
                                <path
                                    d="M13.125 8.125C13.8154 8.125 14.375 7.56536 14.375 6.875C14.375 6.18464 13.8154 5.625 13.125 5.625C12.4346 5.625 11.875 6.18464 11.875 6.875C11.875 7.56536 12.4346 8.125 13.125 8.125Z"
                                    stroke="#656565" stroke-miterlimit="10" />
                                <path
                                    d="M11.875 13.1168L8.33359 9.58208C8.10824 9.35678 7.80535 9.22605 7.48684 9.21661C7.16832 9.20717 6.85822 9.31974 6.61992 9.5313L1.875 13.7501M8.75 16.8751L13.568 12.0571C13.7883 11.8363 14.0832 11.7059 14.3948 11.6914C14.7064 11.677 15.0121 11.7795 15.252 11.979L18.125 14.3751"
                                    stroke="#656565" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="font-sans text-neutral_500">
                                Logo
                            </span>
                        </div>
                    </a>

                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                {{-- search --}}
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search"
                        class="block w-72 h-10 p-4 pl-10 text-sm bg-white  border border-green_500 rounded-xl   dark:placeholder-gray-400 "
                        placeholder="Search" required>
                </div>
                {{-- button post --}}
                <a href="#" class=" ml-4 bg-green_500 rounded-xl px-4 py-2  text-white">
                    Post Design
                </a>
                <!-- Settings Dropdown -->
                <div class="ml-4 relative">
                    <x-dropdown align="right" width="336">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm  transition">
                                    <img class="rounded-full w-8 "
                                        src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center  py-2 ">
                                        <img class="rounded-full w-10 "
                                            src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
                                        {{-- {{ Auth::user()->name }} --}}

                                        {{-- <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg> --}}
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content" class="">
                            <!-- Account Management -->
                            {{-- profil user --}}
                            <div class="">
                                <a href="">
                                    <img class="rounded-full w-20 mt-10 mx-32 "
                                        src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
                                </a>

                                <h1 class="text-center mt-4 text-xl font-semibold mx-[89px] text-neutral_500">Muhammad
                                    yasir</h1>
                                <p class="text-center mt-2 text-sm font-normal mx-8 text-neutral_400">
                                    Brand / Graphic Design, UI / Visual Design, UX Design / Research
                                </p>
                            </div>
                            <hr class="w-[288px] h-[4px] mx-6 mt-6 mb-[62px] text-[#E9E9E9]">

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                <div class="flex gap-4 ml-6 items-center ">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_389_1766)">
                                            <path
                                                d="M9.16602 3.33301H3.33268C2.89065 3.33301 2.46673 3.5086 2.15417 3.82116C1.84161 4.13372 1.66602 4.55765 1.66602 4.99967V16.6663C1.66602 17.1084 1.84161 17.5323 2.15417 17.8449C2.46673 18.1574 2.89065 18.333 3.33268 18.333H14.9993C15.4414 18.333 15.8653 18.1574 16.1779 17.8449C16.4904 17.5323 16.666 17.1084 16.666 16.6663V10.833"
                                                stroke="#9A9A9A" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M15.416 2.0832C15.7475 1.75168 16.1972 1.56543 16.666 1.56543C17.1349 1.56543 17.5845 1.75168 17.916 2.0832C18.2475 2.41472 18.4338 2.86436 18.4338 3.3332C18.4338 3.80204 18.2475 4.25168 17.916 4.5832L9.99935 12.4999L6.66602 13.3332L7.49935 9.99986L15.416 2.0832Z"
                                                stroke="#9A9A9A" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_389_1766">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ __('Edit profile') }}
                                </div>

                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <hr class="w-[336px] h-[4px] mt-4 text-[#E9E9E9]">

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    <div class="flex gap-4 ml-6 items-center text-[#DC1818] mt-4 mb-7">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5"
                                                stroke="#DC1818" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M13.334 14.1663L17.5007 9.99967L13.334 5.83301" stroke="#DC1818"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 10H7.5" stroke="#DC1818" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                        {{ __('Log out') }}
                                    </div>

                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200 dark:border-gray-600"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200 dark:border-gray-600"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
