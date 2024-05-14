<?php

namespace App\Filament\Resources\ProductVariationResource\RelationManagers;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductVariationValueRelationManager extends RelationManager
{
    protected static string $relationship = 'productVariationValue';
    protected static ?string $label = 'Giá trị biến thể';

    public function form(Form $form): Form
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('media')
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
}
