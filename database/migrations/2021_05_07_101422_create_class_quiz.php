<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassQuiz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_quiz', function (Blueprint $table) {
            $table->id('class_quiz_id');
            $table->UnsignedBigInteger('teacher_class_id');
            $table->UnsignedBigInteger('quiz_time');
            $table->UnsignedBigInteger('quiz_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_quiz');
    }
}
