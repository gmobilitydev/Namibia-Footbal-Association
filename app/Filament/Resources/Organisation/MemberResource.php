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

                            Forms\Components\Select::make('committee_id')
                            ->relationship('committees', 'name')
                            ->required(),
                            Forms\Components\TextInput::make('first_names')
                                ->required()
                                ->reactive(),
                            Forms\Components\TextInput::make('last_name')
                                ->required(),
                            Forms\Components\TextInput::make('position')
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
