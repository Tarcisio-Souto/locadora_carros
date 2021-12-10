@extends('layouts.app')

@section('content')
    
    <div class="container conteudo">
            <h1>Locação</h1>

            <label>Usuário: {{ $user->name }}</label><br><br>

            <form action="{{ route('rent.store') }}" method="POST">
                @csrf                
                <input type="hidden" name="txtIdUsuario" value="{{ $user->id }}">

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Selecione o carro</label>
                    <select multiple class="form-control" name="txtCarro" id="exampleFormControlSelect2">
                        @foreach ($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->brand. " - " .$car->model. " - " .$car->year }}</option>
                         @endforeach
                    </select>
                </div><br><br>                

                <div class="form-group">
                    <label for="exampleInputEmail1">Data da Devolução</label>
                    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Informe a data de devolução">
                    <!--<small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Custo da Locação</label>
                    <input type="email" class="form-control" name="txtPreco" id="" aria-describedby="" placeholder="Informe o custo da devolução">
                    <!--<small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <input type="submit" value="Registrar">
            </form>
    </div>

@endsection

