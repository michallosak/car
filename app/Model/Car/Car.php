<?php

namespace App\Model\Car;

use App\Model\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'model',
        'rent',
        'description',
        'quantity'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Data user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function s(){
        return $this->hasOne(SpecificInf::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class, 'car_id', 'id');
    }

    public function rents(){
        return $this->hasMany(Rent::class);
    }
}
