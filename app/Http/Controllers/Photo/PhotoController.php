<?php

namespace App\Http\Controllers\Photo;

use App\Http\Requests\Photo\CreatePhotoRequest;
use App\Model\Car\Photo;
use App\Http\Controllers\Controller;
use App\Supports\Photo\UploadPhoto;

class PhotoController extends Controller
{
    private $uploadPhoto;

    public function __construct(UploadPhoto $uploadPhoto)
    {
        $this->uploadPhoto = $uploadPhoto;
    }

    public function destroy(Photo $photo){
        $photo->delete();
        return redirect()->back();
    }

    public function store(CreatePhotoRequest $request){
        $this->uploadPhoto->upload($request->car_id, $request);
        echo $request->car_id;
        return redirect()->back();
    }
}
