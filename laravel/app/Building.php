<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    const TABLE = 'buildings';

    const ID = 'id';
    const NAME = 'name';
    const ADDRESS = 'address';
    const NEIGHBORHOOD_ID = 'neighborhood_id';
    const ZIP = 'zip';
    const STORIES = 'stories';
    const UNITS = 'units';
    const YEAR_BUILT = 'year_built';
    const TYPE = 'type';

    public function neighborhood()
    {
        return $this->hasOne(Neighborhood::class);
    }
}
