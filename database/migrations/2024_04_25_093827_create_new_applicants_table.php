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
        Schema::create('new_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('father_name', 45)->nullable();
            $table->string('father_occupation', 45)->nullable();
            $table->string('mother_name', 45)->nullable();
            $table->string('mother_occupation', 45)->nullable();
            $table->date('dob')->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('category', 15)->nullable();
            $table->string('nationality', 45)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('school_name', 45)->nullable();
            $table->string('school_address', 80)->nullable();
            $table->string('boards', 20)->nullable();
            $table->string('grade', 20)->nullable();
            $table->string('course', 45)->nullable();
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_applicants');
    }
};
