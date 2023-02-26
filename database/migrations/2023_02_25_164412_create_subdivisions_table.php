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
        Schema::create('subdivisions', function (Blueprint $table) {
            $table->id();
            $table->integer('subdivisions_id')->unsigned();
            $table->string('subdivisions_name',255);
            $table->string('organzation_id',255);
            $table->integer('procreator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subdivisions');
    }
};
