<?php


namespace App\Supports\Car;

use App\Model\Car\Car;
use App\Model\Car\SpecificInf;

class EditCar
{
    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function edit($id)
    {
        $car = $this->car->with('s', 'photos')
            ->find($id);
        return $car;
    }

    public function update($data, $car)
    {
        $this->car->where('id', $car->id)
            ->update([
                'category_id' => $data->category_id,
                'model' => $data->model,
                'rent' => $data->rent,
                'description' => $data->description,
                'quantity' => $data->quantity
            ]);
        $this->editSpecificDataCar($car->id, $data);
        $this->checkQuantityAndStatus($car->id, $data->quantity);
    }

    private function editSpecificDataCar($car_id, $data)
    {
        SpecificInf::where('car_id', $car_id)
            ->update([
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

    private function checkQuantityAndStatus($car_id, $quantity)
    {
        $status = $this->car->where('id', $car_id)->value('status');
        if ($status != 1) {
            if ($quantity > 0) {
                $this->car->where('id', $car_id)
                    ->update([
                        'status' => 1
                    ]);
            }
        }
    }
}
