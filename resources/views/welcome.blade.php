<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Portfolio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.5/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-white bg-black">
    <!-- Navigation -->
    <nav class="fixed z-50 w-full bg-black/80 backdrop-blur-md" x-data="{ isOpen: false }">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold">DJ Alin Krausz</div>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-baseline ml-10 space-x-4">
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium transition-colors rounded-md hover:text-purple-500">Acasă</a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium transition-colors rounded-md hover:text-purple-500">Evenimente</a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium transition-colors rounded-md hover:text-purple-500">Mix-uri</a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium transition-colors rounded-md hover:text-purple-500">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button @click="isOpen = !isOpen"
                        class="inline-flex items-center justify-center p-2 text-white rounded-md hover:text-purple-500 focus:outline-none">
                        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': isOpen, 'inline-flex': !isOpen }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !isOpen, 'inline-flex': isOpen }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div :class="{ 'block': isOpen, 'hidden': !isOpen }" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="block px-3 py-2 text-base font-medium transition-colors rounded-md hover:text-purple-500">Acasă</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium transition-colors rounded-md hover:text-purple-500">Evenimente</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium transition-colors rounded-md hover:text-purple-500">Mix-uri</a>
                <a href="#"
                    class="block px-3 py-2 text-base font-medium transition-colors rounded-md hover:text-purple-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative flex items-center justify-center h-screen overflow-hidden">
        <div class="absolute inset-0">
            <img src="assets/hero-image.webp" alt="DJ Alin Krausz" class="object-cover w-full h-full ">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-black/50"></div>
        </div>
        <div class="relative z-10 px-4 text-center">
            <h1 class="mb-4 text-5xl font-bold md:text-7xl animate-fade-in">DJ ALIN KRAUSZ</h1>
            <p class="mb-8 text-xl text-gray-300 md:text-2xl">Creează atmosfera perfectă pentru evenimentul tău</p>
            <a href="#contact"
                class="inline-block px-8 py-3 font-bold text-white transition-colors duration-300 bg-purple-600 rounded-full hover:bg-purple-700">
                Rezervă acum
            </a>
        </div>
    </div>

    <!-- About Section -->
    <section class="py-20 bg-black">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                    <img src="assets/djalinkrausz.jpg" alt="DJ Alin Krausz" class="rounded-lg shadow-2xl">
                </div>
                <div>
                    <h2 class="mb-6 text-4xl font-bold">Despre mine</h2>
                    <p class="mb-6 text-gray-300">Cu o experiență de peste [X] ani în industrie, aduc pasiune și energie
                        în fiecare eveniment. Specializat în [genuri muzicale], creez momente memorabile și mențin
                        atmosfera la cote maxime pe tot parcursul evenimentului.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-purple-500 hover:text-purple-400">
                            <i class="text-2xl fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-purple-500 hover:text-purple-400">
                            <i class="text-2xl fab fa-soundcloud"></i>
                        </a>
                        <a href="#" class="text-purple-500 hover:text-purple-400">
                            <i class="text-2xl fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-900">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-12 text-4xl font-bold text-center">Servicii</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="p-8 text-center bg-black rounded-lg">
                    <i class="mb-4 text-4xl text-purple-500 fas fa-glass-cheers"></i>
                    <h3 class="mb-4 text-xl font-bold">Evenimente Private</h3>
                    <p class="text-gray-300">Nunți, botezuri, aniversări și alte evenimente speciale personalizate
                        conform preferințelor tale.</p>
                </div>
                <div class="p-8 text-center bg-black rounded-lg">
                    <i class="mb-4 text-4xl text-purple-500 fas fa-music"></i>
                    <h3 class="mb-4 text-xl font-bold">Club/Festival</h3>
                    <p class="text-gray-300">Show-uri energice și set-uri memorabile pentru cluburi și festivaluri.</p>
                </div>
                <div class="p-8 text-center bg-black rounded-lg">
                    <i class="mb-4 text-4xl text-purple-500 fas fa-building"></i>
                    <h3 class="mb-4 text-xl font-bold">Evenimente Corporate</h3>
                    <p class="text-gray-300">Entertainment profesionist pentru evenimente corporate și team
                        building-uri.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-900">
        <div class="container px-4 mx-auto">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">TESTIMONIALE</h2>
                <p class="max-w-2xl mx-auto text-gray-400">Ce spun clienții despre experiențele lor</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="p-8 transition-all duration-300 transform bg-gray-800 shadow-lg rounded-xl hover:scale-105">
                    <div class="flex items-center mb-6">
                        <div class="mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white bg-indigo-500 rounded-full">
                                A
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white">Alex & Maria</h4>
                            <p class="text-gray-400">Nuntă, Septembrie 2023</p>
                        </div>
                    </div>
                    <p class="italic text-gray-300">"Alin a fost fantastic la nunta noastră! A știut exact cum să
                        creeze atmosfera perfectă - de la momentele emoționante până la petrecerea nebună de după.
                        Ringul de dans nu s-a golit nicio secundă!"</p>
                    <div class="flex mt-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="p-8 transition-all duration-300 transform bg-gray-800 shadow-lg rounded-xl hover:scale-105">
                    <div class="flex items-center mb-6">
                        <div class="mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white bg-purple-500 rounded-full">
                                C
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white">Catalina Events</h4>
                            <p class="text-gray-400">Lansare produs, Martie 2024</p>
                        </div>
                    </div>
                    <p class="italic text-gray-300">"Am colaborat cu Alin pentru lansarea produsului nostru și a fost
                        impecabil. Muzica a completat perfect evenimentul, iar feedback-ul de la invitați a fost
                        extraordinar. Cu siguranță vom colabora din nou!"</p>
                    <div class="flex mt-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-black">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-12 text-4xl font-bold text-center">Contact</h2>
            <div class="max-w-2xl mx-auto">
                <form x-data="{ success: false }" @submit.prevent="success = true">
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300">Nume</label>
                            <input type="text" id="name" name="name"
                                class="block w-full mt-1 text-white bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                            <input type="email" id="email" name="email"
                                class="block w-full mt-1 text-white bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300">Mesaj</label>
                            <textarea id="message" name="message" rows="4"
                                class="block w-full mt-1 text-white bg-gray-900 border-gray-700 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full px-6 py-3 font-bold text-white transition-colors duration-300 bg-purple-600 rounded-full hover:bg-purple-700">
                                Trimite mesaj
                            </button>
                        </div>
                    </div>
                    <div x-show="success" class="p-4 mt-4 bg-green-800 rounded-md">
                        <p class="text-center text-white">Mesajul a fost trimis cu succes!</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-black">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="text-gray-400">
                    © 2024 DJ NAME. Toate drepturile rezervate.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-purple-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-500">
                        <i class="fab fa-soundcloud"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-500">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Animații pentru scroll
        document.addEventListener('DOMContentLoaded', () => {
            gsap.from('.animate-fade-in', {
                opacity: 0,
                y: 50,
                duration: 1,
                ease: 'power2.out'
            });
        });
    </script>
</body>

</html>
