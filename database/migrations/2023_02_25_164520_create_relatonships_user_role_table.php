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
        Schema::create('relatonships_user_role', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id');
        });

        Schema::table('relatonships_user_role', function (Blueprint $table) {
            $table->unsignedBigInteger('user_location_id');
            $table->foreign('user_location_id')->references('id')->on('users_location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatonhips_user_role');
    }
};
