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
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-white to-indigo-200">Despre</span>
                    <span class="relative inline-block">
                        <span class="text-indigo-400">Mine</span>
                        <span
                            class="absolute rounded-lg -inset-1 -z-10 opacity-30 bg-gradient-to-r from-indigo-600 to-purple-600 blur-xl animate-pulse"></span>
                    </span>
                </h1>
            </div>

            <p class="max-w-2xl mb-10 text-xl font-light text-center text-gray-200 md:text-2xl">
                Pasiune, talent și profesionalism
                <span class="relative inline-block">
                    <span class="font-medium text-indigo-300">în lumea muzicii</span>
                    <span
                        class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></span>
                </span>
            </p>

            <!-- Scroll Down Indicator -->
            <div class="absolute transform -translate-x-1/2 bottom-10 left-1/2">
                <a href="#biografia"
                    class="flex flex-col items-center transition-colors text-white/80 hover:text-white">
                    <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Biografia Section -->
    <section id="biografia" class="py-24 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container max-w-4xl px-8 mx-auto">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Biografie
                </h2>
                <div class="w-24 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
            </div>

            <div class="space-y-8 text-lg leading-relaxed text-gray-300">
                <p>
                    Alin Krausz este un DJ pasionat, talentat, profesionist și foarte cunoscut în peisajul muzical din
                    Cluj-Napoca și din întreaga regiune a Transilvaniei. Si-a început cariera în 2004 reușind să se
                    impună pe scena muzicală datorită mixurilor sale energice și diversității stilurilor muzicale pe
                    care le abordează, dovedind că pasiunea te aduce aproape de sufletul și dorințele publicului.
                </p>

                <p>
                    Este apreciat pentru abilitatea sa de a citi publicul, de a se adapta și de a crea o atmosferă
                    electrizantă.
                </p>

                <p>
                    Alin Krausz este cunoscut pentru colaborările cu artiști și muzicieni de renume, cu care a reușit să
                    creeze momente muzicale unice. Evenimentele la care este prezent sunt mereu pline de energie și
                    atmosferă pozitivă, iar seturile sale sunt apreciate pentru fluiditatea și dinamismul cu care se
                    adaptează nevoilor publicului. Este un DJ complex, cu o tehnică de mixaj impresionantă, care poate
                    îmbina toate genurile muzicale, fiind cea mai potrivită alegere pentru nunți, petreceri private și
                    corporate.
                </p>

                <p>
                    De-a lungul carierei sale, Alin Krausz a câștigat un loc important în topul DJ-ilor din Cluj și din
                    întreaga regiune, continuând să surprindă și să încânte publicul cu fiecare apariție pe scenă.
                </p>

                <p>
                    Sonorizare cu echipamente profesionale, lumini de toate tipurile, gheață și artificii, MC, sunt doar
                    câteva dintre serviciile asigurate, care contribuie la atmosfera energică de la eveniment.
                </p>
            </div>

            <!-- Social Media Links -->
            <div class="flex justify-center mt-12 space-x-6">
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
        </div>
    </section>

    <!-- Experience Numbers -->
    <section class="py-20 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="relative p-8 text-center group">
                    <div
                        class="absolute inset-0 transition-opacity duration-300 opacity-25 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl blur-sm group-hover:opacity-40">
                    </div>
                    <div class="relative">
                        <div
                            class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">
                            10+</div>
                        <div class="mt-2 text-gray-300">Ani Experiență</div>
                    </div>
                </div>
                <div class="relative p-8 text-center group">
                    <div
                        class="absolute inset-0 transition-opacity duration-300 opacity-25 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl blur-sm group-hover:opacity-40">
                    </div>
                    <div class="relative">
                        <div
                            class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400">
                            1000+</div>
                        <div class="mt-2 text-gray-300">Evenimente</div>
                    </div>
                </div>
                <div class="relative p-8 text-center group">
                    <div
                        class="absolute inset-0 transition-opacity duration-300 opacity-25 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl blur-sm group-hover:opacity-40">
                    </div>
                    <div class="relative">
                        <div
                            class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">
                            100+</div>
                        <div class="mt-2 text-gray-300">Colaborări</div>
                    </div>
                </div>
                <div class="relative p-8 text-center group">
                    <div
                        class="absolute inset-0 transition-opacity duration-300 opacity-25 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl blur-sm group-hover:opacity-40">
                    </div>
                    <div class="relative">
                        <div
                            class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-400">
                            500+</div>
                        <div class="mt-2 text-gray-300">Clienți Mulțumiți</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills & Services -->
    <section class="py-20 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2
                    class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">
                    Specializări & Abilități
                </h2>
                <div class="w-32 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-4 text-gray-300">Experiență vastă în diverse stiluri și tipuri de
                    evenimente</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Skill Card 1 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Diversitate Muzicală</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Capacitatea de a mixa toate genurile muzicale, de la muzică
                        comercială și românească la house, techno și hits internaționale.</p>
                </div>

                <!-- Skill Card 2 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Interacțiune cu Publicul</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Abilitatea de a citi atmosfera și de a se adapta perfect la publicul
                        prezent, menținând energia evenimentului.</p>
                </div>

                <!-- Skill Card 3 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">MC & Prezentare</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Servicii complete de MC pentru nunți și evenimente, coordonând
                        perfect momentele importante ale evenimentului.</p>
                </div>

                <!-- Skill Card 4 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Echipamente Profesionale</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Sonorizare de înaltă calitate, sisteme de lumini și efecte speciale
                        pentru evenimente memorabile.</p>
                </div>

                <!-- Skill Card 5 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Experiență în Evenimente</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Peste 1000 de evenimente acoperite, de la nunți și petreceri private
                        la evenimente corporative și festivaluri.</p>
                </div>

                <!-- Skill Card 6 -->
                <div
                    class="relative p-6 transition-all duration-300 border bg-gradient-to-br from-gray-900/80 to-gray-800/80 hover:from-gray-900/90 hover:to-gray-800/90 rounded-xl backdrop-blur-sm border-gray-700/30 hover:border-indigo-500/30 hover:shadow-lg hover:shadow-indigo-500/10">
                    <div class="flex items-start mb-4">
                        <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-indigo-600/20">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Tehnici de Mixaj</h3>
                    </div>
                    <p class="pl-16 text-gray-400">Tehnici impresionante de mixaj și tranziții fluide între piese,
                        asigurând un flow perfect al muzicii.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 text-white bg-gradient-to-b from-black to-indigo-900">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="relative p-8 overflow-hidden rounded-2xl bg-gradient-to-r from-indigo-900/80 to-purple-900/80">
                <!-- Animated Background Shapes -->
                <div class="absolute top-0 right-0 hidden -mt-20 -mr-20 opacity-50 w-96 h-96 lg:block">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                        class="w-full h-full text-indigo-500 animate-blob">
                        <path fill="currentColor"
                            d="M45.4,-75.3C58.9,-67.9,70.1,-55.8,78.2,-41.6C86.4,-27.4,91.4,-11,90.1,4.7C88.8,20.5,81.1,35.6,70.3,47.7C59.4,59.9,45.4,69.2,30.1,74.8C14.8,80.4,-1.9,82.3,-18.2,79.3C-34.6,76.3,-50.6,68.3,-63.5,56.2C-76.3,44.1,-86,27.9,-88.6,10.4C-91.2,-7,-86.7,-25.8,-77.9,-41.2C-69.1,-56.6,-56,-68.7,-41.4,-75.4C-26.8,-82.1,-10.7,-83.4,3.9,-89.7C18.6,-96,36,-82.7,45.4,-75.3Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>
                <div class="absolute bottom-0 left-0 hidden -mb-40 -ml-40 w-96 h-96 opacity-30 lg:block">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                        class="w-full h-full text-purple-500 animate-blob animation-delay-2000">
                        <path fill="currentColor"
                            d="M54,-71.9C70.1,-62.2,83.9,-45.4,89.4,-26.5C94.9,-7.5,92.2,13.7,83.1,31.1C74,48.5,58.6,62.1,41.3,72.9C24.1,83.7,5,91.6,-14.2,90.5C-33.3,89.4,-52.4,79.2,-65.7,64.2C-79,49.2,-86.4,29.4,-88.7,8.8C-91,-11.8,-88.1,-33.2,-77.9,-49.4C-67.6,-65.6,-49.9,-76.4,-32.1,-81.7C-14.3,-86.9,3.8,-86.5,22.1,-82.6C40.4,-78.6,58.8,-71.1,54,-71.9Z"
                            transform="translate(100 100)" />
                    </svg>
                </div>

                <div class="relative z-10 flex flex-col items-center max-w-3xl mx-auto text-center">
                    <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">
                        Pregătit să creezi un eveniment de neuitat?
                    </h2>
                    <p class="mb-10 text-lg text-white/80">
                        Fie că planifici o nuntă, un eveniment corporate sau o petrecere privată,
                        sunt aici să transform evenimentul tău într-o experiență muzicală de neuitat.
                    </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="{{ url('/contact') }}" wire:navigate
                            class="px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105">
                            Solicită o ofertă
                        </a>
                        <a href="https://wa.me/40744212309"
                            class="flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-green-600/30 backdrop-blur-sm hover:bg-green-600/50 hover:scale-105"
                            target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
