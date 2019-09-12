<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Supports\Car\GetCars;
use App\Supports\Rent\GetRent;

class ProfileController extends Controller
{

    private $getCars;

    public function __construct(GetCars $getCars)
    {
        $this->getCars = $getCars;
    }

    public function index(){
        return view('admin.index');
    }

    public function addedCars(){
        $cars = $this->getCars->addedCars();
        return view('admin.pages.cars.all', compact('cars'));
    }

    public function notReturned(){
        $cars = $this->getCars->notReturned();
        return view('admin.pages.cars.notreturned', compact('cars'));
    }
}
