<?php

use Illuminate\Database\Seeder;

class CarPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i ++){
            \App\Model\Car\Photo::create([
                'car_id' => rand(1, 10),
                'src' => 'https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/body-image/public/911-road-3629a.jpg?itok=m6x23Go0'
            ]);
        }
    }
}
