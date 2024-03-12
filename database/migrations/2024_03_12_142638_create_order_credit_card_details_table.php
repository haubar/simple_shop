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
        Schema::create('OrderCreditCardDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->char('orderID', 32)->unique()->comment('訂單 ID');
            $table->char('firstSix', 6)->comment('卡片前 6 碼');
            $table->char('lastFour', 4)->comment('卡片末 4 碼');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_credit_card_details');
    }
};
