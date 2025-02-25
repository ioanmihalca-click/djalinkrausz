<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvailabilityResource\Pages;
use App\Models\Availability;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AvailabilityResource extends Resource
{
    protected static ?string $model = Availability::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Disponibilitate Calendar';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')
                    ->label('Data')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->displayFormat('d.m.Y'),
                    
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
                    ->placeholder('Adaugă o notă opțională (ex: detalii despre rezervare)')
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->label('Data')
                    ->date('d.m.Y')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'available' => 'Disponibil',
                        'reserved' => 'Rezervat',
                        'unavailable' => 'Indisponibil',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'available' => 'success',
                        'reserved' => 'danger',
                        'unavailable' => 'gray',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('note')
                    ->label('Notă')
                    ->limit(50),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creat la')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Disponibil',
                        'reserved' => 'Rezervat',
                        'unavailable' => 'Indisponibil',
                    ]),
                    
                Tables\Filters\Filter::make('date')
                    ->form([
                        Forms\Components\DatePicker::make('date_from')
                            ->label('De la'),
                        Forms\Components\DatePicker::make('date_until')
                            ->label('Până la'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['date_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                            )
                            ->when(
                                $data['date_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    
                    Tables\Actions\BulkAction::make('bulk_set_status')
                        ->label('Schimbă status în masă')
                        ->icon('heroicon-o-calendar')
                        ->form([
                            Forms\Components\Select::make('status')
                                ->label('Status Nou')
                                ->options([
                                    'available' => 'Disponibil',
                                    'reserved' => 'Rezervat',
                                    'unavailable' => 'Indisponibil',
                                ])
                                ->required(),
                                
                            Forms\Components\Textarea::make('note')
                                ->label('Notă')
                                ->placeholder('Adaugă o notă opțională pentru toate înregistrările')
                                ->maxLength(500),
                        ])
                        ->action(function (array $records, array $data): void {
                            foreach ($records as $record) {
                                $record->update([
                                    'status' => $data['status'],
                                    'note' => $data['note'] ?? $record->note,
                                ]);
                            }
                        }),
                ]),
            ])
            ->defaultSort('date', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAvailabilities::route('/'),
            'calendar' => Pages\CalendarView::route('/calendar'),
        ];
    }
}