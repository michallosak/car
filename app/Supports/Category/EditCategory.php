<?php


namespace App\Supports\Category;


class EditCategory
{
    public function update($request, $data){
        $data->update($request->only([
            'name' => $request->name
        ]));
    }
}
