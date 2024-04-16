<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\VoucherType;
use App\Models\ShippingAddress;
use App\Models\Product;
use App\Models\Voucher;
use App\Models\OrderStatus;
use App\Models\User;
use App\Models\PaymentMethod;
use App\Models\OrderItem;
use App\Models\OrderDetail;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->comment('Mã đơn hàng');
            $table->foreignIdFor(ShippingAddress::class)->comment('Mã địa chỉ người dùng');
            $table->timestamp('delivery_date')->nullable(false)->comment('Ngày vận chuyển');
            $table->integer('total_price')->nullable()->comment('Tổng tiền');
            $table->string('shipping_unit')->nullable(false)->comment('Đơn vị vận chuyển');
            $table->foreignIdFor(User::class)->comment('Mã người dùng');
            $table->foreignIdFor(Voucher::class)->comment('Mã mã giảm giá');
            $table->string('status')->comment('Mã trạng thái đơn hàng');
            $table->foreignIdFor(PaymentMethod::class)->comment('Mã phương thức thanh toán');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
