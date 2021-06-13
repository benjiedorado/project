<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBackpackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_backpack', function (Blueprint $table) {
            $table->id('file_id');
            $table->string('floc');
            $table->date('fdatein');
            $table->string('fdesc');
            $table->UnsignedBigInteger('student_id');
            $table->string('fname');
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
        Schema::dropIfExists('student_backpack');
    }
}
