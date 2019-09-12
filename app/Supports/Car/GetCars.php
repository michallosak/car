<?php


namespace App\Supports\Car;


use App\Model\Car\Car;
use App\Model\Car\Rent;

class GetCars
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function carsForHire(){
        $cars = $this->car->with(['s', 'photos'])
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return $cars;
    }

    public function show($id){
        $car = $this->car->with('s', 'photos')
            ->find($id);
        return $car;
    }

    public function addedCars(){
        $cars = $this->car->with(['s', 'photos'])
            ->orderBy('id', 'DESC')
            ->paginate(20);

        return $cars;
    }

    // Status 403 the car was not returned
    public function notReturned(){
        $cars = $this->car->with(['s', 'photos'])
            ->where('status', 403)
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return $cars;
    }
}
