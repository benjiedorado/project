<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageSentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_sent', function (Blueprint $table) {
            $table->id('message_sent_id');
            $table->UnsignedBigInteger('receiver_id');
            $table->longText('content');
            $table->date('date_sended');
            $table->UnsignedBigInteger('sender_id');
            $table->string('receiver_name');
            $table->string('sender_name');
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
        Schema::dropIfExists('message_sent');
    }
}
