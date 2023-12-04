@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Tallas de pantalones - Color del primer pantalón: {{ $colorPrimerPantalon=$pantalones->first()->color }}</h1>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            @if($pantalones->isNotEmpty())
                <a href="{{ route('admin.producto.edit', [$pantalones->first()->id]) }}" class="btn btn-primary">Editar</a>
                 <a href="{{ route('admin.producto.generarPDF', [$pantalones->first()->id]) }}" class="btn btn-primary">PDF</a>
            @endif

        </div>
    </div>
@stop

@section('content')
    <div class="table-responsive">
        <table id="productos" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>4</th>
                    <th>6</th>
                    <th>8</th>
                    <th>10</th>
                    <th>12</th>
                    <th>14</th>
                    <th>16</th>
                    <th>36</th>
                    <th>38</th>
                    <th>40</th>
                    <th>42</th>
                    <th>44</th>
                    <th>46</th>
                    <th>48</th>
                    <th>50</th>
                    <th>52</th>
                    <th>54</th>
                    <th>56</th>
                    <th>58</th>
                    <th>60</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($pantalones as $pantalon)
                    <tr>
                    <th>{{$pantalon->talla1}}</th>
                    <th>{{$pantalon->talla2}}</th>
                    <th>{{$pantalon->talla3}}</th>
                    <th>{{$pantalon->talla4}}</th>
                    <th>{{$pantalon->talla5}}</th>
                    <th>{{$pantalon->talla7}}</th>
                    <th>{{$pantalon->talla8}}</th>
                    <th>{{$pantalon->talla9}}</th>
                    <th>{{$pantalon->talla10}}</th>
                    <th>{{$pantalon->talla11}}</th>
                    <th>{{$pantalon->talla12}}</th>
                    <th>{{$pantalon->talla13}}</th>
                    <th>{{$pantalon->talla14}}</th>
                    <th>{{$pantalon->talla15}}</th>
                    <th>{{$pantalon->talla16}}</th>
                    <th>{{$pantalon->talla17}}</th>
                    <th>{{$pantalon->talla18}}</th>
                    <th>{{$pantalon->talla19}}</th>
                    <th>{{$pantalon->talla20}}</th>
                    <th>{{$pantalon->talla21}}</th>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>4</th>
                    <th>6</th>
                    <th>8</th>
                    <th>10</th>
                    <th>12</th>
                    <th>14</th>
                    <th>16</th>
                    <th>36</th>
                    <th>38</th>
                    <th>40</th>
                    <th>42</th>
                    <th>44</th>
                    <th>46</th>
                    <th>48</th>
                    <th>50</th>
                    <th>52</th>
                    <th>54</th>
                    <th>56</th>
                    <th>58</th>
                    <th>60</th>

                </tr>
            </tfoot>
        </table>
    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.js"></script>
<script>
new DataTable('#productos');


</script>

@stop
