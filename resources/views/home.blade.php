<x-app-layout>

    <div
        class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center    selection:bg-red-500 selection:text-white ">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    @slot('navigasi')
                        @livewire('navigation-menu')
                        @livewire('category')
                        {{-- main konten --}}
                        <div class="grid grid-cols-4 gap-8 px-16  py-8 justify-items-center">

                            @foreach ($desimg as $item)
                                <div class="gap-14 pb-5">
                                    <div class="">
                                        <div class="absolute mt-36 ml-6 bg-slate-300 hidden text-white   cursor-pointer">
                                            <p>Agency Website Design...</p>
                                        </div>
                                        <div class="">
                                            <img class="rounded-2xl w-72" src="{{ asset('build/assets/img/Image.png') }}"
                                                alt="">
                                        </div>

                                    </div>

                                    <div class="flex flex-row pt-4 items-center justify-between">
                                        <div class="flex gap-3">
                                            <img class="rounded-full w-6 "
                                                src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
                                            <h1 class="text-base not-italic font-semibold text-neutral_400">{{ $item }}
                                            </h1>
                                        </div>

                                        <a href="" class="bg-green_500 px-6 py-1 rounded-md text-neutral_100">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.66667 7.99984L8 11.3332M8 11.3332L11.3333 7.99984M8 11.3332V2.6665M4 13.3332H12"
                                                    stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <button class="mx-[608px] mt-20 mb-[120px]">
                            <a href="/"
                                class="w-14 bg-neutral_100 text-neutral_500 hover:bg-green_500 hover:text-white rounded-xl px-5 py-3 font-bold">
                                Load More
                            </a>
                        </button>
                    @endslot
                @else
                    @slot('navigasi')
                        <div class="  bg-no-repeat"
                            style="background-image: url('{{ asset('/build/assets/img/image 6.png') }}');">
                            @livewire('nav-before-login')
                            {{-- headline --}}
                            <div class="text-center text-[64px]  pt-20 pb-[216px]">
                                <h1 class="text-[#F2FCF9] font-extrabold leading-[64px] px-[117px]">Lorem Ipsum is simply dummy
                                    text of the
                                    printing and
                                    industry.</h1>
                                <p class="text-xl text-[#F7F7F7] font-semibold leading-7 pt-6 px-[196px]">Lorem Ipsum is simply
                                    dummy text
                                    of the
                                    printing
                                    and
                                    typesetting industry.
                                    Lorem Ipsum has
                                    been the industry's standard dummy text ever since the 1500s,</p>

                                {{-- button search --}}
                                <div class="relative mx-[350px] mt-20">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="search" id="search"
                                        class="flex  w-[652px]  h-10 p-4 pl-10 text-sm bg-white  border border-green_500 rounded-xl   dark:placeholder-gray-400 "
                                        placeholder="Search" required>
                                </div>
                            </div>
                        </div>
                        @livewire('category')
                        {{-- main konten --}}
                        <div class="grid grid-cols-4 gap-8 px-16  py-8 justify-items-center">

                            @foreach ($desimg as $item)
                                <div class="gap-14 pb-5">
                                    <div class="cursor-pointer">
                                        <div
                                            class="absolute mt-36 ml-6 bg-slate-600 hidden  hover:bg-slate-900   text-white   ">
                                            <p>Agency Website Design...</p>
                                        </div>
                                        <div class="">
                                            <img class="rounded-2xl w-72" src="{{ asset('build/assets/img/Image.png') }}"
                                                alt="">
                                        </div>

                                    </div>

                                    <div class="flex flex-row pt-4 items-center justify-between">
                                        <div class="flex gap-3">
                                            <img class="rounded-full w-6 "
                                                src="{{ asset('/build/assets/img/profil/Image.png') }}" alt="">
                                            <h1 class="text-base not-italic font-semibold text-neutral_400">{{ $item }}
                                            </h1>
                                        </div>

                                        <a href="" class="bg-green_500 px-6 py-1 rounded-md text-neutral_100">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.66667 7.99984L8 11.3332M8 11.3332L11.3333 7.99984M8 11.3332V2.6665M4 13.3332H12"
                                                    stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <button class="mx-[608px] mt-20 mb-[120px]">
                            <a href="/"
                                class="w-14 bg-neutral_100 text-neutral_500 hover:bg-green_500 hover:text-white rounded-xl px-5 py-3 font-bold">
                                Load More
                            </a>
                        </button>
                    @endslot

                @endauth
            </div>
        @endif
    </div>

</x-app-layout>
