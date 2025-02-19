<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTadFeedbacksTable extends Migration
{
    public function up()
    {
        Schema::create('tad_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no', 50)->unique();
            $table->string('name', 50);
            $table->enum('class', ['9', '10']);
            $table->enum('boards', ['ICSE', 'CBSE', 'BOARDS']);
            $table->string('address', 200);
            $table->string('mobile', 20);
            $table->string('father_name', 50);
            $table->string('father_mobile', 20);
            $table->string('mother_name', 50);
            $table->string('mother_mobile',  20);
            $table->string('photo', 100);
            $table->string('admit_card', 100);
            $table->string('email', 50);
            $table->text('feedback', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tad_feedbacks');
    }
}
