<?php


namespace App\Supports\Rent;


use App\Model\Car\Car;
use App\Model\Car\Rent;
use Illuminate\Support\Facades\Auth;

class GetRent
{

    private $car;
    private $rent;

    public function __construct(Car $car, Rent $rent)
    {
        $this->car = $car;
        $this->rent = $rent;
    }


    public function view($id)
    {
        $car = $this->car->with('photos')
            ->where('status', 1)
            ->find($id);
        return $car;
    }

    public function rentedCars(){
        $rents = $this->rent->with('car')
            ->where('user_id', Auth::id())
            ->orderBy('id', 'DESC')
            ->paginate(3);
        return $rents;
    }

}
