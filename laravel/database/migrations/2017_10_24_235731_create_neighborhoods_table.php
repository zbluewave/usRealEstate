<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Neighborhood;
use App\City;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Neighborhood::TABLE, function (Blueprint $table) {
            $table->increments(Neighborhood::ID);
            $table->string(Neighborhood::NAME);
            $table->unsignedInteger(Neighborhood::CITY_ID);
            $table->unique([Neighborhood::NAME, Neighborhood::CITY_ID]);
            $table->foreign(Neighborhood::CITY_ID)->references(City::ID)->on(City::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighborhoods');
    }
}
