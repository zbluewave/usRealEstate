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

    const UNIT_NUM = 'unit_number';
    const BEDROOMS_NUM = 'bedrooms_number';
    const BATH_NUM = 'bathrooms_number';
    const PRICE = 'price';
    const DATE = 'date';
    const DESCRIPTION = 'description';


    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class, self::NEIGHBORHOOD_ID);
    }
}
