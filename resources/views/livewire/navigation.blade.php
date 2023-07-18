<div class="min-h-full" x-data="{ responsiveMenu: false, searchBar: false, searchBarMobile: false }">
    <div class="h-12 px-1 mx-auto md:h-20 max-w-7xl sm:px-6 lg:px-8 dark:bg-gray-900">
        <div class="flex justify-between h-full">
            {{-- Logo --}}
            <div class="flex items-center gap-2">
                <img class="w-8 h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300" alt="Your Company">
                <h1 class="text-2xl font-bold text-black dark:text-gray-300">Adminin9</h1>
            </div>

            <div class="flex items-center justify-between gap-1 md:gap-8">
                {{-- Dark Mode --}}
                <button x-data @click="$store.darkMode.toggle()" id="btn-darkmode" class="flex items-center justify-end w-10 h-3 mr-3 transition duration-300 bg-gray-500 shadow md:w-12 md:h-4 rounded-2xl focus:outline-none">
                    <div class="w-6 h-6 p-1 text-white transition border shadow-lg duration-500 transform -rotate-[360deg] -translate-x-6 bg-yellow-500 rounded-full md:w-7 md:h-7" id="switch-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                    </div>
                </button>
                {{-- Social media --}}
                <div class="items-center hidden gap-2 md:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#66686b}</style><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>                    {{-- <img src="{{ asset('img/facebook.png') }}" alt=""> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#66686b}</style><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                </div>
                {{-- ButtonSearchBarMobile --}}
                <button x-on:click="searchBarMobile = true" type="button" class="items-center justify-center rounded-md md:hidden" aria-controls="mobile-menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
                {{-- ButtonResponsiveMenu --}}
                <button x-on:click="responsiveMenu = true" type="button" class="inline-flex max-w-xs p-1 rounded-full md:hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="gray" class="w-6 h-6">
                        <path :class="{'hidden': responsiveMenu, 'inline-flex': ! responsiveMenu }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        <path :class="{'hidden': ! responsiveMenu, 'inline-flex': responsiveMenu }" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- SearchBarMobile --}}
    <div class="inline px-4 md:hidden" id="mobile-menu" x-show="searchBarMobile" x-on:click.away="searchBarMobile = false">
        <div class="flex justify-end px-4">
            <input type="search" wire:model="search" id="default-search" class="block w-full p-2 pl-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required>
        </div>
        <div class="h-screen" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            @if ($search)
                <ul>
                    @foreach ($posts as $post)
                        <li class="px-4 py-2">
                            <a class="text-gray-700 text-md" role="menuitem" tabindex="-1" href="#">{{ $post->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
         </div>
    </div>
    {{-- ResponsiveMenu --}}
    <div x-show="responsiveMenu" x-on:click.away="responsiveMenu = false" class="w-full p-5 bg-white rounded-md shadow-lg dark:bg-gray-700 h-96" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
        <a href="#" class="block py-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-0">Sobre nosotros</a>
        <a href="#" class="block py-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-1">Contacto</a>
        <div class="mt-5 border-t">
            <p class="py-1 text-lg font-bold text-gray-500 dark:text-gray-300">Social</p>
            <div class="flex gap-2">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#66686b}</style><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>                    {{-- <img src="{{ asset('img/facebook.png') }}" alt=""> --}}</a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1.75em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#66686b}</style><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg></a>
            </div>
        </div>
        <div class="mt-5 border-t">
            <p class="py-1 text-lg font-bold text-gray-500 dark:text-gray-300">Admin Setting</p>
            @auth
            <a href="#" class="block p-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block p-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            @endauth
        </div>
    </div>

    <nav class="bg-[#fdfeff] dark:bg-gray-900">
        <div class="px-1 mx-auto max-w-7xl sm:px-6 lg:px-8 dark:bg-gray-900">
            {{-- Dividing bar --}}
            <div class="mx-auto border-t border-blue-100 max-w-7xl dark:border-gray-50"></div>
            {{-- NavBar --}}
            <div class="flex items-center justify-between h-12 md:h-16 md:flex-row">
                {{-- NavMenu--}}
                <div class="flex justify-center w-full overflow-x-auto md:justify-start">
                    <div class="flex gap-5">
                        <a href="{{ route('posts.index') }}" class="py-2 font-bold text-gray-500 dark:text-gray-300 hover:text-indigo-600">Home</a>
                        @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}" class="py-2 text-base font-bold text-gray-500 dark:text-gray-300 hover:text-indigo-600">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="flex">
                    {{-- SearchBar big screen  --}}
                    <div class="relative hidden lg:block">
                        <div class="z-20 origin-top-right" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <div>
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-300" aria-hidden="true"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" wire:model="search" id="default-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg borber w-96 bg-gray-5 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required>
                            </div>
                            <div class="absolute right-0 z-20 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg dark:bg-gray-700 min-w-max" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                @if ($search)
                                    <ul>
                                        @foreach ($posts as $post)
                                            <li class="px-4 py-2">
                                                <a href="#" class="text-base text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1">{{ $post->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- ButtonSearchBar md --}}
                    <button x-on:click="searchBar = true" type="button" class="items-center justify-center hidden p-2 rounded-md md:inline-block lg:hidden" aria-controls="mobile-menu" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                    {{-- HamburgherMenu --}}
                    <div class="items-center hidden md:flex" x-data="{ open: false }" class="z-50 w-full p-5 bg-white rounded-md shadow-lg dark:bg-gray-700 h-96">
                        <div class="relative">
                            <div>
                                <button x-on:click="open = true" type="button" class="flex items-center max-w-xs p-1 rounded-full" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="gray" class="w-8 h-8">
                                        <path :class="{'hidden': responsiveMenu, 'inline-flex': ! responsiveMenu }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                        <path :class="{'hidden': ! responsiveMenu, 'inline-flex': responsiveMenu }" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>                                
                                </button>
                            </div>
                            <div x-show="open" x-on:click.away="open = false" class="absolute right-0 z-50 p-5 mt-2 origin-top-right bg-white rounded-md shadow-lg dark:bg-gray-700 h-96 w-96 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block py-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-0">Sobre nosotros</a>
                                <a href="#" class="block py-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-1">Contacto</a>
                                <div class="mt-5 border-t">     
                                    @auth
                                    <p class="py-1 text-lg font-bold text-gray-500 dark:text-gray-300">Admin Setting</p>
                                    <a href="#" class="block p-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block p-2 text-base font-bold text-gray-500 dark:text-gray-300" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Dividing bar --}}
            <div class="mx-auto mb-2 border-t border-blue-100 max-w-7xl dark:border-gray-50"></div>
        </div>
    </nav>
    {{-- SearchBar md --}}
    <div class="hidden px-4 lg:hidden md:inline" id="mobile-menu" x-show="searchBar" x-on:click.away="searchBar = false">
        <div class="flex justify-end px-4">
            <input type="search" wire:model="search" id="default-search" class="block w-full p-2 pl-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required>
        </div>
        <div class="h-screen" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            @if ($search)
                <ul>
                    @foreach ($posts as $post)
                        <li class="px-4 py-2">
                            <a class="text-gray-700 text-md" role="menuitem" tabindex="-1" href="#">{{ $post->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
         </div>
    </div>
</div>
