<x-filament::page>
    <div class="space-y-4">
        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow dark:bg-gray-800">
            <button wire:click="previousMonth"
                class="p-2 text-gray-500 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            <h2 class="text-lg font-semibold">
                {{ $currentDate->format('F Y') }}
            </h2>

            <button wire:click="nextMonth"
                class="p-2 text-gray-500 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="overflow-x-auto">
            <div class="inline-block min-w-full">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Lu</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Ma</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Mi</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Jo</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Vi</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Sâ</th>
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-100">
                                    Du</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-800">
                            @foreach (array_chunk($calendarData, 7) as $week)
                                <tr>
                                    @foreach ($week as $day)
                                        <td
                                            class="whitespace-nowrap {{ $day['isCurrentMonth'] ? '' : 'bg-gray-50 dark:bg-gray-900/50' }} 
                                            {{ $day['status'] === 'reserved' ? 'bg-red-50 dark:bg-red-900/20' : '' }}
                                            {{ $day['status'] === 'unavailable' ? 'bg-gray-100 dark:bg-gray-900/80' : '' }}
                                            border px-3 py-4 text-center text-sm">
                                            <button wire:click="selectDate('{{ $day['date']->format('Y-m-d') }}')"
                                                class="w-10 h-10 inline-flex items-center justify-center rounded-full
                                                {{ $day['isCurrentMonth'] ? 'text-gray-900 dark:text-gray-100' : 'text-gray-400 dark:text-gray-500' }} 
                                                {{ $day['isPast'] && $day['isCurrentMonth'] ? 'opacity-50' : '' }}
                                                {{ $day['status'] === 'available' && $day['isCurrentMonth'] ? 'hover:bg-indigo-100 dark:hover:bg-indigo-900/50' : '' }}
                                                {{ $day['status'] === 'reserved' && $day['isCurrentMonth'] ? 'bg-red-500 text-white hover:bg-red-600' : '' }}
                                                {{ $day['status'] === 'unavailable' && $day['isCurrentMonth'] ? 'line-through hover:bg-gray-200 dark:hover:bg-gray-700' : '' }}
                                                ">
                                                {{ $day['day'] }}
                                            </button>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Legend -->
        <div class="flex flex-wrap items-center justify-center mt-6 space-x-6">
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 bg-white border rounded-full"></div>
                <span class="text-sm text-gray-600 dark:text-gray-300">Disponibil</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                <span class="text-sm text-gray-600 dark:text-gray-300">Rezervat</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                <span class="text-sm text-gray-600 dark:text-gray-300">Indisponibil</span>
            </div>
        </div>

        @if ($selectedDate)
            <div class="p-4 mt-6 bg-white rounded-lg shadow dark:bg-gray-800">
                <h3 class="mb-4 text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">
                    Editare: {{ \Carbon\Carbon::parse($selectedDate)->format('d.m.Y') }}
                </h3>

                {{ $this->editSelectedDateForm }}

                <div class="flex mt-4 space-x-3">
                    <x-filament::button wire:click="saveDate">
                        Salvează
                    </x-filament::button>

                    <x-filament::button color="secondary" wire:click="cancelEdit">
                        Anulează
                    </x-filament::button>
                </div>
            </div>
        @endif
    </div>
</x-filament::page>
