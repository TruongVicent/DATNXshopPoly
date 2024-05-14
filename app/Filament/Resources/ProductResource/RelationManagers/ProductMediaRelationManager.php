<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductMediaRelationManager extends RelationManager
{
    protected static string $relationship = 'productMedia';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Ảnh sản phẩm';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('media')->columnSpan('full')
                    ->required()
                    ->label('Ảnh')
                    ->image()
                    ->imageEditor(),
                Select::make('product_id')->columnSpan('full')
                    ->required()
                    ->label('Mã sản phẩm')
                    ->relationship(name: 'Product', titleAttribute: 'name'),
                Radio::make('is_main')
                    ->required()
                    ->label('Chọn ảnh chính')
                    ->boolean('Có','Không')
                    ->inline()
                    ->inlineLabel(false)
                    ->validationMessages([
                        'unique' => 'Sản phẩm đã có ảnh chính.',
                    ])

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('media')
            ->columns([
                TextColumn::make('Product.name')
                    ->label('Mã sản phẩm')
                    ->searchable(),
                ImageColumn::make('media')
                    ->label('Ảnh'),
                IconColumn::make('is_main')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->falseIcon('heroicon-o-x-mark')
                    ->label('Ảnh chính')

            ])
            ->filters([
                SelectFilter::make('product_id')
                    ->label('Mã sản phẩm')
                    ->relationship('Product', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
