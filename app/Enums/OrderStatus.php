<?php


namespace App\Enums;


use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
enum OrderStatus: string implements HasLabel, HasIcon, HasColor
{
    case News = 'Mới';

    case Processing = 'Đang xử lý';

    case Shipped = 'Đã vận chuyển';

    case Delivered = 'Đã giao hàng';

    case Cancelled = 'Đã hủy bỏ';

    public function getName(): string
    {
        return match ($this) {
            self::News => 'Mới',
            self::Processing => 'Đang xử lý',
            self::Shipped =>'Đã vận chuyển',
            self::Delivered => 'Đã giao hàng',
            self::Cancelled => 'Đã hủy bỏ',
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::News => 'Mới',
            self::Processing => 'Đang xử lý',
            self::Shipped =>'Đã vận chuyển',
            self::Delivered => 'Đã giao hàng',
            self::Cancelled => 'Đã hủy bỏ',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::News => 'info',
            self::Processing => 'warning',
            self::Shipped, self::Delivered => 'success',
            self::Cancelled => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::News => 'heroicon-m-sparkles',
            self::Processing => 'heroicon-m-arrow-path',
            self::Shipped => 'heroicon-m-truck',
            self::Delivered => 'heroicon-m-check-badge',
            self::Cancelled => 'heroicon-m-x-circle',
        };
    }
}
