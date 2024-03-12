<?php

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
        Schema::create('OrderLinePayDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->char('orderID', 32)->unique()->comment('訂單 ID');
            $table->char('lineOrderID', 50)->comment('LinePay官方訂單ID');
            $table->string('linePaymentMethod', 20)->comment('支付方式 ACC_LINK:連結帳戶付款 CREDIT_CARD:信用卡 POINT:LinePoints支付');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_line_pay_details');
    }
};
