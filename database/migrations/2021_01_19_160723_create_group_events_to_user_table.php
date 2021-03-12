<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupEventsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_group_Events_To_User', function (Blueprint $table) {
            $table->integer('event_id')->unique();
            $table->integer('user_id')->unique();
            $table->foreign('event_id')->references('id')->on('tb_events');
            $table->foreign('user_id')->references('id')->on('tb_users');
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
        Schema::dropIfExists('tb_group_Events_To_User');
    }
}
