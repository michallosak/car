<?php

namespace App\Http\Controllers\Search;

use App\Supports\Search\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private $search;
    public function __construct(Search $search)
    {
        $this->search = $search;
    }

    public function index(Request $request){
        $cars = $this->search->search($request);
        return view('pages.cars.hire', compact('cars'));
    }
}
