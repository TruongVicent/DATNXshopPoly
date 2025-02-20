<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id()->comment('Mã cửa hàng');
            $table->foreignIdFor(User::class)->nullable()->comment('Người sở hữu cửa hàng');
            $table->string('name')->nullable(false)->comment('Tên cửa hàng');
            $table->string('avatar')->nullable()->comment('Avatar cửa hàng');
            $table->string('email')->nullable(false)->comment('Email cửa hàng');
            $table->string('phone')->nullable()->comment('Số điện thoại cửa hàng');
            $table->string('address')->nullable()->comment('Địa chỉ cửa hàng');
            $table->text('description')->nullable(true)->comment('Mô tả cửa hàng');
            $table->integer('rating')->nullable(true)->comment('Đánh giá cửa hàng');
            $table->tinyInteger('status')->default(0)->comment('Trạng thái cửa hàng');
            $table->timestamps();
            $table->integer('follower')->nullable(true)->comment('Số người theo dõi cửa hàng');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop');
    }
};
