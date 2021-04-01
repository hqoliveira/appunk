<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTeamToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_group_Team_To_User', function (Blueprint $table) {
            $table->integer('team_id');
            $table->integer('user_id');
            $table->foreign('team_id')->references('id')->on('tb_team');
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
        Schema::dropIfExists('tb_group_Team_To_User');
    }
}
