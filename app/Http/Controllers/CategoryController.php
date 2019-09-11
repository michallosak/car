<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use App\Supports\Category\CreateCategory;
use App\Supports\Category\EditCategory;
use App\Supports\Category\GetCategory;

class CategoryController extends Controller
{

    private $createCategory;
    private $editCategory;
    private $getCategory;

    public function __construct(CreateCategory $createCategory, EditCategory $editCategory, GetCategory $getCategory)
    {
        $this->createCategory = $createCategory;
        $this->editCategory = $editCategory;
        $this->getCategory = $getCategory;
    }

    public function index(){
        $categories = $this->getCategory->index();
        return view('admin.pages.category.index', compact('categories'));
    }

    public function store(CategoryRequest $request){
        $this->createCategory->store($request);
        return redirect(route('categories'));
    }

    public function carsInCategory($id){
        $cars = $this->getCategory->carsInCategory($id);
        return view('pages.', compact('cars'));
    }

    public function update(CategoryRequest $request, Category $category){
        $this->editCategory->update($request, $category);
    }

    public function create(){
        return view('admin.pages.category.create');
    }
}
