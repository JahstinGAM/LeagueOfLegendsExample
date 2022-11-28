@extends('layouts.master')

@section('content')
<h1>Lista de campeones</h1>
<div class="row">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listaCat as $cat)
                <tr class="">
                    <td scope="row">{{$cat->id}}</td>
                    <td><img src="{{asset('storage/'.$cat->img )}}"  width="200px" alt=""></td>
                    <td>{{$cat->nombre}}</td>
                    <td>
                        <a href="{{url('categorias/mod/'.$cat->id)}}" class="btn btn-warning">Modificar</a>
                    </td>
                    <td>
                        <a href="{{url('categorias/delete/'.$cat->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @empty
                <tr>No hay datos...</tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
