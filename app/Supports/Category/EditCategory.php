<?php


namespace App\Supports\Category;
use App\Model\Category;

class EditCategory
{
    public function update($request, $data){
        Category::where('id', $data->id)
            ->update([
                'name' => $request->name
            ]);
    }
}
