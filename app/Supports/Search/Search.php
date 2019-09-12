<?php


namespace App\Supports\Search;


use App\Model\Car\Car;

class Search
{

    public function search($request){
        $cars = Car::with(['s', 'photos'])
            ->where('model', 'like', '%'.$request->model.'%')
            ->where(['category_id' => $request->category_id, 'status' => 1])
            ->paginate(5);
        return $cars;
    }

}
