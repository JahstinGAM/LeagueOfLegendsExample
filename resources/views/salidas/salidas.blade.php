@extends('layouts.master')
@section('libreria')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@endsection
@section('content')
<h1>Registro de salida de productos</h1>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="skin" class="form-label">Skin</label>
            <select class="form-select form-select-lg" name="skin" id="skin">
                <option selected>Seleccione una skin</option>
                @forelse ($listaskin as $s)
                    <option value="{{$s->id}}" data-precio="{{$s->precio}}">{{$s->nombre}}</option>
                @empty
                <option>No hay skins</option>
                @endforelse

            </select>
        </div>
    </div>
    <div class="col-md-6">
        <button class="btn btn-success" type="button" id="btnAdd">Agregar</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            @csrf
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Skin</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="">
                            <tr >
                                <td scope="row">R1C1</td>
                                <td>R1C2</td>
                                <td>R1C3</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Vender</button>
        </form>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(()=>{
            $('#btnAdd').click(
                function (e) {
                    let el = `
                    <tr >
                            <td>R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                        `;
                        $('tbody').append(el);
                }
            )
        });
    </script>
@endsection
