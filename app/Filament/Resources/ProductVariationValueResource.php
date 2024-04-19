<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductVariationValueResource\Pages;
use App\Filament\Resources\ProductVariationValueResource\RelationManagers;
use App\Models\ProductVariationValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductVariationValueResource extends Resource
{
    protected static ?string $model = ProductVariationValue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?string $label = 'Giá trị biến thể';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('variation_value_name')
                    ->required()
                    ->label('Tên giá trị biến thể'),
                Select::make('product_variation_id')
                    ->required()
                    ->label('Mã biến thể')
                    ->relationship(name: 'ProductVariation', titleAttribute: 'variation_name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('variation_value_name')
                    ->label('Tên giá trị biến thể')
                    ->searchable(),
                TextColumn::make('ProductVariation.variation_name')
                    ->label('Mã biến thể')
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
            'index' => Pages\ListProductVariationValues::route('/'),
            'create' => Pages\CreateProductVariationValue::route('/create'),
            'edit' => Pages\EditProductVariationValue::route('/{record}/edit'),
        ];
    }
}
