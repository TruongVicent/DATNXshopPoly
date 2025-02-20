<?php

namespace App\Filament\App\Resources\VoucherResource\Pages;

use App\Filament\App\Resources\VoucherResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVoucher extends ViewRecord
{
    protected static string $resource = VoucherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
