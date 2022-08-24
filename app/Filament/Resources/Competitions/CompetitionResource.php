<?php

namespace App\Filament\Resources\Competitions;

use App\Filament\Resources\Competitions\CompetitionResource\Pages;
use App\Filament\Resources\Competitions\CompetitionResource\RelationManagers;
use App\Models\Competitions\Competition;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompetitionResource extends Resource
{
    protected static ?string $model = Competition::class;

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
                     Forms\Components\DatePicker::make('launch_date'),
                     Forms\Components\Toggle::make('status')
                     ->label('Activate Countdown'),





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
                         ->image(),
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
                Tables\Columns\TextColumn::make('launch_date'),
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
            'index' => Pages\ListCompetitions::route('/'),
            'create' => Pages\CreateCompetition::route('/create'),
            'edit' => Pages\EditCompetition::route('/{record}/edit'),
        ];
    }
}
