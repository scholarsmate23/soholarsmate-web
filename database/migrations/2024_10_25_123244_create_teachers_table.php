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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->nullable();
            $table->string('qualification', 45)->nullable();
            $table->string('details', 100)->nullable();
            $table->integer('experience_year')->nullable();
            $table->json('prev_exp')->nullable(); // JSON column for previous experiences
            $table->string('profile_img', 100)->nullable();
            $table->string('instagram_url', 100)->nullable();
            $table->string('facebook_url', 100)->nullable();
            $table->string('video_url', 100)->nullable();

            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
