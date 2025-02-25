<?php

namespace App\Filament\Resources\AvailabilityResource\Pages;

use App\Filament\Resources\AvailabilityResource;
use App\Models\Availability;
use Filament\Actions;
use Filament\Resources\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Support\Carbon;

class CalendarView extends Page implements HasForms
{
    use InteractsWithForms;
    
    protected static string $resource = AvailabilityResource::class;

    protected static string $view = 'filament.resources.availability-resource.pages.calendar-view';
    
    public $month;
    public $year;
    public $currentDate;
    public $calendarData = [];
    public $selectedDate = null;
    public $status = null;
    public $note = null;
    
    public function mount(): void
    {
        $this->currentDate = Carbon::now();
        $this->month = $this->currentDate->month;
        $this->year = $this->currentDate->year;
        
        $this->loadCalendarData();
    }
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('view_table')
                ->label('Vizualizare Tabel')
                ->icon('heroicon-o-table-cells')
                ->url(static::getResource()::getUrl('index')),
        ];
    }
    
    public function previousMonth(): void
    {
        $this->currentDate->subMonth();
        $this->month = $this->currentDate->month;
        $this->year = $this->currentDate->year;
        
        $this->loadCalendarData();
    }
    
    public function nextMonth(): void
    {
        $this->currentDate->addMonth();
        $this->month = $this->currentDate->month;
        $this->year = $this->currentDate->year;
        
        $this->loadCalendarData();
    }
    
    public function loadCalendarData(): void
    {
        $startOfMonth = Carbon::createFromDate($this->year, $this->month, 1)->startOfMonth();
        $endOfMonth = Carbon::createFromDate($this->year, $this->month, 1)->endOfMonth();
        
        // Ziua săptămânii pentru prima zi a lunii (0 = Duminică, 1 = Luni, etc.)
        $firstDayOfWeek = $startOfMonth->dayOfWeek;
        // Ajustează pentru a începe cu luni (1 = Luni, 7 = Duminică)
        $firstDayOfWeek = $firstDayOfWeek === 0 ? 7 : $firstDayOfWeek;
        
        // Numărul de zile din luna curentă
        $daysInMonth = $endOfMonth->day;
        
        // Obține toate disponibilitățile pentru luna curentă
        $availabilities = Availability::whereBetween('date', [
            $startOfMonth->format('Y-m-d'),
            $endOfMonth->format('Y-m-d'),
        ])->get()->keyBy(function ($item) {
            return $item->date->format('Y-m-d');
        });
        
        $calendar = [];
        
        // Adaugă zilele din luna anterioară pentru a completa prima săptămână
        $prevMonth = Carbon::createFromDate($this->year, $this->month, 1)->subMonth();
        $daysInPrevMonth = $prevMonth->daysInMonth;
        $startPadding = $firstDayOfWeek - 1;
        
        for ($i = $startPadding; $i > 0; $i--) {
            $day = $daysInPrevMonth - $i + 1;
            $date = Carbon::createFromDate($prevMonth->year, $prevMonth->month, $day);
            
            $calendar[] = [
                'date' => $date,
                'day' => $day,
                'isCurrentMonth' => false,
                'isPast' => $date->isPast(),
                'status' => $this->getDateStatus($date, $availabilities),
            ];
        }
        
        // Adaugă zilele din luna curentă
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = Carbon::createFromDate($this->year, $this->month, $day);
            
            $calendar[] = [
                'date' => $date,
                'day' => $day,
                'isCurrentMonth' => true,
                'isPast' => $date->isPast(),
                'status' => $this->getDateStatus($date, $availabilities),
            ];
        }
        
        // Adaugă zilele din luna următoare pentru a completa ultima săptămână
        $cellsUsed = count($calendar);
        $cellsNeeded = ceil($cellsUsed / 7) * 7; // Rotunjește la cea mai apropiată multiplă de 7
        $remainingCells = $cellsNeeded - $cellsUsed;
        
        $nextMonth = Carbon::createFromDate($this->year, $this->month, 1)->addMonth();
        
        for ($day = 1; $day <= $remainingCells; $day++) {
            $date = Carbon::createFromDate($nextMonth->year, $nextMonth->month, $day);
            
            $calendar[] = [
                'date' => $date,
                'day' => $day,
                'isCurrentMonth' => false,
                'isPast' => $date->isPast(),
                'status' => $this->getDateStatus($date, $availabilities),
            ];
        }
        
        $this->calendarData = $calendar;
    }
    
    protected function getDateStatus($date, $availabilities)
    {
        $dateString = $date->format('Y-m-d');
        
        if (isset($availabilities[$dateString])) {
            return $availabilities[$dateString]->status;
        }
        
        return 'available'; // Implicit disponibil
    }
    
    public function selectDate($dateString)
    {
        $this->selectedDate = $dateString;
        
        // Caută disponibilitatea pentru data selectată
        $availability = Availability::where('date', $dateString)->first();
        
        if ($availability) {
            $this->status = $availability->status;
            $this->note = $availability->note;
        } else {
            $this->status = 'available';
            $this->note = null;
        }
        
        $this->editSelectedDateForm->fill([
            'status' => $this->status,
            'note' => $this->note,
        ]);
    }
    
    public function saveDate()
    {
        $data = $this->editSelectedDateForm->getState();
        
        Availability::updateOrCreate(
            ['date' => $this->selectedDate],
            [
                'status' => $data['status'],
                'note' => $data['note'],
            ]
        );
        
        $this->loadCalendarData();
        $this->selectedDate = null;
    }
    
    public function cancelEdit()
    {
        $this->selectedDate = null;
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Editare disponibilitate')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'available' => 'Disponibil',
                                'reserved' => 'Rezervat',
                                'unavailable' => 'Indisponibil',
                            ])
                            ->default('available')
                            ->required(),
                            
                        Forms\Components\Textarea::make('note')
                            ->label('Notă')
                            ->placeholder('Adaugă o notă opțională')
                            ->maxLength(500),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }
    
    public function editSelectedDateForm(): Form
    {
        return $this->makeForm()
            ->schema([
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Disponibil',
                        'reserved' => 'Rezervat',
                        'unavailable' => 'Indisponibil',
                    ])
                    ->default('available')
                    ->required(),
                    
                Forms\Components\Textarea::make('note')
                    ->label('Notă')
                    ->placeholder('Adaugă o notă opțională')
                    ->maxLength(500),
            ]);
    }
}