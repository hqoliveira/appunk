<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_scales', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('team_id');
            $table->integer('event_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->foreign('team_id')->references('id')->on('tb_team');
            $table->foreign('event_id')->references('id')->on('tb_events');
            $table->foreign('user_id')->references('id')->on('tb_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_scales');
    }
}
