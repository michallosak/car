<?php


namespace App\Supports\Photo;

use App\Model\Car\Photo;
use Illuminate\Support\Facades\DB;

class UploadPhoto
{

    private $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }

    public function upload($car_id, $data){
        $images = array();
        if ($files = $data->file('images')){
            foreach ($files as $file){
                $name = $file->getClientOriginalName();
                $file->move('image', $name);
                $images[] = $name;
                $this->saveFileDb($car_id, $name);
            }
        }
    }

    private function saveFileDb($car_id, $name){
       DB::table('photos')->insert([
           'car_id' => $car_id,
           'src' => $name
       ]);
    }

}
