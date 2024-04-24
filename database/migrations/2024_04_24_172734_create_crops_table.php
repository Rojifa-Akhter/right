<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('soil_id');
            $table->unsignedBigInteger('water_id');
            $table->unsignedBigInteger('season_id');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('soil_id')->references('id')->on('soils')->onDelete('cascade');    
            $table->foreign('water_id')->references('id')->on('waters')->onDelete('cascade');    
            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');    
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crops');
    }
}






