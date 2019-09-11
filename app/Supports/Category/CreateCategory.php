<?php


namespace App\Supports\Category;


use App\Model\Category;
use Illuminate\Support\Facades\Auth;

class CreateCategory
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function store($data){
        $this->category->create([
            'user_id' => Auth::id(),
            'name' => $data->name
        ]);
    }

}
