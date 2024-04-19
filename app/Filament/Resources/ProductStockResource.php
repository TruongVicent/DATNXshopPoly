<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductStockResource\Pages;
use App\Filament\Resources\ProductStockResource\RelationManagers;
use App\Models\ProductStock;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductStockResource extends Resource
{
    protected static ?string $model = ProductStock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Kho Sản phẩm';
    protected static ?string $navigationGroup = 'Sản phẩm';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('sku')
                    ->required()
                    ->label('Mã SKU'),
                TextInput::make('import_price')
                    ->required()
                    ->label('Giá nhập vào'),
                TextInput::make('retail_price')
                    ->required()
                    ->label('Giá bán lẻ'),
                TextInput::make('wholesale_price')
                    ->required()
                    ->label('Giá bán sỉ'),
                TextInput::make('qty_inventory')
                    ->required()
                    ->label('Số lượng tồn'),
                Select::make('product_variation_value_id')
                    ->required()
                    ->label('Mã giá trị biến thể')
                    ->relationship(name: 'ProductVariationValue', titleAttribute: 'variation_value_name'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sku')
                    ->label('Mã SKU')
                    ->searchable(),
                TextColumn::make('import_price')
                    ->label('Giá nhập vào')
                    ->searchable(),
                TextColumn::make('retail_price')
                    ->label('Giá bán lẻ')
                    ->searchable(),
                TextColumn::make('wholesale_price')
                    ->label('Giá bán sỉ')
                    ->searchable(),
                TextColumn::make('qty_inventory')
                    ->label('Số lượng tồn')
                    ->searchable(),
                TextColumn::make('ProductVariationValue.variation_value_name')
                    ->label('Mã giá trị biến thể')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProductStocks::route('/'),
            'create' => Pages\CreateProductStock::route('/create'),
            'edit' => Pages\EditProductStock::route('/{record}/edit'),
        ];
    }
}
