<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_assignment', function (Blueprint $table) {
            $table->id('student_assignment_id');
            $table->UnsignedBigInteger('assignment_id');
            $table->string('floc');
            $table->string('assignment_fdatein');
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
        Schema::dropIfExists('student_assignment');
    }
}
