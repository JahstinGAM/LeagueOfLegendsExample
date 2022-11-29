@extends('layouts.master')
@section('libreria')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<div class="row" >
    <div class="col-m6">
        <h1 class="text-center font-weight-bold">Formulario de inserción de categorias</h1>
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
    <form action="" method="post" enctype="multipart/form-data" class="bg-dark">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label h4">Nombre</label>
          <input type="text"
            class="form-control g-secondary" name="nombre" id="" aria-describedby="helpId" placeholder="" required value="{{old('nombre')}}">
          <small id="helpId" class="form-text text-muted">Ej: Ahri,Darius,Lux,etc </small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label h4">Seleccionar imagen</label>
          <input type="file" class="form-control bg-" name="img" id="" placeholder="" aria-describedby="fileHelpId">
          <div id="fileHelpId" class="form-text h4">Adjuntar archivo del campeon.</div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom: 1rem">Guardar</button>
    </form>
</div>

@endsection
