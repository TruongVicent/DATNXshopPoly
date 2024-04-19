<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewMediaResource\Pages;
use App\Filament\Resources\ReviewMediaResource\RelationManagers;
use App\Models\Review;
use App\Models\ReviewMedia;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReviewMediaResource extends Resource
{
    protected static ?string $model = ReviewMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Hình ảnh đánh giá';
    protected static ?string $navigationGroup = 'Đánh giá';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('review_media')->columnSpan('full')
                    ->image()
                    ->imageEditor()
                    ->required()
                    ->label('Ảnh'),
                Select::make('review_id')
                    ->relationship(name: 'review', titleAttribute: 'content')
                    ->options(Review::all()->pluck('content', 'id'))
                    ->searchable()
                    ->required()
                    ->label('Chọn đánh giá'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('review_media')
                    ->label('Ảnh đánh giá'),
                TextColumn::make('review.content')
                    ->searchable()
                    ->label('Đánh giá'),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviewMedia::route('/'),
            'create' => Pages\CreateReviewMedia::route('/create'),
            'edit' => Pages\EditReviewMedia::route('/{record}/edit'),
        ];
    }
}
