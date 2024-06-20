<?php


namespace App\Enums;


use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
enum OrderStatus: string implements HasLabel, HasIcon, HasColor
{
    case New = 'Mới';
    case Processing = 'Đang xử lý';
    case Shipped = 'Đã vận chuyển';
    case Delivered = 'Đã giao hàng';
    case Cancelled = 'Đã hủy bỏ';
    const OnHold =  'Đơn tạm giữ';
    public function getLabel(): string {
        return match ($this) {
            self::New => 'Mới',
            self::Processing => 'Đang xử lý',
            self::Shipped => 'Đã vận chuyển',
            self::Delivered => 'Đã giao hàng',
            self::Cancelled => 'Đã hủy bỏ',
            self::OnHold => 'Đơn tạm giữ',
        };
    }

    public function getColor(): string|array|null {
        return match ($this) {
            self::New => 'info',
            self::Processing => 'warning',
            self::Shipped, self::Delivered => 'success',
            self::Cancelled => 'danger',
            self::OnHold  => 'gray',
        };
    }

    public function getIcon(): ?string {
        return match ($this) {
            self::New => 'heroicon-m-sparkles',
            self::Processing => 'heroicon-m-arrow-path',
            self::Shipped => 'heroicon-m-truck',
            self::Delivered => 'heroicon-m-check-badge',
            self::Cancelled => 'heroicon-m-x-circle',
            self::OnHold  => 'heroicon-m-finger-print

',
        };
    }
}
