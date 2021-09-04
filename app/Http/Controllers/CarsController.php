<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all();
        return view('cars.listAllCars', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.addCars');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Cars();
        $car->brand = $request->txtMarca;
        $car->model = $request->txtModelo;
        $car->board = $request->txtPlaca;
        $car->year = $request->txtAno;
        $car->save();

        return redirect()->route('car.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $car)
    {
        return view('cars.viewCar', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $car)
    {
        return view('cars.editCar', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $car)
    {
        $car->brand = $request->txtMarca;
        $car->model = $request->txtModelo;
        $car->board = $request->txtPlaca;
        $car->year = $request->txtAno;
        $car->save();

        return redirect()->route('car.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $car)
    {
        $car->delete();
        return redirect()->route('car.index');
    }
}
