<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Đánh giá';
    protected static ?string $navigationGroup = 'Đánh giá';
    /**
     * @throws \Exception
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('review_id')
                    ->relationship(name: 'reviewChild', titleAttribute: 'content')
                    ->options(Review::all()->pluck('content', 'id'))
                    ->searchable()
                    ->label('Chọn đánh giá để phản hồi'),
                FileUpload::make('image')->columnSpan('full')
                    ->image()
                    ->imageEditor()
                    ->label('Ảnh'),
                Select::make('user_id')
                    ->relationship(name: 'User', titleAttribute: 'name')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->label('Người đánh giá'),
                TextInput::make('content')
                    ->label('Nội dung')
                    ->required(),
                Select::make('rating')
                    ->options([
                        '1' => '1 Sao',
                        '2' => '2 Sao',
                        '3' => '3 Sao',
                        '4' => '4 Sao',
                        '5' => '5 Sao',
                    ])
                    ->required()
                    ->label('Đánh giá'),
                TextInput::make('like_count')
                    ->label('Lượt thích')
                    ->required(),
                Select::make('product_id')
                    ->relationship(name: 'product', titleAttribute: 'name')
                    ->options(Product::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->label('Sản phẩm'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Ảnh đánh giá'),
                TextColumn::make('User.name')
                    ->searchable()
                    ->label('Tên người đánh giá'),
                TextColumn::make('content')
                    ->label('Nội dung')
                    ->searchable(),
                TextColumn::make('rating')
                    ->label('Đánh giá')
                    ->searchable(),
                TextColumn::make('like_count')
                    ->label('Lượt thích')
                    ->searchable(),
                TextColumn::make('Product.name')
                    ->searchable()
                    ->label('Tên người đánh giá'),
                TextColumn::make('Review.content')
                    ->searchable()
                    ->label('Phản hồi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
