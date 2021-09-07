<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizando Carro</title>
</head>
<body>

    <h1>Visualizando Carro</h1><br><br>

    <form action="{{ route('car.edit', ['car' => $car->id]) }}" method="GET">
        <label>Marca: <input type="text" value="{{ $car->brand }}" disabled> </label><br><br>
        <label>Modelo: <input type="text" value="{{ $car->model }}" disabled> </label><br><br>
        <label>Placa: <input type="text" value="{{ $car->board }}" disabled> </label><br><br>
        <label>Ano: <input type="text" value="{{ $car->year }}" disabled> </label><br><br>
        <input type="submit" value="Editar">
    </form>

</body>
</html>