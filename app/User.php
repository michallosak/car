<?php

namespace App;

use App\Model\Car\Car;
use App\Model\Car\Rent;
use App\Model\Category;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function category(){
        return $this->hasMany(Category::class);
    }

    public function rentedCars(){
        return $this->hasMany(Rent::class);
    }
}
