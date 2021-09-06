<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos os Carros</title>
</head>
<body>

    <h1>Carros disponíveis</h1><br><br>

    @foreach ($cars as $car)
        <form action="{{ route('rent.carUserRent', ['car' => $car->id]) }}" method="POST">
            @csrf
            <label>Marca: <input type="text" name="txtMarca" value="{{ $car->brand }}" disabled> </label><br><br>
            <label>Modelo: <input type="text" name="txtModelo" value="{{ $car->model }}" disabled> </label><br><br>
            <label>Placa: <input type="text" name="txtPlaca" value="{{ $car->board }}" disabled> </label><br><br>
            <label>Ano: <input type="text" name="txtAno" value="{{ $car->year }}" disabled> </label><br><br>
            <input type="submit" value="Alugar"><br><br>
        </form>
        <hr><br>
    @endforeach

</body>
</html>
