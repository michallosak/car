<?php

namespace App\Http\Controllers;

use App\Supports\Category\GetCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $getCategory;

    public function __construct(GetCategory $getCategory)
    {
        $this->getCategory = $getCategory;
    }

    public function index()
    {
        $categories = $this->getCategory->index();
        return view('home', compact('categories'));
    }
}
