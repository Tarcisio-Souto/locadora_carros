<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locação</title>
</head>
<body>

    <h1>Nova locação</h1><br>

    <label>Pesquise o usuário pelo ID</label><br><br>

    <form action="{{ route('rent.searchUser') }}" method="POST">
        @csrf
        <label>ID Usuário: <input type="text" name="txtIdUsuario"></label><br><br>
        <input type="submit" value="Pesquisar">
    </form><br><br><hr>

    <h1>Lista de Locações<em></em></h1><br><br>

    @for ($i = 0; $i < count($rents); $i++)
        <form action="{{ route('rent.show', ['rent' => $rents[$i]->id]) }}" method="GET">
            <label> Locatário: <input type="text" value="{{ $rents[$i]->usuario->name }}" disabled> </label><br><br>
            <label> Carro: <input type="text" value="{{ $rents[$i]->carro->brand }}" disabled> </label><br><br>
            <label> Devolução: <input type="text" value="{{ date( 'd/m/Y' , strtotime($rents[$i]->dt_devolution)) }}" disabled> </label><br><br>
            <input type="submit" value="Visualizar">
        </form><br>
        <form action="{{ route('rent.destroy', ['rent' => $rents[$i]->id]) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Deletar">
        </form><br><hr><br>
    @endfor


</body>
</html>
