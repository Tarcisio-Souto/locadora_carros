<?php

namespace App\Http\Controllers;

use App\Models\Rents;
use App\Models\User;
use App\Models\Cars;
use Illuminate\Http\Request;
use DB;

class RentsController extends Controller
{

    public function index()
    {

        // Listando todas as locações:

        $rents = DB::table('rents')
        ->join('cars', 'cars.id', '=', 'rents.fk_car')
        ->join('users', 'users.id', '=', 'rents.fk_user')
        ->join('models', 'models.id', '=', 'cars.fk_model')
        ->select('*', 'cars.*', 'rents.*')
        ->get();

        return view('rents.listAllRents', compact('rents'));

        //return view('rents.seachUser', compact('rents'));
    }


    public function searchUser(Request $request) {

        $findUser = User::where('id', '=' ,$request->txtIdUsuario)->first();
        return redirect()->route('rent.create', ['user' => $findUser]);

    }

    public function create(User $user) {

        $cars = Cars::where('status', '=', '0')->get();
        return view('rents.addRent', ['user' => $user, 'cars' => $cars]);

    }

    public function store(Request $request)
    {
        $rent = new Rents();
        $rent->fk_user = $request->txtIdUsuario;
        $rent->fk_car = $request->txtCarro;
        $rent->price = $request->txtPreco;
        $rent->dt_devolution = $request->txtDataDevolucao;
        $rent->save();

        /* Adicionando o status "1" ao carro, indicando indisponibilidade */
        Cars::where('id', '=', $request->txtCarro)->update(['status' => 1]);

        return redirect()->route('rent.index');

    }

    public function show(Rents $rent)
    {
        $rent = Rents::with(['carro', 'usuario'])->find($rent->id);
        return view('rents.viewRent', ['rent' => $rent]);
    }

    public function edit(Rents $rent)
    {
        $rent = Rents::with(['carro', 'usuario'])->find($rent->id);
        $cars = Cars::all();
        return view('rents.editRent', ['rent' => $rent, 'cars' => $cars]);
    }

    public function update(Request $request, Rents $rent)
    {

        $rent->fk_user = $request->txtLocatario;
        $rent->fk_car = $request->txtCarro;
        $rent->price = $request->txtPreco;
        $rent->dt_devolution = $request->txtDataDevolucao;
        $rent->save();

        return redirect()->route('rent.index');

    }

    public function destroy(Rents $rent)
    {
        $rent->delete();
        return redirect()->route('rent.index');
    }

    public function carUserRent(Cars $car) {

        return view('rents.addRentSelectUser', compact('car'));

    }

    public function searchUserSelectedCar(Request $request, Cars $car) {

        $findUser = User::where('id', '=' ,$request->txtIdUsuario)->first();
        return redirect()->route('rent.createRentSelectedUserCar', ['user' => $findUser, 'car' => $car]);

    }

    public function createRentSelectedUserCar(User $user, Cars $car) {

        return view('rents.addRentSelectedUserCar', ['user' => $user, 'car' => $car]);

    }

}
