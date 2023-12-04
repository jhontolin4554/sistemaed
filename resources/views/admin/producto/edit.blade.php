@extends('adminlte::page')

@section('title', 'Editar Tallas de Pantalones')

@section('content_header')
    <h1>EDITAR TALLAS DE PANTALONES</h1>
@stop

@section('content')
    <form action="{{route('admin.producto.update', [$pantalones->first()->id]) }}" method="POST">
        @csrf
        <div class="row">

                <div class="col-md-3">
                    <label for="talla 4">Talla 4</label>
                    <input type="text" id="talla4" name="talla4" class="form-control" value="{{ $pantalones->first()->talla1}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 6">Talla 6</label>
                    <input type="text" id="talla6" name="talla6" class="form-control" value="{{ $pantalones->first()->talla2}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 8">Talla 8</label>
                    <input type="text" id="talla8" name="talla8" class="form-control" value="{{ $pantalones->first()->talla3}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 10">Talla 10</label>
                    <input type="text" id="talla10" name="talla10" class="form-control" value="{{ $pantalones->first()->talla4}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 12">Talla 12</label>
                    <input type="text" id="talla12" name="talla12" class="form-control" value="{{ $pantalones->first()->talla5}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 14">Talla 14</label>
                    <input type="text" id="talla14" name="talla14" class="form-control" value="{{ $pantalones->first()->talla7}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 16">Talla 16</label>
                    <input type="text" id="talla16" name="talla16" class="form-control" value="{{ $pantalones->first()->talla8}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 36">Talla 36</label>
                    <input type="text" id="talla36" name="talla36" class="form-control" value="{{ $pantalones->first()->talla9}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 38">Talla 38</label>
                    <input type="text" id="talla38" name="talla38" class="form-control" value="{{ $pantalones->first()->talla10}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 40">Talla 40</label>
                    <input type="text" id="talla40" name="talla40" class="form-control" value="{{ $pantalones->first()->talla11}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 42">Talla 42</label>
                    <input type="text" id="talla42" name="talla42" class="form-control" value="{{ $pantalones->first()->talla12}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 44">Talla 44</label>
                    <input type="text" id="talla44" name="talla44" class="form-control" value="{{ $pantalones->first()->talla13}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 46">Talla 46</label>
                    <input type="text" id="talla46" name="talla46" class="form-control" value="{{ $pantalones->first()->talla14}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 48">Talla 48</label>
                    <input type="text" id="talla48" name="talla48" class="form-control" value="{{ $pantalones->first()->talla15}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 50">Talla 50</label>
                    <input type="text" id="talla50" name="talla50" class="form-control" value="{{ $pantalones->first()->talla16}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 52">Talla 52</label>
                    <input type="text" id="talla52" name="talla52" class="form-control" value="{{ $pantalones->first()->talla17}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 54">Talla 54</label>
                    <input type="text" id="talla54" name="talla54" class="form-control" value="{{ $pantalones->first()->talla18}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 54">talla 56</label>
                    <input type="text" id="talla56" name="talla56" class="form-control" value="{{ $pantalones->first()->talla19}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 58">talla 58</label>
                    <input type="text" id="talla58" name="talla58" class="form-control" value="{{ $pantalones->first()->talla20}}">
                </div>
                <div class="col-md-3">
                    <label for="talla 60">talla 60</label>
                    <input type="text" id="talla60" name="talla60" class="form-control" value="{{ $pantalones->first()->talla21}}">
                </div>

        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
@stop

@section('css')
    <!-- Estilos adicionales -->
@stop

@section('js')
    <!-- Scripts adicionales -->
@stop
