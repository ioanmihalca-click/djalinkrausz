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
            <div x-data="{
                selectedImage: null,
                images: [],
                currentIndex: 0,
                loading: true,
            
                init() {
                    this.images = Array.from(document.querySelectorAll('[data-gallery-image]')).map(img => img.getAttribute('src'));
                },
            
                next() {
                    this.loading = true;
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                    this.selectedImage = this.images[this.currentIndex];
                },
            
                prev() {
                    this.loading = true;
                    this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                    this.selectedImage = this.images[this.currentIndex];
                },
            
                setImage(url) {
                    this.loading = true;
                    this.selectedImage = url;
                    this.currentIndex = this.images.indexOf(url);
                }
            }" x-cloak class="{{ $activeTab === 'photo' ? 'block' : 'hidden' }}"
                @keydown.right.window="if(selectedImage) next()" @keydown.left.window="if(selectedImage) prev()">

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($photos as $photo)
                        <div class="relative overflow-hidden group rounded-xl aspect-square">
                            <img src="{{ $photo->image_url }}" alt="{{ $photo->title }}" data-gallery-image
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 flex flex-col justify-end p-6 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent group-hover:opacity-100">
                                <h3 class="text-xl font-bold">{{ $photo->title }}</h3>
                                @if ($photo->description)
                                    <p class="text-sm text-gray-300">{{ $photo->description }}</p>
                                @endif
                            </div>
                            <button @click="setImage('{{ $photo->image_url }}')"
                                class="absolute inset-0 w-full h-full cursor-zoom-in focus:outline-none">
                            </button>
                        </div>
                    @empty
                        <div class="py-10 text-center col-span-full">
                            <p class="text-xl text-gray-400">Nu există fotografii disponibile în acest moment.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Lightbox with navigation -->
                <div x-show="selectedImage" @click.away="selectedImage = null"
                    @keydown.escape.window="selectedImage = null"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90 backdrop-blur-sm"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                    <!-- Close button -->
                    <button @click="selectedImage = null"
                        class="absolute text-white top-4 right-4 hover:text-indigo-400 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    <!-- Previous button -->
                    <button @click="prev()"
                        class="absolute p-2 text-white transition-colors duration-300 rounded-full left-4 hover:bg-white/10 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Next button -->
                    <button @click="next()"
                        class="absolute p-2 text-white transition-colors duration-300 rounded-full right-4 hover:bg-white/10 focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>

                    <!-- Image container -->
                    <div class="relative flex items-center justify-center w-full h-full">
                        <img :src="selectedImage"
                            class="max-w-full max-h-[80vh] object-contain transition-opacity duration-300"
                            :class="{ 'opacity-0': loading }" @load="loading = false" alt="Imagine mărită">
                    </div>
                </div>
            </div>

            <!-- Video Gallery -->
            <div class="{{ $activeTab === 'video' ? 'block' : 'hidden' }}">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    @forelse ($videos as $video)
                        <div class="overflow-hidden rounded-xl bg-gray-800/30 backdrop-blur-sm">
                            <div class="relative aspect-video">
                                <iframe class="absolute inset-0 w-full h-full rounded-t-xl"
                                    src="{{ $video->youtube_url }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="p-4">
                                <h3 class="text-xl font-bold">{{ $video->title }}</h3>
                                @if ($video->description)
                                    <p class="mt-2 text-sm text-gray-300">{{ $video->description }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="py-10 text-center col-span-full">
                            <p class="text-xl text-gray-400">Nu există videoclipuri disponibile în acest moment.</p>
                        </div>
                    @endforelse
                </div>
                <div class="flex justify-center mt-16">
                    <a href="{{ url('/contact') }}" wire:navigate
                        class="px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105">
                        Contactează-mă
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
