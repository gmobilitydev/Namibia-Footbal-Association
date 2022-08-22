<?php

namespace App\Filament\Resources\Competitions;

use App\Filament\Resources\Competitions\FixturesResource\Pages;
use App\Filament\Resources\Competitions\FixturesResource\RelationManagers;
use App\Models\Competitions\Fixtures;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FixturesResource extends Resource
{
    protected static ?string $model = Fixtures::class;


    protected static ?string $navigationIcon = 'heroicon-o-globe';
    protected static ?string $navigationGroup = "Football Center";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('competition_id')
                ->relationship('competitions', 'name'),
                Forms\Components\Select::make('home_team')
                ->relationship('home', 'name')
                ->required(),
                Forms\Components\Select::make('away_team')
                ->relationship('away', 'name')
                ->required(),
                Forms\Components\DateTimePicker::make('date')
                ->required(),
                Forms\Components\TextInput::make('home_result'),
                Forms\Components\TextInput::make('away_result')


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('home.name'),
                Tables\Columns\TextColumn::make('home_result'),
                Tables\Columns\TextColumn::make('away.name'),
                Tables\Columns\TextColumn::make('away_result'),

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
            'index' => Pages\ListFixtures::route('/'),
            'create' => Pages\CreateFixtures::route('/create'),
            'edit' => Pages\EditFixtures::route('/{record}/edit'),
        ];
    }
}
