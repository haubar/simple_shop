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
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->char('productID', 32)->unique()->comment('商品 ID');
            $table->string('name', 50)->comment('商品名稱');
            $table->integer('price')->unsigned()->comment('商品單價');
            $table->boolean('isActivated')->default(1)->comment('是否上架 1:上架 0:下架');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
