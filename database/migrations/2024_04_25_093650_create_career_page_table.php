<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('career_page', function (Blueprint $table) {
            $table->id();
            $table->string('position', 60)->nullable();
            $table->string('location', 45)->nullable();
            $table->string('description_file', 100)->nullable();
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_page');
    }
};
