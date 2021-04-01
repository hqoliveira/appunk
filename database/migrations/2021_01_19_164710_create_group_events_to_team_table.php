<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupEventsToTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_group_Events_To_Team', function (Blueprint $table) {
            $table->integer('event_id');
            $table->integer('team_id');
            $table->foreign('event_id')->references('id')->on('tb_events');
            $table->foreign('team_id')->references('id')->on('tb_team');
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
        Schema::dropIfExists('tb_group_Events_To_Team');
    }
}
