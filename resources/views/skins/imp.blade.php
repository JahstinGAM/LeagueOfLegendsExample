@extends('layouts.imp')


@section('content')
<h1>Lista de skins</h1>
    <p>Fecha:{{$today}}</p>
    <p>Hora:{{$mytime}}</p>
    <div class="row">
        <div class="table-responsive" >
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Categoria</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaskin as $s)

                    <tr class="">
                        <td scope="row">{{$s->id}}</td>
                        <td class="relleno_imp"><img src="{{asset("storage/".$s->img )}}"  width="200px" alt=""></td>
                        <td class="relleno_imp">{{$s->nombre}}</td>
                        <td class="relleno_imp">{{$s->precio}}</td>
                        <td class="relleno_imp">{{$s->descripcion}}</td>
                         <td class="relleno_imp">{{$s->nombreCat}}</td>



                    </tr>
                    @empty
                    <tr>No hay datos...</tr>

                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
