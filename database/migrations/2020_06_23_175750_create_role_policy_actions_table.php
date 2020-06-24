<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePolicyActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_policy_actions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('role_id')->references('id')->on('bko_roles');
            $table->foreignId('policy_id')->references('id')->on('bko_policies');
            $table->foreignId('action_id')->references('id')->on('bko_actions');
            $table->timestamps();
            $table->primary(['role_id','policy_id','action_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_policy_actions');
    }
}
