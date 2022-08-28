<?php

namespace App\Filament\Resources\Organisation;

use App\Filament\Resources\Organisation\MemberResource\Pages;
use App\Filament\Resources\Organisation\MemberResource\RelationManagers;
use App\Models\Organisation\Member;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Organisation';
    public static function form(Form $form): Form
    {
        return $form

                ->schema([
                    Forms\Components\Card::make()
                        ->schema([


                            Select::make('committee_id')
                            ->relationship('committees', 'name')
                            ->required(),
                            Forms\Components\TextInput::make('first_names')
                                ->required()
                                ->reactive(),
                            Forms\Components\TextInput::make('last_name')
                                ->required(),
                            Forms\Components\TextInput::make('position')
                                ->required(),
                                Forms\Components\TextInput::make('nationality')
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
                            Forms\Components\FileUpload::make('image')
                                ->label('Image')
                                ->directory('Organisation/Members')

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
                Tables\Columns\TextColumn::make('first_names'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('nationality'),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
