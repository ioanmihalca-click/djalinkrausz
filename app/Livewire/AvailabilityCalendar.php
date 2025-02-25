<?php

namespace App\Livewire;

use App\Models\Availability;
use Illuminate\Support\Carbon;
use Livewire\Component;

class AvailabilityCalendar extends Component
{
    public $month;
    public $year;
    public $currentDate;
    public $calendarData = [];
    public $months = [];
    
    public function mount($initialMonth = null, $initialYear = null)
    {
        // Inițializare cu luna curentă sau cu luna specificată
        $this->currentDate = Carbon::now();
        
        if ($initialMonth && $initialYear) {
            $this->currentDate->month($initialMonth)->year($initialYear);
        }
        
        $this->month = $this->currentDate->month;
        $this->year = $this->currentDate->year;
        
        // Generează următoarele 3 luni pentru selector
        $this->generateMonths();
        
        // Încarcă datele calendarului pentru luna curentă
        $this->loadCalendarData();
    }
    
    public function generateMonths()
    {
        $this->months = [];
        $startDate = Carbon::now()->startOfMonth();
        
        // Adaugă luna curentă și următoarele 2 luni
        for ($i = 0; $i < 3; $i++) {
            $date = $startDate->copy()->addMonths($i);
            $this->months[] = [
                'name' => ucfirst($date->translatedFormat('M')),
                'fullName' => ucfirst($date->translatedFormat('F')),
                'year' => $date->year,
                'month' => $date->month,
                'isActive' => ($date->month == $this->month && $date->year == $this->year),
            ];
        }
    }
    
    public function loadCalendarData()
    {
        $startOfMonth = Carbon::createFromDate($this->year, $this->month, 1)->startOfMonth();
        $endOfMonth = Carbon::createFromDate($this->year, $this->month, 1)->endOfMonth();
        
        // Ziua săptămânii pentru prima zi a lunii (0 = Duminică, 1 = Luni, etc.)
        $firstDayOfWeek = $startOfMonth->dayOfWeek;
        // Ajustează pentru a începe cu Luni (1 = Luni, 7 = Duminică)
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
                'date' => $date->format('Y-m-d'),
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
                'date' => $date->format('Y-m-d'),
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
                'date' => $date->format('Y-m-d'),
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
    
    public function changeMonth($month, $year)
    {
        $this->month = $month;
        $this->year = $year;
        
        $this->currentDate = Carbon::createFromDate($year, $month, 1);
        $this->generateMonths();
        $this->loadCalendarData();
    }
    
    public function render()
    {
        return view('livewire.availability-calendar');
    }
}