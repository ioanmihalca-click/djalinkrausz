<div class="relative w-full max-w-xl mx-auto">
    <!-- Month Selector -->
    <div class="grid grid-cols-3 gap-4 mb-6">
        @foreach ($months as $monthData)
            <button wire:click="changeMonth({{ $monthData['month'] }}, {{ $monthData['year'] }})"
                class="flex flex-col items-center justify-center p-4 rounded-lg transition-all duration-300 {{ $monthData['isActive'] ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg' : 'bg-gray-800/50 text-gray-300 hover:text-white backdrop-blur-sm' }}">
                <span class="text-lg font-bold">{{ $monthData['name'] }}</span>
                <span class="text-2xl font-extrabold">{{ $monthData['year'] }}</span>
            </button>
        @endforeach
    </div>

    <!-- Days of Week Header -->
    <div class="grid grid-cols-7 mb-2 text-sm text-center text-white">
        <div class="py-2">Lu</div>
        <div class="py-2">Ma</div>
        <div class="py-2">Mi</div>
        <div class="py-2">Jo</div>
        <div class="py-2">Vi</div>
        <div class="py-2">Sâ</div>
        <div class="py-2">Du</div>
    </div>

    <!-- Calendar Grid -->
    <div class="grid grid-cols-7 gap-1 sm:gap-2">
        @foreach ($calendarData as $day)
            <div class="aspect-square relative {{ $day['isCurrentMonth'] ? '' : 'opacity-30' }}">
                <!-- Day Cell -->
                <div
                    class="absolute inset-0 flex items-center justify-center rounded-md {{ $day['status'] === 'reserved' ? 'bg-red-600/80' : ($day['status'] === 'unavailable' ? 'bg-gray-800/80' : ($day['isCurrentMonth'] ? 'bg-indigo-600/30' : 'bg-gray-800/50')) }} backdrop-blur-sm">
                    <span
                        class="text-xs sm:text-base md:text-lg font-bold {{ $day['status'] === 'reserved' ? 'text-white' : 'text-white' }}">
                        {{ $day['day'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Legend -->
    <div class="flex flex-wrap justify-between mt-6">
        <div class="flex items-center mt-2">
            <div class="w-4 h-4 mr-2 rounded-full bg-indigo-600/30"></div>
            <span class="text-xs text-white sm:text-sm">Disponibil</span>
        </div>
        <div class="flex items-center mt-2">
            <div class="w-4 h-4 mr-2 rounded-full bg-red-600/80"></div>
            <span class="text-xs text-white sm:text-sm">Rezervat</span>
        </div>
        <div class="flex items-center mt-2">
            <div class="w-4 h-4 mr-2 rounded-full bg-gray-800/80"></div>
            <span class="text-xs text-white sm:text-sm">Indisponibil</span>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="flex justify-center mt-8">
        <a href="{{ url('/contact') }}" wire:navigate
            class="px-8 py-4 font-bold text-white transition-all duration-300 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 hover:shadow-lg hover:shadow-indigo-500/30 hover:scale-105">
            Rezervă acum
            <svg class="inline-block w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</div>
