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
        Schema::create('users_gos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('second_name',255);
            $table->string('first_name',255);
            $table->string('surname',255);
            $table->string('@mail',50);
            $table->string('vk_id',50);
            $table->string('telegram_id',50);
            $table->string('photo',255);
            $table->string('password',60);

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
