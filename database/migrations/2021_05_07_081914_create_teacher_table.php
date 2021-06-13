<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->UnsignedBigInteger('department_id')->nullable();
            $table->string('location')->nullable()->default('default_avatars.jpg');
            $table->string('about')->nullable();
            $table->string('teacher_status')->nullable();
            $table->string('teacher_stat')->nullable();
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
        Schema::dropIfExists('teacher');
    }
}
