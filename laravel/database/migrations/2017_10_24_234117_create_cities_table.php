<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\City;
use App\State;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(City::TABLE, function (Blueprint $table) {
            $table->increments(City::ID);
            $table->string(City::NAME);
            $table->string(City::STATE);
            $table->unique([City::NAME, City::STATE]);
            $table->foreign(City::STATE)->references(State::ID)->on(State::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
