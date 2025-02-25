<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryItemResource\Pages;
use App\Models\GalleryItem;
use App\Services\CloudinaryService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class GalleryItemResource extends Resource
{
    protected static ?string $model = GalleryItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Galerie';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informații Generale')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titlu')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Textarea::make('description')
                            ->label('Descriere')
                            ->maxLength(500)
                            ->columnSpanFull(),
                            
                        Forms\Components\Select::make('type')
                            ->label('Tip')
                            ->options([
                                'photo' => 'Fotografie',
                                'video' => 'Video'
                            ])
                            ->default('photo')
                            ->required()
                            ->live()
                            ->afterStateUpdated(fn (Forms\Set $set) => $set('youtube_url', null)),
                            
                        Forms\Components\Toggle::make('active')
                            ->label('Activ')
                            ->default(true),
                            
                        Forms\Components\TextInput::make('order')
                            ->label('Ordine de afișare')
                            ->numeric()
                            ->default(0),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Upload Fișier')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Imagine')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->directory('livewire-tmp') // Folosim directorul livewire-tmp pentru a evita probleme
                            ->disk('local') // Folosim local pentru a evita probleme cu vizibilitatea
                            ->visibility('private')
                            ->maxSize(5120) // 5MB
                            ->hidden(fn (Forms\Get $get) => $get('type') === 'video')
                            ->afterStateUpdated(function (Forms\Set $set, $state) {
                                if (!$state) return;
                                
                                if ($state instanceof TemporaryUploadedFile || (is_array($state) && !empty($state))) {
                                    try {
                                        $file = is_array($state) ? $state[0] : $state;
                                        
                                        // Așteptăm până când fișierul este complet încărcat
                                        if (!$file->isPreviewable()) {
                                            return;
                                        }
                                        
                                        // Folosește serviciul pentru a obține URL-ul imaginii
                                        $imageUrl = CloudinaryService::getImageUrl($file);
                                        
                                        if (!empty($imageUrl)) {
                                            $set('image_url', $imageUrl);
                                        }
                                    } catch (\Exception $e) {
                                        Log::error('Eroare la încărcarea imaginii: ' . $e->getMessage());
                                    }
                                }
                            }),
                            
                        Forms\Components\TextInput::make('youtube_url')
                            ->label('URL YouTube')
                            ->url()
                            ->maxLength(255)
                            ->hidden(fn (Forms\Get $get) => $get('type') === 'photo')
                            ->helperText('Introduceți URL-ul unui videoclip de pe YouTube (ex: https://www.youtube.com/watch?v=XXXXXXXXXXX)'),
                            
                        Forms\Components\TextInput::make('image_url')
                            ->label('URL Imagine')
                            ->disabled()
                            ->dehydrated(true)
                            ->hidden(fn (Forms\Get $get) => $get('type') === 'video' || !$get('image_url')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Imagine')
                    ->visibility('public')
                    ->square()
                    ->defaultImageUrl(fn (GalleryItem $record) => 
                        $record->type === 'video' 
                            ? 'https://placehold.co/600x600/252f3f/ffffff?text=YouTube+Video' 
                            : null
                    ),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label('Titlu')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('type')
                    ->label('Tip')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'photo' => 'success',
                        'video' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'photo' => 'Fotografie',
                        'video' => 'Video',
                        default => $state,
                    }),
                    
                Tables\Columns\ToggleColumn::make('active')
                    ->label('Activ'),
                    
                Tables\Columns\TextColumn::make('order')
                    ->label('Ordine')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creat la')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Tip')
                    ->options([
                        'photo' => 'Fotografie',
                        'video' => 'Video'
                    ]),
                
                Tables\Filters\TernaryFilter::make('active')
                    ->label('Activ'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (GalleryItem $record) {
                        if ($record->image_url) {
                            CloudinaryService::delete($record->image_url);
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function ($records) {
                            foreach ($records as $record) {
                                if ($record->image_url) {
                                    CloudinaryService::delete($record->image_url);
                                }
                            }
                        }),
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
            'index' => Pages\ListGalleryItems::route('/'),
            'create' => Pages\CreateGalleryItem::route('/create'),
            'edit' => Pages\EditGalleryItem::route('/{record}/edit'),
        ];
    }
}