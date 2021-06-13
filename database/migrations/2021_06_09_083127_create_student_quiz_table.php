<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_quiz', function (Blueprint $table) {
            $table->id('student_quiz_id');
            $table->UnsignedBigInteger('quiz_id');
            $table->string('floc');
            $table->string('quiz_fdatein');
            $table->string('fdesc');
            $table->string('fname');
            $table->UnsignedBigInteger('student_id')->default('1');
            $table->BigInteger('grade')->nullable();
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
        Schema::dropIfExists('student_quiz');
    }
}
