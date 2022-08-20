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
use Illuminate\Support\Str;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;



class CompetitionResource extends Resource
{
    protected static ?string $model = Competition::class;


    protected static ?string $navigationGroup = 'Competitions/Events';

    protected static ?string $navigationIcon = 'heroicon-o-hashtag';

    protected static ?int $navigationSort = 0;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Card::make()
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                        DateTimePicker::make('launch_date'),
                        Toggle::make('status')->label('Activate Countdown'),




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
                Tables\Columns\ImageColumn::make('image')
                ->label('Image'),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
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
