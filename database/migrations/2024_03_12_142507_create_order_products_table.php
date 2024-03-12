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
        Schema::create('OrderProducts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('orderID', 32)->comment('對應訂單 ID');
            $table->char('productID', 32)->comment('對應商品 ID');
            $table->string('name', 50)->comment('商品名稱');
            $table->integer('price')->unsigned()->comment('商品價格');
            $table->integer('amount')->unsigned()->comment('購買數量');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
