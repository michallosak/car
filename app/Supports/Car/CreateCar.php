<?php


namespace App\Supports\Car;

use App\Model\Car\Car;
use App\Model\Car\SpecificInf;
use App\Supports\Photo\UploadPhoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCar
{
    private $car;
    private $uploadPhoto;

    public function __construct(Car $car, UploadPhoto $uploadPhoto)
    {
        $this->car = $car;
        $this->uploadPhoto = $uploadPhoto;
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
            $this->uploadPhoto->upload($car->id, $data);
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
