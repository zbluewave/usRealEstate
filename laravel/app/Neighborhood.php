<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    const TABLE = 'neighborhoods';

    const ID = 'id';
    const NAME = 'name';
    const CITY_ID = 'city_id';

    public $timestamps = false;
}
