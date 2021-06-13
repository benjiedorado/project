<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id('files_id');
            $table->string('floc');
            $table->date('fdatein');
            $table->string('fdesc');
            $table->UnsignedBigInteger('teacher_id');
            $table->UnsignedBigInteger('class_id');
            $table->string('fname');
            $table->string('uploade_by');
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
        Schema::dropIfExists('files');
    }
}
