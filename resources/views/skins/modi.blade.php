@extends('layouts.master')
@section('libreria')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<div class="row">
    <div class="col-m6">
        <h1>Formulario de modificacion de skins</h1>
    </div>
</div>
<div class="row">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Nuevo nombre</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre',$skin->nombre)}}">
          <small id="helpId" class="form-text text-muted">Ej: Tresh esta escrito mal, es Thresh.</small>
        </div>

        <div class="mb-3">
            <img src="{{asset('storage/'.$skin->img )}}" alt="" class="img-fluid" width="300">
          <label for="" class="form-label">Seleccionar archivo</label>
          <input type="file" class="form-control" name="img" id="" placeholder="" aria-describedby="fileHelpId">
          <div id="fileHelpId" class="form-text">Adjuntar imagen de la skin</div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nuevo precio</label>
            <input type="number"
              class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" required value="{{old('precio',$skin->precio)}}">
            <small id="helpId" class="form-text text-muted">Ej: 120,80,140.</small>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Nueva descripción</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" required value="{{old('precio',$skin->descripcion)}}">
          </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</div>

@endsection
