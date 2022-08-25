<?php

namespace App\Filament\Resources\Documents;

use App\Filament\Resources\Documents\DocumentsResource\Pages;
use App\Filament\Resources\Documents\DocumentsResource\RelationManagers;
use App\Models\Documents\Documents;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;


class DocumentsResource extends Resource
{
    protected static ?string $model = Documents::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Official Documents';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
             // Forms\Components\Card::make()
             Forms\Components\Card::make()
             ->schema([
                 Forms\Components\TextInput::make('title')
                     ->required(),






                 Forms\Components\MarkdownEditor::make('description')
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
                 Forms\Components\FileUpload::make('file')
                 ->directory('official-documents'),
                 Forms\Components\Select::make('category')
                 ->relationship('category', 'name'),







             ])->columnSpan(1),


     ])
     ->columns([
         'sm' => 3,
         'lg' => null
         ]);
        }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('category.name'),

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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocuments::route('/create'),
            'edit' => Pages\EditDocuments::route('/{record}/edit'),
        ];
    }
}
