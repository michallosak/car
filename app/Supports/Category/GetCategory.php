<?php


namespace App\Supports\Category;


use App\Model\Category;

class GetCategory
{

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(){
        $categories = $this->category->orderBy('id', 'DESC')
            ->get();
        return $categories;
    }

    public function carsInCategory($id){
        $cars = $this->category::with('s')
            ->orderBy('id', 'DESC')
            ->where('category_id', $id)
            ->paginate(20);
        return $cars;
    }

}
