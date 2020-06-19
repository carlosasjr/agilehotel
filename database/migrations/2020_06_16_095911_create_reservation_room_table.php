<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('reservation_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();

            $table->foreign('reservation_id')
                ->references('id')
                ->on('reservations')
                ->onDelete('cascade');


            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade');

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
        Schema::dropIfExists('reservation_room');
    }
}
