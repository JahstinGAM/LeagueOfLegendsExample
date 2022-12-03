@extends('layouts.master')

@section('content')
<div class="catalogo_titulo_container">
    <h1 class="catalogo_titulo">Lista de skins</h1>
</div>

<section class="catalogo_contenedor">
        @foreach ($listaskin as $s)

        <div class="catalogo_carta">
            <figure class="catalogo_figura catalogo_figura{{$s->id}}" style="background-image: url({{asset('storage/'.$s->img)}})">
                <div class="catalogo_parr">
                    <p class="catalogo_texto">{{$s->descripcion}}</p>
                </div>
                <div class="catalogo_nombre">
                    <p class="nombre">{{$s->nombre}}</p>
                    <p class="precio">{{$s->precio}} BOB</p>
                </div>
                <a href="#" class="btn_catalogo">
                    <p class="btn_catalogo_texto">
                        COMPRAR
                    </p>
                </a>
            </figure>
         </div>
         {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
         <script>
            var contador=1;
             $(()=>{
                 $('.catalogo_figura').hover(function(){
                    $('.catalogo_figura').css('background-image','linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(11, 11, 11, 0.65) 100%)');
                }, function(){
                    $('.catalogo_figura').css('background-image','linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(11, 11, 11, 0) 100%),url({{asset('storage/'.$s->img)}})');
                });
             });
         </script> --}}

        @endforeach
    </section>

@endsection
