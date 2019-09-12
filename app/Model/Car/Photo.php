<?php

namespace App\Model\Car;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'car_id',
        'src'
    ];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
