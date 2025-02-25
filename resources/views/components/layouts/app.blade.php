<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DJ Alin Krausz - Experiențe muzicale de neuitat pentru evenimente speciale">
    <meta name="keywords" content="dj, evenimente, nunți, petreceri, muzică, Cluj, România">

    <title>{{ $title ?? 'DJ Alin Krausz' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="DjAlinKrausz">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="DJ Alin Krausz">
    <meta property="og:description" content="Experiențe muzicale de neuitat pentru evenimente speciale">
    <meta property="og:image" content="{{ asset('assets/og-image.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="font-['Montserrat'] text-white bg-black antialiased">
    <!-- Navigation Bar -->
    <nav x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
        :class="{
            'bg-black/90 backdrop-blur-md shadow-lg': scrolled || mobileMenuOpen,
            'bg-transparent': !scrolled && !mobileMenuOpen
        }"
        class="fixed top-0 left-0 z-50 w-full transition-all duration-300">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo/Brand -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="flex items-center transition-all duration-300">
                        <!-- Logo ca text -->
                        <span class="font-sans text-3xl font-bold">
                            <span class="text-indigo-500 transition-colors duration-300 hover:text-indigo-400">dj</span>
                            <span class="font-medium text-gray-300 transition-colors duration-300 hover:text-white">
                                alin krausz</span>
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="flex items-center ml-10 space-x-8">
                        <a href="/" wire:navigate
                            class="px-3 py-2 text-sm font-medium text-white transition-all duration-300 border-b-2 border-transparent hover:text-indigo-400 hover:border-indigo-400">
                            Acasă
                        </a>
                        <a href="{{ url('/despre') }}" wire:navigate
                            class="px-3 py-2 text-sm font-medium text-white transition-all duration-300 border-b-2 border-transparent hover:text-indigo-400 hover:border-indigo-400">
                            Despre
                        </a>
                        <a href="#gallery"
                            class="px-3 py-2 text-sm font-medium text-white transition-all duration-300 border-b-2 border-transparent hover:text-indigo-400 hover:border-indigo-400">
                            Galerie
                        </a>
                        {{-- <a href="/#testimonials"
                            class="px-3 py-2 text-sm font-medium text-white transition-all duration-300 border-b-2 border-transparent hover:text-indigo-400 hover:border-indigo-400">
                            Testimoniale
                        </a> --}}
                        <a href="{{ url('/contact') }}" wire:navigate
                            class="px-6 py-2.5 text-sm font-medium text-white transition-all duration-500 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-full hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-0.5">
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
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            class="border-t border-gray-800 md:hidden bg-black/95 backdrop-blur-md" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" @click="mobileMenuOpen = false" wire:navigate
                    class="block px-3 py-3 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Acasă
                </a>
                <a href="{{ url('/despre') }}" @click="mobileMenuOpen = false" wire:navigate
                    class="block px-3 py-3 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Despre
                </a>
                <a href="#gallery" @click="mobileMenuOpen = false"
                    class="block px-3 py-3 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Galerie
                </a>
                {{-- <a href="/#testimonials" @click="mobileMenuOpen = false"
                    class="block px-3 py-3 text-base font-medium text-white transition-colors rounded-md hover:text-indigo-400 hover:bg-gray-800/50">
                    Testimoniale
                </a> --}}
                <a href="{{ url('/contact') }}" @click="mobileMenuOpen = false" wire:navigate
                    class="block px-4 py-3 mt-2 mb-2 text-base font-medium text-center text-white transition-all duration-300 rounded-md bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="py-10 bg-black border-t border-gray-800">
        <div class="container px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
                <div class="text-center md:text-left">
                    <span class="font-sans text-2xl font-bold">
                        <span class="text-indigo-500">dj</span>
                        <span class="font-medium text-gray-400">alin krausz</span>
                    </span>
                    <p class="mt-2 text-sm text-gray-400">© {{ date('Y') }} Toate drepturile rezervate.</p>
                    <p class="mt-1 text-xs text-gray-500">Made by <a href="https://clickstudios-digital.com"
                            class="text-indigo-400 transition-colors duration-300 hover:text-indigo-300"
                            target="_blank" rel="noopener noreferrer">Click Studios Digital</a></p>
                </div>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-indigo-400"
                        aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-indigo-400"
                        aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-indigo-400"
                        aria-label="Twitter">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors duration-300 hover:text-indigo-400"
                        aria-label="YouTube">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Helper links for accesibilitate -->
    <div class="fixed z-40 bottom-6 right-6">
        <a href="#"
            class="flex items-center justify-center w-12 h-12 text-white transition-all duration-300 bg-indigo-600 rounded-full shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            aria-label="Sus la pagină">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
            </svg>
        </a>
    </div>

    <!-- Scripts -->
    @livewireScripts
</body>

</html>
