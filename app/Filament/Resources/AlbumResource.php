<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlbumResource\Pages;
use App\Models\Album;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class AlbumResource extends Resource
{
    protected static ?string $model = Album::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TitleWithSlugInput::make(
                    urlPath: '/albums/',
                    fieldTitle: 'title',
                    fieldSlug: 'slug',
                    titleLabel: 'Title',
                )
                    ->columnSpanFull(),

                // TextInput::make('title')
                //     ->required()
                //     ->autofocus()
                //     ->unique(ignoreRecord: true)
                //     ->placeholder('Enter an unique title for the album')
                //     ->columnSpanFull(),

                FileUpload::make('cover')
                    ->required()
                    ->image()
                    ->maxSize(1024)
                    ->directory('albums/covers'),

                Textarea::make('description')
                    ->required()
                    ->placeholder('Enter a description of the album')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('description')
                    ->limit(50),

                ImageColumn::make('cover'),

                TextColumn::make('galleries_count')
                    ->counts('galleries')
                    ->label('Photos count'),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListAlbums::route('/'),
            'create' => Pages\CreateAlbum::route('/create'),
            'edit' => Pages\EditAlbum::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationBadge(): ?string
    {
        return self::$model::count();
    }
}
