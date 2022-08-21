<?php

namespace App\Filament\Resources\Team;

use App\Filament\Resources\Team\TeamResource\Pages;
use App\Filament\Resources\Team\TeamResource\RelationManagers;
use App\Models\Team\Team;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;



    protected static ?string $navigationIcon = 'heroicon-o-globe';
    protected static ?string $navigationGroup = "Football Center";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    // Forms\Components\Card::make()
                    Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('country')
                            ->required(),
                        Forms\Components\DatePicker::make('date_founded'),


                        Forms\Components\TextInput::make('manager')
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
                            ->label('Team Badge')
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
