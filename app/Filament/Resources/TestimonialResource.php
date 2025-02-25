<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?string $navigationGroup = 'Conținut Site';

    protected static ?string $navigationLabel = 'Testimoniale';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informații Client')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nume')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('position')
                            ->label('Funcție/Poziție/Tip Eveniment')
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('company')
                            ->label('Companie/Locație')
                            ->maxLength(255),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Testimonial')
                    ->schema([
                        Forms\Components\Textarea::make('content')
                            ->label('Conținut testimonial')
                            ->required()
                            ->maxLength(1000)
                            ->rows(5)
                            ->columnSpanFull(),
                            
                        Forms\Components\Radio::make('rating')
                            ->label('Rating (stele)')
                            ->options([
                                1 => '1 stea',
                                2 => '2 stele',
                                3 => '3 stele',
                                4 => '4 stele',
                                5 => '5 stele',
                            ])
                            ->default(5)
                            ->required()
                            ->inline(),
                            
                        Forms\Components\Toggle::make('active')
                            ->label('Activ')
                            ->default(true),
                            
                        Forms\Components\TextInput::make('order')
                            ->label('Ordine de afișare')
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('initials')
                    ->label('')
                    ->formatStateUsing(fn (string $state): string => $state)
                    ->badge()
                    ->color('primary'),
                    
                Tables\Columns\TextColumn::make('name')
                    ->label('Nume')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('position')
                    ->label('Tip Eveniment/Funcție')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('company')
                    ->label('Locație/Companie')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('content')
                    ->label('Testimonial')
                    ->limit(50), // Filament va adăuga automat un tooltip 
                    
                Tables\Columns\TextColumn::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(fn (int $state): string => str_repeat('★', $state))
                    ->color('warning'),
                    
                Tables\Columns\ToggleColumn::make('active')
                    ->label('Activ'),
                    
                Tables\Columns\TextColumn::make('order')
                    ->label('Ordine')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('active')
                    ->label('Activ'),
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
            ->defaultSort('order', 'asc');
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}