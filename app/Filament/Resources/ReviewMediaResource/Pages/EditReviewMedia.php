<?php

namespace App\Filament\Resources\ReviewMediaResource\Pages;

use App\Filament\Resources\ReviewMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReviewMedia extends EditRecord
{
    protected static string $resource = ReviewMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
