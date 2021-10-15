<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('listAllUsers', [
            'users' => DB::table('users')->paginate(2)
        ]);

        #$users = User::all();
        #return view('listAllUsers', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $msgErros = [];

        if (intval($request->txtIdade) < 18) {
            $msg = ' A idade não pode ser menor do que 18';
            array_push($msgErros, $msg);
        }

        if ($request->txtSenha != $request->txtConfirmSenha) {
            $msg = 'As senhas não são iguais';
            array_push($msgErros, $msg);
        }


        if (count($msgErros) > 0) {

            return Redirect::back()->withErrors([$msgErros])->withInput();
        } else {

            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            ], ['image.image' => 'O arquivo selecionado não é uma imagem.',
                 'image.mimes' => 'Extensões válidas: jpg, png, jpeg, gif ou svg',]);

            $address = new Address();
            $address->street = $request->txtLogradouro;
            $address->number = $request->txtNumero;
            $address->district = $request->txtBairro;
            $address->reference = $request->txtReferencia;
            $address->state = $request->txtEstado;
            $address->zipcode = $request->txtCep;
            $address->country = $request->txtPais;
            $address->save();

            # Obter o ID do último registro da tabela:
            $fk_address = DB::getPdo()->lastInsertId();

            $user = new User();
            $user->name = $request->txtNome;
            $user->email = $request->txtEmail;
            $user->password = Hash::make($request->txtSenha);
            $user->tel_celular = $request->txtCelular;
            $user->naturalidade = $request->txtNaturalidade;
            $user->sexo = $request->txtSexo;
            $user->cpf = $request->txtCpf;
            $user->email = $request->txtEmail;
            $user->rg = $request->txtRg;
            $user->idade = $request->txtIdade;
            $user->fk_endereco = $fk_address;

            # Adicionando a imagem
            if ($request->image != null) {
                $image = $request->image->store('users', 'public');
                $user->path_photo = $image;
            } else {
                $user->path_photo = "";
            }

            $user->save();

            return redirect()->route('user.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('viewUser', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('editUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->txtNome;
        $user->email = $request->txtEmail;
        $user->password = $request->txtSenha;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }

    public function searchUser(Request $req)
    {

        $findUser = User::find($req->txtUsuario);
        return view('viewUser', ['user' => $findUser]);
    }
}
