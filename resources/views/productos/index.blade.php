@extends('layouts.master')

@section('content')
<h1>Lista de prodcutos</h1>
<div class="row">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoria</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listaprod as $p)
                <tr class="">
                    <td scope="row">{{$p->id}}</td>
                    <td><img src="{{asset('storage/'.$p->img )}}"  width="200px" alt=""></td>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->stock}}</td>
                    <td>{{$p->categoria_id}}</td>
                    <td>
                        <a href="{{url('categorias/mod/'.$p->id)}}" class="btn btn-warning">Modificar</a>
                    </td>
                    <td>
                        <a href="{{url('categorias/delete/'.$p->id)}}" class="btn btn-danger">Eliminar</a>
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
