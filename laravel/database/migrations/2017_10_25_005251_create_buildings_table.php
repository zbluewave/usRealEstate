<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Neighborhood;
use App\Building;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Building::TABLE, function (Blueprint $table) {
            $table->increments(Building::ID);
            $table->string(Building::NAME);
            $table->string(Building::ADDRESS, 512);
            $table->string(Building::ZIP);
            $table->unsignedSmallInteger(Building::YEAR_BUILT)->nullable();
            $table->unsignedSmallInteger(Building::STORIES)->default(1);
            $table->unsignedSmallInteger(Building::UNITS)->default(1);
            $table->string(Building::TYPE, 8);
            $table->unsignedInteger(Building::NEIGHBORHOOD_ID);
            $table->timestamps();
            $table->unique([Building::ADDRESS, Building::NEIGHBORHOOD_ID]);
            $table->foreign(Building::NEIGHBORHOOD_ID)->references(Neighborhood::ID)->on(Neighborhood::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Building::TABLE);
    }
}
