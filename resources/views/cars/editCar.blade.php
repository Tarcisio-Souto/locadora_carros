<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Carro</title>
</head>
<body>

    <h1>Editar Carro</h1><br><br>

    <form action="{{ route('car.update', ['car' => $car->id]) }}" method="POST">
        @csrf
        @method('put')
        <label>Marca: <input type="text" value="{{ $car->brand }}" name="txtMarca"> </label><br><br>
        <label>Modelo: <input type="text" value="{{ $car->model }}" name="txtModelo"> </label><br><br>
        <label>Placa: <input type="text" value="{{ $car->board }}" name="txtPlaca"> </label><br><br>
        <label>Ano: <input type="text" value="{{ $car->year }}" name="txtAno"> </label><br><br>
        <input type="submit" value="Registrar">
    </form>

</body>
</html>
