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
            $table->integer('relatonships_id')->unsigned();
            $table->integer('user_location_id')->unsigned();
            $table->integer('role_id');
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
