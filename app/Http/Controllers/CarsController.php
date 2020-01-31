<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    //
  

    public function index() {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }
}
