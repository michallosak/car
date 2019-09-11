<?php

namespace App\Http\Controllers\Pages;

use App\Http\Requests\Car\EditCarRequest;
use App\Http\Requests\Pages\Car\CreateCarRequest;
use App\Http\Controllers\Controller;
use App\Model\Car\Car;
use App\Supports\Car\CreateCar;
use App\Supports\Car\EditCar;
use App\Supports\Car\GetCars;
use App\Supports\Category;

class CarController extends Controller
{
    private $createCar;
    private $editCar;
    private $getCars;
    private $category;

    public function __construct(Category $category, CreateCar $createCar, EditCar $editCar, GetCars $getCars)
    {
        $this->createCar = $createCar;
        $this->editCar = $editCar;
        $this->getCars = $getCars;
        $this->category = $category;
    }

    // All cars for hire
    public function index(){
        $cars = $this->getCars->carsForHire();

        return view('pages.cars.hire', compact('cars'));
    }

    public function create(){
        $categories = $this->category->index();
        return view('admin.pages.cars.create', compact('categories'));
    }

    // Add new car
    public function store(CreateCarRequest $request){
        $this->createCar->addCar($request);
        return redirect(route('added-cars'));
    }

    public function show($id){
        $car = $this->getCars->show($id);
        return view('pages.cars.show', compact('car'));
    }

    public function destroy(Car $car){
        $car->delete();
        return redirect(route('added_cars'));
    }

    public function edit($id){
        $car = $this->editCar->edit($id);
        return view('admin.pages.cars.edit', [
            'car' => $car,
            'categories' => $this->category->index()
        ]);
    }

    public function update(EditCarRequest $request, Car $car){
        $this->editCar->update($request, $car);
        return redirect(route('added_cars'));
    }

}
