<?php

namespace App\Filament\Resources\AvailabilityResource\Pages;

use App\Filament\Resources\AvailabilityResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAvailabilities extends ManageRecords
{
    protected static string $resource = AvailabilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('calendar_view')
                ->label('Vizualizare Calendar')
                ->icon('heroicon-o-calendar')
                ->url(static::getResource()::getUrl('calendar')),
        ];
    }
}