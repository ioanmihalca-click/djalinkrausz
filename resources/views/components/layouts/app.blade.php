<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'DJ Alin Krausz' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="text-white bg-black">
    <!-- Navigation Bar -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
        :class="{
            'bg-black/80 backdrop-blur-md shadow-lg': scrolled || mobileMenuOpen,
            'bg-transparent': !scrolled && !
                mobileMenuOpen
        }"
        class="fixed top-0 left-0 z-50 w-full transition-all duration-300">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo/Brand -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="flex items-center transition-all duration-300">
                        <!-- Logo ca text -->
                        <span class="font-sans text-3xl font-bold">
                            <span class="text-indigo-500 hover:text-indigo-400">dj</span>
                            <span class="font-medium text-gray-400 transition-colors duration-300 hover:text-white">
                                alin krausz</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="flex items-baseline ml-10 space-x-8">
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-white transition-colors hover:text-indigo-400">
                            Acasă
                        </a>
                        <a href="#about"
                            class="px-3 py-2 text-sm font-medium text-white transition-colors hover:text-indigo-400">
                            Despre
                        </a>
                        <a href="#gallery"
                            class="px-3 py-2 text-sm font-medium text-white transition-colors hover:text-indigo-400">
                            Galerie
                        </a>
                        <a href="#testimonials"
                            class="px-3 py-2 text-sm font-medium text-white transition-colors hover:text-indigo-400">
                            Testimoniale
                        </a>
                        <a href="#contact"
                            class="px-4 py-2 text-sm font-medium text-white transition-colors bg-indigo-600 rounded-full hover:bg-indigo-700">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 text-white rounded-md hover:text-indigo-400 hover:bg-gray-800/50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Deschide meniul principal</span>
                        <!-- Icon when menu is closed -->
                        <svg x-show="!mobileMenuOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icon when menu is open -->
                        <svg x-show="mobileMenuOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95" class="md:hidden bg-gray-900/80 backdrop-blur-md"
            id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Acasă
                </a>
                <a href="#about"
                    class="block px-3 py-2 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Despre
                </a>
                <a href="#gallery"
                    class="block px-3 py-2 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Galerie
                </a>
                <a href="#testimonials"
                    class="block px-3 py-2 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Testimoniale
                </a>
                <a href="#contact"
                    class="block px-3 py-2 mt-4 text-base font-medium text-white transition-colors bg-indigo-600 rounded-md hover:bg-indigo-700">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Scripts -->
    @livewireScripts
</body>

</html>
