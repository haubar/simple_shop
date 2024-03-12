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
        Schema::create('Orders', function (Blueprint $table) {
            $table->increments('id');
            $table->char('orderID', 32)->unique()->comment('訂單 ID');
            $table->char('userID', 32)->comment('對應用戶 ID');
            $table->char('orderNo', 18)->comment('訂單編號');
            $table->string('paymentMethod', 20)->comment('付款方式 CASH:現金付款 CREDIT_CARD:信用卡 LINE_PAY:Line Pay');
            $table->integer('totalPrice')->unsigned()->comment('訂單總金額');
            $table->string('nickName', 30)->comment('當下用戶暱稱');
            $table->char('cellphone', 9)->comment('當下手機號碼');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
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
