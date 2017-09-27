<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    static function getCars()
    {
    	return Car::all();
    }
}
