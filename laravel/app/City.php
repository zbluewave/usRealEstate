<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    const TABLE = 'cities';

    const ID = 'id';
    const NAME = 'name';
    const STATE = 'state';

    public $timestamps = false;
}
