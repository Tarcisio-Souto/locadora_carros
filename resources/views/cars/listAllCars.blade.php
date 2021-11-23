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
            <div class="row show_cars">
                <div class="col-md-12">
                    <form action="{{ route('car.show', ['car' => $car->id]) }}" method="GET">
                        <div class="row">
                            <div class="col-md-3 photo_car_view">
                                <img src="{{ url("storage/{$car->path_photo1}") }}" />            
                            </div>
                            <div class="col-md-7 desc_car_view ">
                                <p>Marca: <span>{{ $car->brand }}</span></p>
                                <p>Modelo: <span>{{ $car->model }}</span></p>
                                <p>Ano: <span>{{ $car->year }}</span></p>
                                <p>Placa: <span>{{ $car->board }}</p>
                            </div>
                        </div>
                        <input type="submit" class="btnVisualizar" value="Visualizar"><br><br>
                    </form>
                    <form action="{{ route('car.destroy', ['car' => $car->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btnDeletar" value="Deletar">
                    </form>
                </div>
            </div>            
            <hr><br>
        @endforeach        

    </div>
    
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>

    @endsection
