<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soils', function (Blueprint $table) {
            $table->id();
            $table->string('soil_type');
            $table->float('pH');
            $table->string('nitrogen');
            $table->string('phosphorus');
            $table->string('potassium');
            $table->string('magnesium');
            $table->string('calcium');

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
        Schema::dropIfExists('soils');
    }
}
