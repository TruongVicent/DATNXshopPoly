<?php

namespace App\Filament\Resources\ReviewMediaResource\Pages;

use App\Filament\Resources\ReviewMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviewMedia extends ListRecords
{
    protected static string $resource = ReviewMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
