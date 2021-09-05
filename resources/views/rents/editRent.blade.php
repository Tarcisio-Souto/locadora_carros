<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locações</title>
</head>
<body>

    <h1>Editar Locação</h1><br><br>

    <form action="{{ route('rent.update', ['rent' => $rent->id]) }}" method="POST">
        @csrf
        @method('put')
        <label> Locatário: <input type="text" value="{{ $rent->usuario->name }}" > </label><br><br>
        <input type="hidden" name="txtLocatario" value="{{ $rent->usuario->id }}">

        <select name="txtCarro">
            <option value="{{ $rent->carro->id }}" selected>{{ $rent->carro->brand. " - " .$rent->carro->model. " - " .$rent->carro->year}}</option>

            @foreach ($cars as $car)
                <option value="{{ $car->id }}">{{ $car->brand. " - " .$car->model. " - " .$car->year }}</option>
            @endforeach

        </select><br><br>

        <label> Data do Empréstimo: <input type="text" name="dt_emprestimo" value="{{ date('d/m/Y' , strtotime($rent->created_at)) }}" disabled> </label><br><br>
        <label> Devolução: <input type="date" name="txtDataDevolucao" value="{{ $rent->dt_devolution }}" > </label><br><br>
        <label> Preço: <input type="text" name="txtPreco" value="{{ $rent->price }}" > </label><br><br>
        <input type="submit" value="Registrar">
    </form><br>


</body>
</html>
