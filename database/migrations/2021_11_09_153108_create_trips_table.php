<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string("code",10)->unique();
            $table->string("destination",100);
            $table->string("address",100)->unique();
            $table->string("type_of_accommodation",100);
            $table->string("level",20);
            $table->tinyInteger("rooms")->unsigned();
            $table->string("descriptions",200);
            $table->year("arrival_day");
            $table->year("departure_day");
            $table->float("price", 8, 2);
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
        Schema::dropIfExists('trips');
    }
}
