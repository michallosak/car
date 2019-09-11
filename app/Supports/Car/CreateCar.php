<?php


namespace App\Supports\Car;


use App\Model\Car\Car;
use App\Model\Car\SpecificInf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCar
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function addCar($data){
        DB::transaction(function () use ($data){
            $car = $this->car->create([
                'user_id' => Auth::id(),
                'category_id' => $data->category_id,
                'model' => $data->model,
                'rent' => $data->rent,
                'description' => $data->description,
                'quantity' => $data->quantity
            ]);
            $this->addSpecificInfCar($car->id, $data);
        });
    }

    protected function addSpecificInfCar($car_id, $data){
        SpecificInf::create([
            'car_id' => $car_id,
            'year_production' => $data->year_production,
            'engine_capacity' => $data->engine_capacity,
            'fuel' => $data->fuel,
            'power' => $data->power,
            'course' => $data->course,
            'body_type' => $data->body_type,
            'color' => $data->color,
            'transmission' => $data->transmission,
            'driver' => $data->driver,
            'country' => $data->country
        ]);
    }
}
