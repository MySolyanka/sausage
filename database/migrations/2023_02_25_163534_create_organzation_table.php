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
        Schema::create('organzation', function (Blueprint $table) {
            $table->id();
            $table->integer('organzation_id')->unsigned();
            $table->string('organzation_name',255);
            $table->string('adress',255);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organzation');
    }
};
