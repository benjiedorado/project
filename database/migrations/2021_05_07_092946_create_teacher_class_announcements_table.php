<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_class_announcements', function (Blueprint $table) {
            $table->id('teacher_class_announcements_id');
            $table->longText('content');
            $table->UnsignedBigInteger('teacher_id')->nullable();
            $table->UnsignedBigInteger('teacher_class_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('teacher_class_announcements');
    }
}
