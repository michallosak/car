<?php

namespace App\Model\Car;

use Illuminate\Database\Eloquent\Model;

class SpecificInf extends Model
{
    protected $fillable = [
        'car_id',
        'year_production',
        'engine_capacity',
        'fuel',
        'power',
        'course',
        'body_type',
        'color',
        'transmission',
        'driver',
        'country'
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
