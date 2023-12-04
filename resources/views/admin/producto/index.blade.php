@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PAGINA PRINCIPAL EDINAY</h1>
@stop

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <table id="productos" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Color</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pantalones as $pantalon)
                <tr>
                    <td>{{ $pantalon->color }}</td>
                    <!-- Agregar más celdas para otros atributos del producto -->

                    <td>
                        <!-- Botón "Ver Tallas" y "Eliminar" lado a lado -->
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('admin.producto.show', $pantalon->id) }}" class="btn btn-primary me-2">Ver Tallas</a>

                            <form action="{{ route('admin.producto.destroy', $pantalon) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Color</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script> new DataTable('#productos'); </script>
@stop

