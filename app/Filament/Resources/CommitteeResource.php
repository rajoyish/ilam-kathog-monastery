<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommitteeResource\Pages;
use App\Models\Committee;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class CommitteeResource extends Resource
{
    protected static ?string $model = Committee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_roman')
                    ->label('Name')
                    ->required()
                    ->autofocus()
                    ->placeholder('Enter your name')
                    ->columnSpanFull(),

                TextInput::make('name_devanagari')
                    ->label('Name in Devanagari')
                    ->required()
                    ->placeholder('देवनागरी लिपिमा नाम लेख्नुहोस्')
                    ->columnSpanFull(),

                TextInput::make('designation')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('order')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->numeric()
                    ->placeholder('Order of Member')
                    ->columnSpanFull(),

                FileUpload::make('photo')
                    ->required()
                    ->image()
                    ->maxSize(1024)
                    ->directory('committees'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo'),

                TextColumn::make('name_roman')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name_devanagari')
                    ->label('Name in Devanagari')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('designation'),
                TextColumn::make('order'),

            ])->defaultSort('order', 'asc')
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
            'index' => Pages\ListCommittees::route('/'),
            'create' => Pages\CreateCommittee::route('/create'),
            'edit' => Pages\EditCommittee::route('/{record}/edit'),
        ];
    }
}
