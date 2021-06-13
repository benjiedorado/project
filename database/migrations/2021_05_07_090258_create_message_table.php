<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id('message_id');
            $table->UnsignedBigInteger('receiver_id');
            $table->text('content');
            $table->date('date_sended');
            $table->UnsignedBigInteger('sender_id');
            $table->string('receiver_name');
            $table->string('sender_name');
            $table->string('message_status');
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
        Schema::dropIfExists('message');
    }
}
