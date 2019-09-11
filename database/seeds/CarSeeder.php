<?php

use App\Model\Car\SpecificInf;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i ++){
            $rand = rand(1, 10);
            $car = \App\Model\Car\Car::create([
                    'user_id' => $rand,
                    'category_id' => $rand,
                    'model' => 'Model car' . $i,
                    'rent' => 123,
                    'description' => '
                    Vestibulum tempor nisi nisi, sit amet vehicula nisi efficitur tincidunt. Curabitur id orci vitae metus auctor pulvinar. Nulla lorem dolor, malesuada vitae euismod vel, pellentesque non neque. Duis porta sit amet mi ut faucibus. Maecenas ut congue dui, eget aliquam mauris. In in dapibus nunc. Curabitur tempor maximus euismod. Nullam ipsum neque, finibus consectetur quam in, ultricies tincidunt eros. Vivamus aliquam sagittis ligula et suscipit. Donec dapibus velit tellus. Morbi porta tellus in condimentum feugiat. Morbi consequat hendrerit ipsum, eu luctus eros efficitur eu. Etiam sagittis mollis nunc, vitae pharetra lacus tincidunt vitae. Aenean blandit varius enim nec commodo.
                    ',
                    'quantity' => 1 . $i
            ]);
            SpecificInf::create([
                'car_id' => $car->id,
                'year_production' => 1234,
                'engine_capacity' => 4321,
                'fuel' => 'Diesel',
                'power' => 324,
                'course' => 124344,
                'body_type' => 'SUV',
                'color' => 'Red',
                'transmission' => 'Manual',
                'driver' => 'Left',
                'country' => 'USA'
            ]);
        }
    }
}
