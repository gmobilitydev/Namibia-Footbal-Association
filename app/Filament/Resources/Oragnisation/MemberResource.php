<?php

namespace App\Filament\Resources\Oragnisation;

use App\Filament\Resources\Oragnisation\MemberResource\Pages;
use App\Filament\Resources\Oragnisation\MemberResource\RelationManagers;
use App\Models\Oragnisation\Member;
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
                Forms\Components\Group::make()
                ->schema([
                    $layout::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->reactive()
                                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                            Forms\Components\TextInput::make('slug')
                                ->disabled()
                                ->required()
                                ->unique(Product::class, 'slug', fn ($record) => $record),
                            Forms\Components\MarkdownEditor::make('description')
                                ->columnSpan([
                                    'sm' => 2,
                                ]),
                        ])->columns([
                            'sm' => 2,
                        ]),
                    $layout::make()
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                ->collection('product-images')
                                ->multiple()
                                ->maxFiles(5),
                        ])
                        ->columns(1),
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Pricing'),
                            Forms\Components\Grid::make()
                                ->schema([
                                    Forms\Components\TextInput::make('price')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                    Forms\Components\TextInput::make('old_price')
                                        ->label('Compare at price')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                    Forms\Components\TextInput::make('cost')
                                        ->label('Cost per item')
                                        ->helperText('Customers won\'t see this price.')
                                        ->numeric()
                                        ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                        ->required(),
                                ]),
                        ]),
                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Inventory'),
                            Forms\Components\Grid::make()
                                ->schema([
                                    Forms\Components\TextInput::make('sku')
                                        ->label('SKU (Stock Keeping Unit)')
                                        ->unique(Product::class, 'sku', fn ($record) => $record)
                                        ->required(),
                                    Forms\Components\TextInput::make('barcode')
                                        ->label('Barcode (ISBN, UPC, GTIN, etc.)')
                                        ->unique(Product::class, 'barcode', fn ($record) => $record)
                                        ->required(),
                                    Forms\Components\TextInput::make('qty')
                                        ->label('Quantity')
                                        ->numeric()
                                        ->rules(['integer', 'min:0'])
                                        ->required(),
                                    Forms\Components\TextInput::make('security_stock')
                                        ->helperText('The safety stock is the limit stock for your products which alerts you if the product stock will soon be out of stock.')
                                        ->numeric()
                                        ->rules(['integer', 'min:0'])
                                        ->required(),
                                ]),
                        ]),

                    $layout::make()
                        ->schema([
                            Forms\Components\Placeholder::make('Shipping'),
                            Forms\Components\Checkbox::make('backorder')
                                ->label('This product can be returned'),
                            Forms\Components\Checkbox::make('requires_shipping')
                                ->label('This product will be shipped'),
                        ])
                        ->columns(1),
                ])->columnSpan([
                    'sm' => 2,
                ])
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
