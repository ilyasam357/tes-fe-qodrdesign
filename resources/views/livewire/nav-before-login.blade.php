<nav x-data="{ open: false }" class="    ">
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


            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">



                {{-- button post --}}

                <a href="{{ route('login') }}"
                    class="ml-4 bg-white rounded-xl px-4 py-2  text-neutral_500 border border-green_500">
                    Sign in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 bg-green_500 rounded-xl px-4 py-2  text-white">Sign
                        up</a>
                @endif
            </div>


        </div>
    </div>


</nav>
