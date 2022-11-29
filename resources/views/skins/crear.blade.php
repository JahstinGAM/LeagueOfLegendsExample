@extends('layouts.master')
@section('libreria')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<div class="row">
    <div class="col-m6">
        <h1 class="text-center font-weight-bold">Formulario de insercion de productos</h1>
    </div>
</div>
<div class="row" >
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="" method="post" enctype="multipart/form-data" class="bg-dark">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label h4">Nombre de la skin</label>
          <input type="text"
            class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
          <small id="helpId" class="form-text text-muted">Ej: Ahri de Arcadia</small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label h4">Seleccione imagen</label>
          <input type="file" class="form-control" name="img" id="" placeholder="" aria-describedby="fileHelpId">
          <div id="fileHelpId" class="form-text">Adjuntar imagen de la skin</div>
        </div>
        <div class="mb-3">
          <label for="precio" class="form-label h4">Precio</label>
          <input type="number"
            class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Ej: 80, 30, 20</small>
        </div>

          <div class="mb-3">
            <label for="categoria_id" class="form-label h4">Categoriadel producto</label>
            <select class="form-select form-select-lg" name="categoria_id" id="categoria_id">
                <option selected>Seleccione una categoria</option>
                @foreach ($listacat as $cat)
                <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                @endforeach

            </select>
          </div>
        <button type="submit" class="btn btn-primary btn_campeones h4  " style="margin-bottom: 1rem">Guardar</button>
    </form>
</div>

@endsection
