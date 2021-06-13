<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_class_quiz', function (Blueprint $table) {
            $table->id('student_class_quiz_id');
            $table->UnsignedBigInteger('class_quiz_id');
            $table->UnsignedBigInteger('student_id');
            $table->string('student_quiz_time');
            $table->string('grade');
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
        Schema::dropIfExists('student_class_quiz');
    }
}
