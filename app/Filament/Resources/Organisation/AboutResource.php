<?php

namespace App\Filament\Resources\Organisation;

use App\Filament\Resources\Organisation\AboutResource\Pages;
use App\Filament\Resources\Organisation\AboutResource\RelationManagers;
use App\Models\Organisation\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Organisation';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()
                        ->schema([


                            Forms\Components\TextInput::make('content_title')
                                ->required()
                                ->reactive(),

                            Forms\Components\MarkdownEditor::make('content')
                                ->required()
                                ->columnSpan([
                                    'sm' => 2,
                                ]),




                        ])
                        ->columns([
                            'sm' => 2,
                        ])
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->label('Image')
                                ->directory('Organisation/About')

                                ->image(),

                            ])
                        ->columnSpan(1),
                ])
                ->columns([
                    'sm' => 3,
                    'lg' => null,
                ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('content_title'),
                Tables\Columns\TextColumn::make('content'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
