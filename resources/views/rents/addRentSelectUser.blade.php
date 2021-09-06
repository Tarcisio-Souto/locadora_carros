<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos os Carros</title>
</head>
<body>

    <h1>Nova locação</h1><br>

    <label>Pesquise o usuário pelo ID</label><br><br>

    <form action="{{ route('rent.searchUserSelectedCar', ['car' => $car->id]) }}" method="POST">
        @csrf
        <label>ID Usuário: <input type="text" name="txtIdUsuario"></label><br><br>
        <input type="submit" value="Pesquisar">
    </form><br><br><hr>

    <p>Carro Selecionado:</p><br>

    <label>Marca: <input type="text" name="txtMarca" value="{{ $car->brand }}" disabled> </label><br><br>
    <label>Modelo: <input type="text" name="txtModelo" value="{{ $car->model }}" disabled> </label><br><br>
    <label>Placa: <input type="text" name="txtPlaca" value="{{ $car->board }}" disabled> </label><br><br>
    <label>Ano: <input type="text" name="txtAno" value="{{ $car->year }}" disabled> </label><br><br>


</body>
</html>
