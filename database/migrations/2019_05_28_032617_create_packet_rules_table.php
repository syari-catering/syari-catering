<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacketRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packet_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('packet_id');
            $table->text('description');
            $table->timestamps();

            $table->foreign('packet_id')->references('id')->on('packets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packet_rules');
    }
}
