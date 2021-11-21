<?php

namespace App\Http\Controllers;

use App\Models\brands;
use App\Models\Cars;
use App\Models\Models;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cars = DB::table('cars')
            ->join('models', 'cars.fk_model', '=', 'models.id')
            ->join('brands', 'brands.id', '=', 'models.fk_brand')
            ->select('*', 'cars.year')
            ->get();        
        
        return view('cars.listAllCars', compact('cars'));

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

        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ], ['image.image' => 'O arquivo selecionado não é uma imagem.',
             'image.mimes' => 'Extensões válidas: jpg, png, jpeg, gif ou svg',]);


        $car->brand = $request->txtMarca;
        $car->model = $request->txtModelo;
        $car->board = $request->txtPlaca;
        $car->year = $request->txtAno;

        # Adicionando a imagem 1
        if ($request->image1 != null) {
            $image1 = $request->image1->store('cars', 'public');
            $car->path_photo1 = $image1;
        } else {
            $car->path_photo1 = $car->path_photo1;
        }

        # Adicionando a imagem 2
        if ($request->image2 != null) {
            $image2 = $request->image2->store('cars', 'public');
            $car->path_photo2 = $image2;
        } else {
            $car->path_photo2 = $car->path_photo2;
        }

        # Adicionando a imagem 3
        if ($request->image3 != null) {
            $image3 = $request->image3->store('cars', 'public');
            $car->path_photo3 = $image3;
        } else {
            $car->path_photo3 = $car->path_photo3;
        }

        # Adicionando a imagem 4
        if ($request->image4 != null) {
            $image4 = $request->image4->store('cars', 'public');
            $car->path_photo4 = $image4;
        } else {
            $car->path_photo4 = $car->path_photo4;
        }

        # Adicionando a imagem 5
        if ($request->image5 != null) {
            $image5 = $request->image5->store('cars', 'public');
            $car->path_photo5 = $image5;
        } else {
            $car->path_photo5 = $car->path_photo5;
        }

        $car->status = 0;

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


    public function cars_available() {

        $cars = Cars::where('status', '=', '0')->get();
        return view('cars.cars_available', compact('cars'));

    }

    public function searchCars(Request $request) {

        $cars = Cars::where('brand', 'like', '%'.$request->txtMarca.'%')->get();
        return view('cars.listAllCars', compact('cars'));

    }

}
