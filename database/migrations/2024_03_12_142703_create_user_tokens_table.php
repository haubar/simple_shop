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
        Schema::create('UserTokens', function (Blueprint $table) {
            $table->increments('id');
            $table->char('token', 20)->unique()->comment('登入識別');
            $table->char('userID', 32)->comment('對應用戶 ID');
            //應該統一用logoutAt命名
            $table->dateTime('logoutTime')->nullable()->comment('登出時間');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tokens');
    }
};
