<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locações</title>
</head>
<body>

    <h1>Visualizar Locação</h1><br><br>

    <form action="{{ route('rent.edit', ['rent' => $rent->id]) }}" method="GET">
        <label> Locatário: <input type="text" value="{{ $rent->usuario->name }}" disabled> </label><br><br>
        <label> Carro: <input type="text" value="{{ $rent->carro->brand }}" disabled> </label><br><br>
        <label> Modelo: <input type="text" value="{{ $rent->carro->model }}" disabled> </label><br><br>
        <label> Placa: <input type="text" value="{{ $rent->carro->board }}" disabled> </label><br><br>
        <label> Ano: <input type="text" value="{{ $rent->carro->year }}" disabled> </label><br><br>
        <label> Data do Empréstimo: <input type="text" value="{{ date('d/m/Y' , strtotime($rent->created_at)) }}" disabled> </label><br><br>
        <label> Devolução: <input type="text" value="{{ date( 'd/m/Y' , strtotime($rent->dt_devolution)) }}" disabled> </label><br><br>
        <label> Preço: <input type="text" value="{{ $rent->price }}" disabled> </label><br><br>
        <input type="submit" value="Editar">
    </form><br>


</body>
</html>
