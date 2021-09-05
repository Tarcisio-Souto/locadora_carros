<?php

namespace App\Http\Controllers;

use App\Models\Rents;
use App\Models\User;
use App\Models\Cars;
use Illuminate\Http\Request;

class RentsController extends Controller
{

    public function index()
    {

        // Listando todas as locações:

        $rents = Rents::with(['carro', 'usuario'])->get();
        return view('rents.listAllRents', compact('rents'));


        //return view('rents.seachUser', compact('rents'));
    }


    public function searchUser(Request $request) {

        $findUser = User::where('id', '=' ,$request->txtIdUsuario)->first();
        return redirect()->route('rent.create', ['user' => $findUser]);

    }

    public function create(User $user) {

        $cars = Cars::all();
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
}
