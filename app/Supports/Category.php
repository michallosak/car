<?php


namespace App\Supports;


use Illuminate\Support\Facades\Auth;

class Category
{
    private $category;
    public function __construct(\App\Model\Category $category)
    {
        $this->category = $category;
    }

    public function index(){
        $categories = $this->category->orderBy('id', 'DESC')
            ->get();
        return $categories;
    }

    public function store($data){
        $this->category->create([
            'user_id' => Auth::id(),
            'name' => $data->name
        ]);
    }

    public function carsInCategory($id){
        $cars = \App\Model\Category::with('s')
            ->orderBy('id', 'DESC')
            ->where('category_id', $id)
            ->paginate(20);
        return $cars;
    }

    public function update($request, $data){
        $data->update($request->only([
            'name' => $request->name
        ]));
    }

}
