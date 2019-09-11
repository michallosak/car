<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\RentRequest;
use App\Supports\Rent\CreateRent;
use App\Supports\Rent\GetRent;

class RentController extends Controller
{

    private $createRent;
    private $getRent;

    public function __construct(CreateRent $createRent, GetRent $getRent)
    {
        $this->createRent = $createRent;
        $this->getRent = $getRent;
    }

    public function view($id){
        $car = $this->getRent->view($id);
        return view('pages.rent.view', compact('car'));
    }

    public function store(RentRequest $request){
        $this->createRent->rent($request);
        return redirect(route('rented_cars_u'));
    }
}
