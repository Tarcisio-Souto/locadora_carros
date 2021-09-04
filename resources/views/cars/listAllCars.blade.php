<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos os Carros</title>
</head>
<body>

    <h1>Cadastrar Carro</h1><br><br>

    <form action="{{ route('car.create') }}" method="GET">
        <input type="submit" value="Novo">
    </form>
    <br><br><br>

    <h1>Lista de carros</h1><br><br>

    @foreach ($cars as $car)
        <form action="{{ route('car.show', ['car' => $car->id]) }}" method="GET">
            <label>Marca: <input type="text" value="{{ $car->brand }}" disabled> </label><br><br>
            <label>Modelo: <input type="text" value="{{ $car->model }}" disabled> </label><br><br>
            <label>Placa: <input type="text" value="{{ $car->board }}" disabled> </label><br><br>
            <label>Ano: <input type="text" value="{{ $car->year }}" disabled> </label><br><br>
            <input type="submit" value="Visualizar"><br><br>
        </form>
        <form action="{{ route('car.destroy', ['car' => $car->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Deletar">
        </form>
        <hr><br>
    @endforeach

</body>
</html>
