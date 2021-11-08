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
                    <!--
                        <div class="input-group">
                            <input class="form-control inputSearch" id="txtMarca" name="txtMarca" type="text"
                                placeholder="Informe a marca do carro" aria-label="Search" style="border-right: none;" required>
                            <div class="input-group-append">
                                <div class="input-group-text" style="background-color: #FFF">
                                    <input type="submit" class="btnPesquisar" value="Pesquisar">
                                </div>
                            </div>                        
                        </div>
                        -->

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

        <main>
            @yield('content3')
        </main>

        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>

    @endsection
