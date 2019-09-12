<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;
use App\Supports\Rent\GetRent;

class ProfileController extends Controller
{
    private $getRent;

    public function __construct(GetRent $getRent)
    {
        $this->getRent = $getRent;
    }

    public function index()
    {
        return view('user.index');
    }

    public function rentedCars()
    {
        $rents = $this->getRent->rentedCars();
        return view('user.cars.rented', compact('rents'));
    }
}
