<?php


namespace App\Supports\Rent;


use App\Model\Car\Car;
use App\Model\Car\Rent;
use Illuminate\Support\Facades\Auth;

class CreateRent
{

    private $car;
    private $rent;

    public function __construct(Car $car, Rent $rent)
    {
        $this->car = $car;
        $this->rent = $rent;
    }

    public function rent($data)
    {
        $this->rent->create([
            'user_id' => Auth::id(),
            'car_id' => $data->car_id,
            'from' => $data->from,
            'to' => $data->to,
            'price' => $this->allPrice($data->from, $data->to, $data->fee),
            'day' => $this->checkDay($data->from, $data->to)
        ]);
        $this->availabilityCar($data->car_id);
    }

    private function availabilityCar($car_id)
    {
        $newQuantity = $this->carQuantity($car_id) - 1;
        $this->car->where('id', $car_id)
            ->update([
                'quantity' => $newQuantity
            ]);
        if ($this->carQuantity($car_id) < 1) {
            $this->car->where('id', $car_id)
                ->update([
                    'status' => 404
                ]);
        }
    }

    private function carQuantity($car_id)
    {
        $car = $this->car->find($car_id);
        $carQuantity = $car->quantity;
        return $carQuantity;
    }

    private function allPrice($from, $to, $fee)
    {
        $day = $this->checkDay($from, $to);
        $price = $day * $fee;
        return $price;
    }

    private function checkDay($from, $to){
        $fromDate = new \DateTime($from);
        $toDate = new \DateTime($to);
        $value = $fromDate->diff($toDate);
        $day = $value->format('%a');

        return $day;
    }
}
