<div>
    <!-- Header Section -->
    <section class="relative w-full min-h-[40vh] bg-gradient-to-b from-black via-gray-900 to-black flex items-center">
        <div class="absolute inset-0 z-0 bg-black/50"></div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-20">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(120,81,255,0.2)_0,_rgba(0,0,0,0)_50%)]">
            </div>
        </div>

        <!-- Content -->
        <div class="container relative z-10 px-8 pt-32 pb-16 mx-auto max-w-7xl">
            <div class="text-center">
                <h1
                    class="text-4xl font-extrabold text-transparent md:text-7xl bg-clip-text bg-gradient-to-r from-indigo-300 to-purple-400">
                    Galerie
                </h1>
                <div class="w-32 h-1 mx-auto mt-4 rounded-full bg-gradient-to-r from-indigo-400 to-purple-500"></div>
                <p class="max-w-2xl mx-auto mt-6 text-lg text-gray-300">
                    Imagini și videoclipuri din evenimentele mele
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Tabs Navigation -->
    <section class="py-8 text-white bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="container px-8 mx-auto max-w-7xl">
            <div class="flex justify-center mb-12">
                <div class="inline-flex p-1 rounded-lg bg-gray-800/50 backdrop-blur-sm">
                    <button wire:click="setTab('photo')"
                        class="px-8 py-3 text-base font-medium rounded-md transition-all duration-300 {{ $activeTab === 'photo' ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg' : 'text-gray-300 hover:text-white' }}">
                        Fotografii
                    </button>
                    <button wire:click="setTab('video')"
                        class="px-8 py-3 text-base font-medium rounded-md transition-all duration-300 {{ $activeTab === 'video' ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg' : 'text-gray-300 hover:text-white' }}">
                        Videoclipuri
                    </button>
                </div>
            </div>

            <!-- Photo Gallery -->
            <div x-data="{ selectedImage: null }" x-cloak class="{{ $activeTab === 'photo' ? 'block' : 'hidden' }}">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Photo Item 1 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-1.jpg') }}" alt="DJ Alin Krausz la un eveniment"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Nuntă la Castelul Bánffy</h3>
                            <p class="text-sm text-gray-300">O seară magică alături de invitați speciali</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-1.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>

                    <!-- Photo Item 2 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-2.jpg') }}" alt="DJ Alin Krausz în club"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Club Midi - Night Session</h3>
                            <p class="text-sm text-gray-300">Electronica vibes până în zori</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-2.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>

                    <!-- Photo Item 3 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-3.jpg') }}" alt="DJ Alin Krausz la festival"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Festival de Vară</h3>
                            <p class="text-sm text-gray-300">O experiență muzicală sub cerul liber</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-3.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>

                    <!-- Photo Item 4 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-4.jpg') }}" alt="DJ Alin Krausz la eveniment corporate"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Corporate Event</h3>
                            <p class="text-sm text-gray-300">Lansare de produs cu atmosferă premium</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-4.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>

                    <!-- Photo Item 5 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-5.jpg') }}" alt="DJ Alin Krausz la petrecere privată"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Petrecere Privată</h3>
                            <p class="text-sm text-gray-300">Atmosferă perfectă pentru o aniversare specială</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-5.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>

                    <!-- Photo Item 6 -->
                    <div class="relative overflow-hidden group rounded-xl aspect-square">
                        <img src="{{ asset('assets/gallery/photo-6.jpg') }}"
                            alt="Moment de la o nuntă cu DJ Alin Krausz"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                            <h3 class="text-xl font-bold">Nuntă de Vis</h3>
                            <p class="text-sm text-gray-300">Momente de neuitat pentru miri și invitați</p>
                        </div>
                        <button @click="selectedImage = 'assets/gallery/photo-6.jpg'"
                            class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none"></button>
                    </div>
                </div>

                <!-- Lightbox for image preview -->
                <div x-show="selectedImage" @click.away="selectedImage = null"
                    @keydown.escape.window="selectedImage = null"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90 backdrop-blur-sm"
                    x-transition>
                    <button @click="selectedImage = null"
                        class="absolute text-white top-4 right-4 hover:text-indigo-400 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <img :src="'{{ asset('') }}' + selectedImage" class="max-w-full max-h-[80vh] object-contain"
                        alt="Imagine mărită">
                </div>
            </div>

            <!-- Video Gallery -->
            <div class="{{ $activeTab === 'video' ? 'block' : 'hidden' }}">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <!-- Video Item 1 -->
                    <div class="overflow-hidden rounded-xl bg-gray-800/30 backdrop-blur-sm">
                        <div class="relative aspect-video">
                            <iframe class="absolute inset-0 w-full h-full rounded-t-xl"
                                src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Highlights Nuntă 2023</h3>
                            <p class="mt-2 text-sm text-gray-300">Cele mai frumoase momente de la evenimentele de nuntă
                            </p>
                        </div>
                    </div>

                    <!-- Video Item 2 -->
                    <div class="overflow-hidden rounded-xl bg-gray-800/30 backdrop-blur-sm">
                        <div class="relative aspect-video">
                            <iframe class="absolute inset-0 w-full h-full rounded-t-xl"
                                src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Club Mix Session</h3>
                            <p class="mt-2 text-sm text-gray-300">Set live din club cu energia la maxim</p>
                        </div>
                    </div>

                    <!-- Video Item 3 -->
                    <div class="overflow-hidden rounded-xl bg-gray-800/30 backdrop-blur-sm">
                        <div class="relative aspect-video">
                            <iframe class="absolute inset-0 w-full h-full rounded-t-xl"
                                src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Festival Summer Vibes</h3>
                            <p class="mt-2 text-sm text-gray-300">Momente memorabile de la festivalul de vară</p>
                        </div>
                    </div>

                    <!-- Video Item 4 -->
                    <div class="overflow-hidden rounded-xl bg-gray-800/30 backdrop-blur-sm">
                        <div class="relative aspect-video">
                            <iframe class="absolute inset-0 w-full h-full rounded-t-xl"
                                src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-bold">Corporate Party Mix</h3>
                            <p class="mt-2 text-sm text-gray-300">Atmosfera perfectă pentru un eveniment corporate de
                                succes</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16">
                <a href="#contact"
                    class="px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105">
                    Contactează-mă pentru evenimentul tău
                </a>
            </div>
        </div>
    </section>
</div>
