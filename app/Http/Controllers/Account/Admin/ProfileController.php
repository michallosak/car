<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Supports\Car\GetCars;

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
}
