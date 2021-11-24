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

        <div class="row">
            <div class="col-md-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="table-secondary">
                                    <th></th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            @foreach ($cars as $car)
                                <tbody>
                                    <tr class="table-light">
                                        <td><img src="{{ url("storage/{$car->path_photo1}") }}" style="width:150px;" /></td>
                                        <td><span>{{ $car->brand }}</span></td>
                                        <td><span>{{ $car->model }}</span></td>
                                        <td><span>{{ $car->year }}</span></td>
                                        <td><span class='status_tag'>{{ $car->status == 0 ? 'Disponível' : 'Indisponível' }}</span></td>
                                        <td style="width: 20%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a href="#" class="table-link danger">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>

    @endsection
