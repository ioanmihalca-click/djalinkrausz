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
                {{-- <h1 class="mb-4 text-5xl font-bold tracking-wider text-center md:text-7xl animate-pulse">
                    DJ ALIN <span class="text-indigo-500">KRAUSZ</span>
                </h1> --}}
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
                <a href="#booking"
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
                <a href="#gallery"
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

                    <div class="flex gap-6">
                        <a href="#"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Facebook">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Instagram">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="Twitter">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="text-gray-400 transition-all duration-300 transform hover:text-indigo-400 hover:scale-110"
                            aria-label="YouTube">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                </path>
                            </svg>
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

    {{-- <!-- Gallery Section -->
    <section id="gallery" class="py-24 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Galerie Media
                </h2>
                <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-4 text-gray-300">Imagini și videoclipuri din evenimentele noastre</p>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Gallery Item 1 -->
                <div class="relative overflow-hidden group rounded-xl aspect-square">
                    <img src="{{ asset('assets/gallery-1.jpg') }}" alt="DJ Alin Krausz la eveniment"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                        <h3 class="text-xl font-bold">Nuntă la Castelul Bánffy</h3>
                        <p class="text-sm text-gray-300">O seară magică alături de invitați speciali</p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="relative overflow-hidden group rounded-xl aspect-square">
                    <img src="{{ asset('assets/gallery-2.jpg') }}" alt="DJ Alin Krausz în club"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                        <h3 class="text-xl font-bold">Club Midi - Night Session</h3>
                        <p class="text-sm text-gray-300">Electronica vibes până în zori</p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="relative overflow-hidden group rounded-xl aspect-square">
                    <img src="{{ asset('assets/gallery-3.jpg') }}" alt="DJ Alin Krausz la festival"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                        <h3 class="text-xl font-bold">Festival de Vară</h3>
                        <p class="text-sm text-gray-300">O experiență muzicală sub cerul liber</p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="relative overflow-hidden group rounded-xl aspect-square sm:col-span-2">
                    <div class="absolute inset-0 z-10 flex items-center justify-center bg-black/50">
                        <button
                            class="flex items-center justify-center w-20 h-20 text-white transition-colors rounded-full bg-indigo-600/80 hover:bg-indigo-600">
                            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </button>
                    </div>
                    <img src="{{ asset('assets/gallery-video.jpg') }}" alt="DJ Alin Krausz video"
                        class="object-cover w-full h-full">
                </div>

                <!-- Gallery Item 5 -->
                <div class="relative overflow-hidden group rounded-xl aspect-square">
                    <img src="{{ asset('assets/gallery-5.jpg') }}" alt="DJ Alin Krausz set"
                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                        <h3 class="text-xl font-bold">Corporate Event</h3>
                        <p class="text-sm text-gray-300">Lansare de produs cu atmosferă premium</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-all duration-300 bg-indigo-600 border border-transparent rounded-full hover:bg-indigo-700">
                    Vezi toată galeria
                    <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section> --}}

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
                <!-- Testimonial 1 -->
                <div class="relative">
                    <div
                        class="absolute inset-0 opacity-50 bg-gradient-to-r from-pink-500 to-indigo-600 rounded-2xl blur-sm">
                    </div>
                    <div
                        class="relative p-8 border shadow-lg bg-gray-800/70 border-gray-700/50 rounded-xl backdrop-blur-sm">
                        <div class="absolute text-indigo-400 select-none -top-4 left-10 text-opacity-20">
                            <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center mt-6 mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="relative z-10 mb-6 text-gray-300">
                            "Alin a fost fantastic la nunta noastră! A înțeles perfect ce ne dorim și a creat o
                            atmosferă
                            incredibilă. Ringul de dans a fost plin toată noaptea și toți invitații ne-au întrebat cum
                            l-am
                            găsit. Recomand cu încredere!"
                        </p>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <div
                                    class="flex items-center justify-center w-10 h-10 font-bold text-white bg-indigo-500 rounded-full">
                                    A
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold">Andreea & Mihai</h4>
                                <p class="text-sm text-gray-400">Nuntă, București</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="relative">
                    <div
                        class="absolute inset-0 opacity-50 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-2xl blur-sm">
                    </div>
                    <div
                        class="relative p-8 border shadow-lg bg-gray-800/70 border-gray-700/50 rounded-xl backdrop-blur-sm">
                        <div class="absolute text-indigo-400 select-none -top-4 left-10 text-opacity-20">
                            <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center mt-6 mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="relative z-10 mb-6 text-gray-300">
                            "Am colaborat cu Alin pentru evenimentul de lansare a produsului nostru și a fost impecabil.
                            A
                            înțeles perfect brieful, a venit cu sugestii excelente și a creat exact atmosfera pe care o
                            căutam. Cu siguranță vom lucra din nou împreună!"
                        </p>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <div
                                    class="flex items-center justify-center w-10 h-10 font-bold text-white bg-blue-500 rounded-full">
                                    AP
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold">Alexandru Popescu</h4>
                                <p class="text-sm text-gray-400">Event Manager, TechCorp</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="relative">
                    <div
                        class="absolute inset-0 opacity-50 bg-gradient-to-r from-purple-600 to-fuchsia-500 rounded-2xl blur-sm">
                    </div>
                    <div
                        class="relative p-8 border shadow-lg bg-gray-800/70 border-gray-700/50 rounded-xl backdrop-blur-sm">
                        <div class="absolute text-indigo-400 select-none -top-4 left-10 text-opacity-20">
                            <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex items-center mt-6 mb-6">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="relative z-10 mb-6 text-gray-300">
                            "DJ Alin Krausz a fost alegerea perfectă pentru clubul nostru. Are un simț deosebit pentru a
                            citi publicul și știe exact ce muzică să pună pentru a menține atmosfera la cote maxime.
                            Colaborarea cu el este mereu o plăcere!"
                        </p>
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <div
                                    class="flex items-center justify-center w-10 h-10 font-bold text-white bg-purple-500 rounded-full">
                                    EI
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold">Elena Ionescu</h4>
                                <p class="text-sm text-gray-400">Manager, Pulse Club</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="py-24 text-white bg-gradient-to-b from-black to-indigo-900">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
                <div>
                    <div class="relative z-10">
                        <h2 class="text-4xl font-extrabold md:text-5xl">
                            Pregătit pentru un <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">eveniment
                                de neuitat?</span>
                        </h2>
                        <div class="w-32 h-1 mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                        <p class="mt-6 text-lg text-gray-300">
                            Verifică disponibilitatea pentru data evenimentului tău și rezervă din timp pentru a
                            beneficia de cele mai bune oferte.
                        </p>
                        <div class="mt-8">
                            <a href="#contact"
                                class="inline-flex items-center px-8 py-4 text-base font-medium text-white transition-all duration-300 transform rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:-translate-y-1 hover:shadow-lg hover:shadow-indigo-500/30">
                                Rezervă acum
                                <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute -inset-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl opacity-70 blur-lg">
                    </div>
                    <div
                        class="relative p-6 border shadow-lg bg-gray-800/80 border-gray-700/50 rounded-xl backdrop-blur-sm">
                        <div class="grid grid-cols-3 gap-4">
                            <!-- Months -->
                            <div class="grid grid-cols-3 col-span-3 gap-4 mb-4">
                                <div
                                    class="py-2 font-semibold text-center text-white rounded-lg bg-gradient-to-br from-indigo-600 to-purple-600">
                                    <span class="text-xs opacity-75">IAN</span>
                                    <div class="text-2xl font-bold">2026</div>
                                </div>
                                <div class="py-2 font-semibold text-center text-white bg-gray-700 rounded-lg">
                                    <span class="text-xs opacity-75">FEB</span>
                                    <div class="text-2xl font-bold">2026</div>
                                </div>
                                <div class="py-2 font-semibold text-center text-white bg-gray-700 rounded-lg">
                                    <span class="text-xs opacity-75">MAR</span>
                                    <div class="text-2xl font-bold">2026</div>
                                </div>
                            </div>

                            <!-- Calendar Days - Quick Preview -->
                            <div class="p-4 rounded-lg bg-gray-700/70">
                                <div class="mb-2 text-xs text-center text-gray-400">Lu Ma Mi Jo Vi Sâ Du</div>
                                <div class="grid grid-cols-7 gap-2 text-xs text-center">
                                    <span class="opacity-50">26</span>
                                    <span class="opacity-50">27</span>
                                    <span class="opacity-50">28</span>
                                    <span class="opacity-50">29</span>
                                    <span class="opacity-50">30</span>
                                    <span class="opacity-50">31</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                    <span>4</span>
                                    <span>5</span>
                                    <span>6</span>
                                    <span>7</span>
                                    <span>8</span>
                                    <span>9</span>
                                    <span>10</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-indigo-600 rounded-full">11</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-indigo-600 rounded-full">12</span>
                                    <span>13</span>
                                    <span>14</span>
                                    <span>15</span>
                                </div>
                            </div>

                            <div class="p-4 rounded-lg bg-gray-700/70">
                                <div class="mb-2 text-xs text-center text-gray-400">Lu Ma Mi Jo Vi Sâ Du</div>
                                <div class="grid grid-cols-7 gap-2 text-xs text-center">
                                    <span class="opacity-50">30</span>
                                    <span class="opacity-50">31</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                    <span>4</span>
                                    <span>5</span>
                                    <span>6</span>
                                    <span>7</span>
                                    <span>8</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-red-600 rounded-full">9</span>
                                    <span>10</span>
                                    <span>11</span>
                                    <span>12</span>
                                    <span>13</span>
                                    <span>14</span>
                                    <span>15</span>
                                    <span>16</span>
                                    <span
                                        class="inline-flex items-center justify-center w-5 h-5 bg-indigo-600 rounded-full">17</span>
                                    <span>18</span>
                                    <span>19</span>
                                </div>
                            </div>

                            <div class="p-4 rounded-lg bg-gray-700/70">
                                <div class="mb-2 text-xs text-center text-gray-400">Lu Ma Mi Jo Vi Sâ Du</div>
                                <div class="grid grid-cols-7 gap-2 text-xs text-center">
                                    <span class="opacity-50">27</span>
                                    <span class="opacity-50">28</span>
                                    <span>1</span>
                                    <span>2</span>
                                    <span>3</span>
                                    <span>4</span>
                                    <span>5</span>
                                    <span>6</span>
                                    <span>7</span>
                                    <span>8</span>
                                    <span>9</span>
                                    <span>10</span>
                                    <span>11</span>
                                    <span>12</span>
                                    <span>13</span>
                                    <span>14</span>
                                    <span>15</span>
                                    <span>16</span>
                                    <span>17</span>
                                    <span>18</span>
                                    <span>19</span>
                                </div>
                            </div>

                            <!-- Legend & Actions -->
                            <div
                                class="flex flex-col items-center justify-between col-span-3 mt-4 space-y-4 md:flex-row md:space-y-0">
                                <div class="flex flex-wrap gap-4">
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 mr-2 bg-indigo-600 rounded-full"></div>
                                        <span class="text-sm">Disponibil</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 mr-2 bg-red-600 rounded-full"></div>
                                        <span class="text-sm">Rezervat</span>
                                    </div>
                                </div>

                                <a href="#contact"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white transition-all duration-300 bg-indigo-600 rounded-lg hover:bg-indigo-700">
                                    Vezi toată agenda
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
</div>
