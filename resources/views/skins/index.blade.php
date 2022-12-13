@extends('layouts.master')
@section('libreria')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<h1>Lista de skins</h1>
<div class="row">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoria</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listaskin as $s)

                <tr class="">
                    <td scope="row">{{$s->id}}</td>
                    <td><img src="{{asset('storage/'.$s->img )}}"  width="200px" alt=""></td>
                    <td>{{$s->nombre}}</td>
                    <td>{{$s->precio}}</td>
                    <td>{{$s->descripcion}}</td>
                     <td>{{$s->nombreCat}}</td>


                    <td>
                        <a href="{{url('skins/modi/'.$s->id)}}" class="btn btn-warning">Modificar</a>
                    </td>
                    <td>
                        <a href="{{url('skins/deletes/'.$s->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @empty
                <tr>No hay datos...</tr>

                @endforelse
            </tbody>
        </table>
    </div>
    <a href="{{url('skins/imp')}}" class="btn btn-primary">Imprimir</a>
</div>
@endsection
