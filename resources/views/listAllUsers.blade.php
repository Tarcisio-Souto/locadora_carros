@extends('layouts.app')

@section('content')

<div class="container conteudo">

    <div class="row">
        <div class="col-md-12">
            <p>Pesquisar Usuário</p>
            <form action="{{ route('user.viewUser') }}" method="GET">
                <label>Digite o ID do usuário: <input type="text" name="txtUsuario"> </label><br><br>
                <input type="submit" value="Pesquisar"><br><br>
            </form>
        </div>
    </div>




    <h1>Lista de usuários</h1>

    <form action="{{ route('user.create') }}" method="GET">
        <input type="submit" value="Novo">
    </form>
    <br><br><br>

    @foreach ($users as $user)
        <form action="{{ route('user.show', ['user' => $user->id]) }}" method="GET">
            <label>Nome: <input type="text" value="{{ $user->name }}" disabled> </label><br><br>
            <label>E-mail: <input type="email" value="{{ $user->email }}" disabled> </label><br><br>
            <input type="submit" value="Visualizar"><br><br>
        </form>
        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Deletar">
        </form>
        <hr><br>
    @endforeach
</div>

@endsection
