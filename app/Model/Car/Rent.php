<?php

namespace App\Model\Car;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'from',
        'to',
        'price',
        'day'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function car(){
        return $this->belongsTo(Car::class)
            ->with(['s', 'photos']);
    }
}
