<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;
use App\Supports\User\RentRepo;

class ProfileController extends Controller
{
    private $rent;

    public function __construct(RentRepo $rent)
    {
        $this->rent = $rent;
    }

    public function index(){
        return view('user.index');
    }

    public function rentedCars(){
        $rents = $this->rent->rentedCars();
        return view('user.cars.rented', compact('rents'));
    }
}
