<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    
    protected static ?string $navigationGroup = 'Conținut Site';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informații Eveniment')
                    ->schema([
                        TextInput::make('title')
                            ->label('Titlu Eveniment')
                            ->required()
                            ->maxLength(255),
                            
                        Textarea::make('description')
                            ->label('Descriere')
                            ->rows(4)
                            ->maxLength(500),
                            
                        TextInput::make('location')
                            ->label('Locație')
                            ->required()
                            ->maxLength(255),
                            
                        DatePicker::make('date')
                            ->label('Data Eveniment')
                            ->required()
                            ->displayFormat('d/m/Y')
                            ->closeOnDateSelection(),
                            
                        TimePicker::make('time')
                            ->label('Ora Eveniment')
                            ->required()
                            ->seconds(false),
                    ])->columns(2),
                
                Section::make('Setări')
                    ->schema([
                        Toggle::make('active')
                            ->label('Eveniment Activ')
                            ->default(true)
                            ->helperText('Doar evenimentele active vor fi afișate pe site'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Titlu Eveniment')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('location')
                    ->label('Locație')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('date')
                    ->label('Data')
                    ->date('d M Y')
                    ->sortable(),
                    
                TextColumn::make('time')
                    ->label('Ora')
                    ->time('H:i')
                    ->sortable(),
                    
                ImageColumn::make('image')
                    ->label('Imagine')
                    ->circular(),
                    
                ToggleColumn::make('active')
                    ->label('Activ'),
                    
                TextColumn::make('created_at')
                    ->label('Creat la')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                TextColumn::make('updated_at')
                    ->label('Actualizat la')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('upcoming')
                    ->label('Evenimente Viitoare')
                    ->query(fn (Builder $query): Builder => $query->where('date', '>=', now()->format('Y-m-d')))
                    ->toggle(),
                
                Filter::make('past')
                    ->label('Evenimente Trecute')
                    ->query(fn (Builder $query): Builder => $query->where('date', '<', now()->format('Y-m-d')))
                    ->toggle(),
                    
                SelectFilter::make('active')
                    ->label('Status')
                    ->options([
                        '1' => 'Activ',
                        '0' => 'Inactiv'
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('date', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}