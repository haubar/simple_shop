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
        Schema::dropIfExists('users');

        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('userID', 32)->unique()->comment('用戶ID');
            $table->string('nickName', 30)->comment('用戶暱稱');
            $table->char('cellphone', 9)->comment('手機號碼');
            $table->char('passsword', 60)->comment('密碼');
            $table->boolean('isActivated')->default(1)->comment('帳號狀態 1:啟用 0:停權');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
