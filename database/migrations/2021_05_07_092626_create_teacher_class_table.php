<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_class', function (Blueprint $table) {
            $table->id('teacher_class_id');
            $table->UnsignedBigInteger('teacher_id');
            $table->UnsignedBigInteger('class_id');
            $table->UnsignedBigInteger('subject_id');
            $table->string('thumbnails')->nullable();
            $table->string('school_year');
            $table->string('class_code');
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
        Schema::dropIfExists('teacher_class');
    }
}
