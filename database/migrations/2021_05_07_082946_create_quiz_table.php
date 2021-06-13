<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->id('quiz_id');
            $table->string('title');
            $table->string('floc')->nullable();
            $table->string('fdatein')->nullable();
            $table->string('desc')->nullable();
            $table->UnsignedBigInteger('teacher_id')->nullable();
            $table->UnsignedBigInteger('class_id')->nullable();
            $table->string('fname')->nullable();
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
        Schema::dropIfExists('quiz');
    }
}
