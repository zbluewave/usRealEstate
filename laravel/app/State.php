<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    const TABLE = 'states';

    const ID = 'id';
    const NAME = 'name';

    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;
}
