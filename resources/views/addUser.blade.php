@extends('layouts.app')

@section('content')

    <p>Cadastro de Usuário</p>

    <div class="container-fluid">



    </div>


    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label>Nome: <input type="text" name="txtNome"> </label><br><br>
        <label>E-mail: <input type="email" name="txtEmail"> </label><br><br>
        <label>Senha: <input type="password" name ="txtSenha"> </label><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
