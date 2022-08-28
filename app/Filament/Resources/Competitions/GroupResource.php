<?php

namespace App\Filament\Resources\Competitions;

use App\Filament\Resources\Competitions\GroupResource\Pages;
use App\Filament\Resources\Competitions\GroupResource\RelationManagers;
use App\Models\Competitions\Group;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GroupResource extends Resource
{
    protected static ?string $model = Group::class;


    protected static ?string $navigationIcon = 'heroicon-o-globe';
    protected static ?string $navigationGroup = "Football Center";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\Select::make('competition')
                    ->relationship('competitions','name')







                ])
                ->columns([
                    'sm' => 2,
                ])
                ->columnSpan([
                    'sm' => 2,
                ]),
                Forms\Components\Card::make()
                ->schema([

                        Forms\Components\MultiSelect::make('teams')
                        ->relationship('teams', 'name'),



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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('competitions.name'),
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
            'index' => Pages\ListGroups::route('/'),
            'create' => Pages\CreateGroup::route('/create'),
            'edit' => Pages\EditGroup::route('/{record}/edit'),
        ];
    }
}
