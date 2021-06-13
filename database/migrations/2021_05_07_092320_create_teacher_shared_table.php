<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSharedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_shared', function (Blueprint $table) {
            $table->id('teacher_shared_id');
            $table->UnsignedBigInteger('teacher_id');
            $table->UnsignedBigInteger('shared_teacher_id');
            $table->string('floc');
            $table->date('fdatein');
            $table->string('fdesc');
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
        Schema::dropIfExists('teacher_shared');
    }
}
