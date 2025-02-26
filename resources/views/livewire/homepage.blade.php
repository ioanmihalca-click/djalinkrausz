<div>
    <!-- Hero Section cu Video Background -->
    <section class="relative w-full h-screen overflow-hidden">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video class="object-cover w-full h-full filter brightness-75" autoplay loop muted playsinline>
                <source src="{{ asset('assets/video-bg.mp4') }}" type="video/mp4">
            </video>
            <!-- Overlay-uri pentru contrast text -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-8 text-white">
            <div class="relative">
                <h1 class="mb-4 text-5xl font-extrabold tracking-wider text-center md:text-7xl xl:text-8xl">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-white to-indigo-200">DJ
                        ALIN</span>
                    <span class="relative inline-block">
                        <span class="text-indigo-400">KRAUSZ</span>
                        <span
                            class="absolute rounded-lg -inset-1 -z-10 opacity-30 bg-gradient-to-r from-indigo-600 to-purple-600 blur-xl animate-pulse"></span>
                    </span>
                </h1>
            </div>

            <p class="max-w-2xl mb-10 text-xl font-light text-center text-gray-200 md:text-2xl">
                Experiențe muzicale de neuitat pentru
                <span class="relative inline-block">
                    <span class="font-medium text-indigo-300">evenimente speciale</span>
                    <span
                        class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></span>
                </span>
            </p>
            <div class="flex flex-col gap-4 sm:flex-row">
                <a href="{{ url('/contact') }}" wire:navigate
                    class="relative px-8 py-4 overflow-hidden font-bold text-center text-white transition-all duration-300 rounded-full group hover:scale-105">
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 bg-gradient-to-br from-indigo-600 via-indigo-500 to-purple-700"></span>
                    <span
                        class="absolute bottom-0 right-0 block w-64 h-64 mb-32 mr-4 transition-all duration-500 origin-bottom-left transform rotate-45 translate-x-24 bg-pink-500 rounded-full opacity-30 group-hover:rotate-90 ease"></span>
                    <span class="relative flex items-center justify-center">
                        Booking
                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>
                <a href="{{ url('/galerie') }}" wire:navigate
                    class="px-8 py-4 font-bold text-center text-white transition-all duration-300 bg-transparent border-2 rounded-full border-white/70 hover:bg-white/10 hover:border-indigo-400 hover:text-indigo-300 hover:scale-105">
                    <span class="flex items-center justify-center">
                        Galerie Media
                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute z-10 transform -translate-x-1/2 bottom-10 left-1/2">
            <a href="#about" class="flex flex-col items-center transition-colors text-white/80 hover:text-white">

                <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="flex flex-col items-center gap-16 lg:flex-row">
                <div class="relative lg:w-1/2 group">
                    <div
                        class="absolute transition-all duration-300 -inset-1 bg-gradient-to-r from-green-500 via-indigo-500 to-purple-600 rounded-xl opacity-70 blur-md group-hover:opacity-100">
                    </div>
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="{{ asset('assets/djalinkrausz.jpg') }}" alt="DJ Alin Krausz"
                            class="relative z-10 w-full h-auto transition-all duration-500 transform shadow-2xl rounded-xl group-hover:scale-105">
                        <div
                            class="absolute inset-0 z-10 bg-gradient-to-t from-black/80 via-transparent to-transparent">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative inline-block mb-6">
                        <h2
                            class="text-3xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                            Despre Mine
                        </h2>
                        <div class="w-32 h-1 mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                    </div>
                    <p class="mb-6 text-lg leading-relaxed text-gray-300">
                        Cu peste 10 ani de experiență în industria muzicală, <span
                            class="font-medium text-indigo-300">DJ Alin Krausz</span> a devenit un nume de
                        referință pentru evenimentele premium. Specializat în crearea atmosferei perfecte pentru fiecare
                        eveniment, fie că este vorba despre nunți elegante, evenimente corporative sau festivaluri
                        energice.
                    </p>
                    <p class="mb-8 text-lg leading-relaxed text-gray-300">
                        Pasionat de muzică și mereu în pas cu cele mai noi tendințe, Alin combină stiluri diverse pentru
                        a crea experiențe muzicale memorabile care rămân în inimile publicului.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-8">
                        <div class="flex items-center p-3 rounded-lg bg-gray-800/60">
                            <div class="mr-3 text-indigo-400">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm">Nunți & Evenimente Private</span>
                        </div>
                        <div class="flex items-center p-3 rounded-lg bg-gray-800/60">
                            <div class="mr-3 text-indigo-400">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm">Cluburi & Festivaluri</span>
                        </div>
                        <div class="flex items-center p-3 rounded-lg bg-gray-800/60">
                            <div class="mr-3 text-indigo-400">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-sm">Evenimente Corporative</span>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="flex gap-6 mb-8">
                        <a href="https://www.facebook.com/p/DJ-Alin-Krausz-100063605225565/"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/djalinkrausz/"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@djalinkrausz"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="TikTok" target="_blank" rel="noopener noreferrer">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                            </svg>
                        </a>
                        <a href="https://vimeo.com/djalinkrausz"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Vimeo" target="_blank" rel="noopener noreferrer">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.4 7.16c-.09 2.03-1.51 4.8-4.24 8.32-2.84 3.68-5.23 5.52-7.19 5.52-1.21 0-2.24-1.12-3.08-3.36-.56-2.05-1.12-4.1-1.68-6.16-.62-2.24-1.29-3.36-2-3.36-.16 0-.7.33-1.63.98L1.5 7.85c1.03-.9 2.04-1.81 3.04-2.71C6.1 3.83 7.13 3.2 7.88 3.13c1.48-.14 2.39.87 2.72 3.03.37 2.33.62 3.77.76 4.34.42 1.91.88 2.87 1.39 2.87.39 0 .98-.62 1.77-1.86.79-1.24 1.21-2.18 1.27-2.83.11-1.07-.31-1.61-1.27-1.61-.45 0-.92.1-1.39.31 1.57-5.14 4.58-7.63 9.02-7.47 2.51.09 3.69 1.7 3.54 4.84" />
                            </svg>
                        </a>
                    </div>

                    <!-- Link către pagina Despre - modificat din buton în text link -->
                    <a href="{{ url('/despre') }}" wire:navigate
                        class="inline-flex items-center text-gray-300 transition-all duration-300 hover:text-indigo-400 group">
                        <span>Află mai multe despre mine</span>
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 transform group-hover:translate-x-2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>

                    <!-- Contact Links -->
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="{{ url('/contact') }}" wire:navigate
                            class="px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105">
                            Solicită o ofertă
                        </a>
                        <a href="tel:+40744212309"
                            class="flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-indigo-600/30 backdrop-blur-sm hover:bg-indigo-600/50 hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            0744 212 309
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Servicii Profesionale
                </h2>
                <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-4 text-gray-300">Ofer servicii complete de DJ pentru orice tip de
                    eveniment</p>
            </div>

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Card 1 -->
                <div class="relative group">
                    <div
                        class="absolute transition duration-500 opacity-75 bg-gradient-to-r from-purple-600/20 to-indigo-600/20 rounded-xl blur group-hover:opacity-100">
                    </div>
                    <div
                        class="relative p-8 transition-all duration-300 bg-gray-800/50 border border-gray-700/50 shadow-lg rounded-xl backdrop-blur-sm group-hover:translate-y-[-5px]">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-6 text-indigo-400 rounded-full bg-indigo-400/10">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-2xl font-bold">Evenimente Private</h3>
                        <p class="mb-4 text-gray-300">
                            Personalizez experiența muzicală perfect pentru nunți elegante, botezuri sau aniversări
                            speciale. Creez amintiri de neuitat!
                        </p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 transition duration-500 opacity-75 bg-gradient-to-r from-indigo-600/20 to-blue-600/20 rounded-xl blur group-hover:opacity-100">
                    </div>
                    <div
                        class="relative p-8 transition-all duration-300 bg-gray-800/50 border border-gray-700/50 shadow-lg rounded-xl backdrop-blur-sm group-hover:translate-y-[-5px]">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-6 text-indigo-400 rounded-full bg-indigo-400/10">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-2xl font-bold">Evenimente Corporative</h3>
                        <p class="mb-4 text-gray-300">
                            Creez atmosfera perfectă pentru evenimente corporate, lansări de produse și gale cu
                            mixuri
                            profesionale și echipament premium.
                        </p>

                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 transition duration-500 opacity-75 bg-gradient-to-r from-fuchsia-600/20 to-violet-600/20 rounded-xl blur group-hover:opacity-100">
                    </div>
                    <div
                        class="relative p-8 transition-all duration-300 bg-gray-800/50 border border-gray-700/50 shadow-lg rounded-xl backdrop-blur-sm group-hover:translate-y-[-5px]">
                        <div
                            class="flex items-center justify-center w-16 h-16 mb-6 text-indigo-400 rounded-full bg-indigo-400/10">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-2xl font-bold">Cluburi & Festivaluri</h3>
                        <p class="mb-4 text-gray-300">
                            Cu un repertoriu vast și experiență în cele mai bune locații, aduc energia perfectă
                            pentru
                            cluburi și evenimente în aer liber.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->

    <section id="testimonials" class="py-24 text-white bg-gradient-to-b from-black to-gray-900">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Ce Spun Clienții
                </h2>
                <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-4 text-gray-300">Feedbackuri de la clienții care au colaborat cu noi</p>
            </div>

            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @forelse($testimonials as $testimonial)
                    <!-- Testimonial Card - cu înălțime adaptivă -->
                    <div class="relative flex h-full">
                        <div
                            class="absolute inset-0 opacity-50 bg-gradient-to-r from-pink-500 to-indigo-600 rounded-2xl blur-sm">
                        </div>
                        <div
                            class="relative flex flex-col w-full p-8 border shadow-lg bg-gray-800/70 border-gray-700/50 rounded-xl backdrop-blur-sm">
                            <div class="absolute text-indigo-400 select-none -top-4 left-10 text-opacity-20">
                                <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>

                            <!-- Rating Stars -->
                            <div class="flex items-center mt-6 mb-6">
                                <div class="flex text-yellow-400">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5"
                                            fill="{{ $i <= $testimonial->rating ? 'currentColor' : 'none' }}"
                                            stroke="{{ $i <= $testimonial->rating ? 'currentColor' : 'currentColor' }}"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                            </div>

                            <!-- Testimonial Content - makes card expand -->
                            <p class="relative z-10 flex-grow mb-6 text-gray-300">
                                "{{ $testimonial->content }}"
                            </p>

                            <!-- Author Info - at bottom -->
                            <div class="pt-4 mt-auto border-t border-gray-700">
                                <h4 class="font-bold">{{ $testimonial->name }}</h4>
                                <p class="text-sm text-gray-400">
                                    @if ($testimonial->position && $testimonial->company)
                                        {{ $testimonial->position }}, {{ $testimonial->company }}
                                    @elseif($testimonial->position)
                                        {{ $testimonial->position }}
                                    @elseif($testimonial->company)
                                        {{ $testimonial->company }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- No testimonials message -->
                    <div class="py-10 text-center col-span-full">
                        <p class="text-lg text-gray-400">Nu există testimoniale disponibile în acest moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Calendar Events Section -->
    <section id="events" class="py-24 text-white bg-gradient-to-b from-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Calendar Evenimente
                </h2>
                <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-4 text-gray-300">Urmărește programul și apariții DJ-ului Alin Krausz</p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @forelse($events as $event)
                    <!-- Event Card -->
                    <div class="relative h-full group">
                        <div
                            class="absolute inset-0 transition-all duration-300 bg-gradient-to-r from-indigo-600/20 to-purple-600/20 rounded-xl blur-sm opacity-70 group-hover:opacity-100">
                        </div>
                        <div
                            class="relative flex flex-col h-full transition-all duration-300 bg-gray-800/50 border border-gray-700/50 shadow-lg rounded-xl backdrop-blur-sm group-hover:translate-y-[-5px]">
                            <!-- Card Header with Date -->
                            <div class="p-6 text-center bg-gradient-to-r from-indigo-500/30 to-purple-500/30">
                                <div class="text-sm font-medium text-gray-300">{{ $event->date->format('l') }}</div>
                                <div class="flex items-center justify-center gap-4">
                                    <span class="text-3xl font-bold text-white">{{ $event->date->format('d') }}</span>
                                    <span
                                        class="text-xl font-medium text-indigo-300">{{ $event->date->format('M, Y') }}</span>
                                </div>
                                <div class="mt-2 text-sm font-medium text-gray-300">
                                    {{ date('H:i', strtotime($event->time)) }}</div>
                            </div>

                            <!-- Card Body -->
                            <div class="flex flex-col flex-grow p-6">
                                <h3 class="mb-3 text-2xl font-bold text-white">{{ $event->title }}</h3>
                                <div class="flex items-start mb-3 text-gray-300">
                                    <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>{{ $event->location }}</span>
                                </div>

                                <p class="mb-6 text-gray-300">{{ $event->description }}</p>

                                <!-- Spacer to push button to bottom -->
                                <div class="flex-grow"></div>

                                <!-- Action Button -->
                                <a href="{{ url('/contact') }}" wire:navigate
                                    class="flex items-center justify-center w-full px-4 py-3 font-medium text-center text-white transition-all duration-300 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500">
                                    <span>Rezervă Loc</span>
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- No events message -->
                    <div class="py-10 text-center col-span-full">
                        <div
                            class="flex flex-col items-center p-8 border bg-gray-800/50 border-gray-700/50 rounded-xl">
                            <svg class="w-16 h-16 mb-4 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class="text-xl text-gray-400">Nu există evenimente programate în acest moment.</p>
                            <p class="mt-2 text-gray-500">Verifică mai târziu pentru actualizări sau contactează-ne
                                direct.</p>
                            <a href="{{ url('/contact') }}" wire:navigate
                                class="px-6 py-3 mt-6 font-medium text-white transition-all duration-300 rounded-lg bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500">
                                Contactează-ne
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>


</div>
</div>
