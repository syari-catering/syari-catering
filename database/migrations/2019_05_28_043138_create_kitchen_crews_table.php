<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitchenCrewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchen_crews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cook_leader_id');
            $table->string('name');
            $table->string('gender');
            $table->text('address');
            $table->string('phone');
            $table->timestamps();
            
            $table->foreign('cook_leader_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitchen_crews');
    }
}
