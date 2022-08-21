<?php

namespace App\Filament\Resources\Team;

use App\Filament\Resources\Team\PlayersResource\Pages;
use App\Filament\Resources\Team\PlayersResource\RelationManagers;
use App\Models\Team\Players;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayersResource extends Resource
{
    protected static ?string $model = Players::class;


    protected static ?string $navigationIcon = 'heroicon-o-globe';
    protected static ?string $navigationGroup = "Football Center";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                // Forms\Components\Card::make()
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('first_names')
                        ->required(),
                    Forms\Components\TextInput::make('last_name')
                        ->required(),
                    Forms\Components\DatePicker::make('dob'),
                    Forms\Components\Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',

                    ]),
                    Forms\Components\TextInput::make('position')
                    ->required(),
                    Forms\Components\TextInput::make('nationality')
                    ->required(),
                    Forms\Components\TextInput::make('height')
                    ->required(),





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
                        ->image(),



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
                 //
                 Tables\Columns\TextColumn::make('id'),
                 Tables\Columns\TextColumn::make('first_names'),
                 Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('height'),


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
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayers::route('/create'),
            'edit' => Pages\EditPlayers::route('/{record}/edit'),
        ];
    }
}
