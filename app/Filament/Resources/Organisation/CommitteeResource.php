<?php

namespace App\Filament\Resources\Organisation;

use App\Filament\Resources\Organisation\CommitteeResource\Pages;
use App\Filament\Resources\Organisation\CommitteeResource\RelationManagers;
use App\Models\Organisation\Committee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommitteeResource extends Resource
{
    protected static ?string $model = Committee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Organisation';
    public static function form(Form $form): Form
    {
        return $form

                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->reactive(),
                       Forms\Components\MarkdownEditor::make('description')
                        ->required()
                        ->columnSpan([
                            'sm' => 2,
                        ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),


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
            'index' => Pages\ListCommittees::route('/'),
            'create' => Pages\CreateCommittee::route('/create'),
            'edit' => Pages\EditCommittee::route('/{record}/edit'),
        ];
    }
}
