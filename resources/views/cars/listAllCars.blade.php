@extends('layouts.app')

@section('content')

    <div class="container conteudo">
        <div class="row box-search-car">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form id="" action="{{ route('car.viewCars') }}" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <select name="txtMarca" class="form-control" required>
                                <option value="todos">Selecione a marca</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand['id'] }}">{{ $brand['brand'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="txtModelo" class="form-control" required>
                                <option value="todos">Selecione o modelo</option>
                                @foreach ($models as $model)
                                    <option value="{{ $model['id'] }}">{{ $model['model'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary pesq_car">Pesquisar</button>
                        </div>
                    </div>
                </form>
                <div class="col-md-1"></div>
            </div>
        </div>


        <br><br><br><br><br>


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


        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>

    @endsection
