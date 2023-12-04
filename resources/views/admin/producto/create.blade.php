@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>Crear Producto</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Crear Producto</h3>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
                        <form action="{{ route('admin.producto.store') }}" method="POST">
                            @csrf



                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" id="color" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control">
                                    <option value="1">Elija</option>
                                    <option value="2">PANTALON FINO CON PINZA</option>
                                    <option value="3">PANTALON FINO SIN PINZA</option>
                                    <option value="4">PANTALON FINO CHUPIN</option>
                                    <option value="5">PANTALON NORMAL CON PINZA</option>
                                    <option value="6">PANTALON NORMAL SIN PINZA</option>
                                    <option value="7">PANTALON NORMAL CHUPIN</option>
                                    <!-- Agrega más opciones según sea necesario -->
                                </select>
                            </div>



                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

