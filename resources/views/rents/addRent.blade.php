<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locação</title>
</head>
<body>

    <h1>Locação</h1><br><br>

    <label>Usuário: {{ $user->name }}</label><br><br>

    <form action="{{ route('rent.store') }}" method="POST">
        @csrf
        <input type="hidden" name="txtIdUsuario" value="{{ $user->id }}">
        <select name="txtCarro">
            <option value="" selected>Selecione o carro</option>

            @foreach ($cars as $car)
                <option value="{{ $car->id }}">{{ $car->brand. " - " .$car->model. " - " .$car->year }}</option>
            @endforeach

        </select><br><br>

        <label>Data da devolução: <input type="date" name="txtDataDevolucao"></label><br><br>
        <label>Custo da locação: </label><input type="text" name="txtPreco"><br><br>
        <input type="submit" value="Registrar">
    </form>

</body>
</html>
