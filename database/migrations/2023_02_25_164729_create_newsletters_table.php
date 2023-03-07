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
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->json('data_binary');
            $table->text('text');
             $table->timestamps();
        });

        Schema::table('newsletters', function (Blueprint $table) {
            $table->unsignedBigInteger('subdivisions_id');
            $table->foreign('subdivisions_id')->references('id')->on('subdivisions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletters');
    }
};
