@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Actualizaciones de Juego</title>
</head>
<body>
    <section>
      <div class="card_espaciado">
        <div class="card_container_NV">
            <article class="card_NV">
                <img src="{{asset('storage/img/actu1.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>¡Libera tu lado salvaje con estas ofertas!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Elfo - hace 5 días</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu2.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>¡Ofertas para conquistar la grieta!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Elfo - hace 2 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu3.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Actualizando TFT 12.22: ¡Finaliza la exploracion!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">hace 2 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu4.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Actualizando LoL 12.22:¡Inicia la pretemporada!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">hace 2 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu5.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Lanzamiento de Eternos Serie 2</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">hace 2 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu6.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Notas de la version 12.22 de Teamfight Tactics</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Rodger "Riot Prism" Caudill - hace 3 semanas</h2>
                </div>
            </article>
        </div>

        <div class="card_container2_NV" id="card_container2">
            <article class="card_NV">
                <img src="{{asset('storage/img/actu7.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Notas de la version 12.22</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Riru - hace 3 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu8.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Pretemporada 2023: Presentacion de jugabilidad</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">hace 3 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu9.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>¡Las emociones explotan con estas ofertas!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Elfo - hace 3 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu10.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>ARA, 2023: Avance</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Riru, Riot Maxw3ll - hace 3 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu11.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>Resumen de jugabilidad de ¡Mounstros al Ataque!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Rodger "Riot Prism" Caudill - hace 3 semanas</h2>
                </div>
            </article>

            <article class="card_NV">
                <img src="{{asset('storage/img/actu12.jpg')}}" alt="" class="card_picture_NV">
                <div class="actuali">
                    <h2>¡Ciclón de ofertas!</h2>
                </div>
                <div class="card_text_NV">
                    <h2 class="text">Riot Elfo - hace 4 semanas</h2>
                </div>
            </article>
        </div>
        <div class="btn_NV">
          <button href="#" id="btnMas" class="btn_cm"> CARGAR MÁS</button>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
        <script>
          $('#card_AB1').hide();
          $('#card_AB2').hide();
          var conta = 0;
          $(()=>{
            $('#btnMas').click(function () {
                if (conta == 0) {
                    $("#card_container2").show(700);
                    conta++;
                }else{
                    if(conta == 1){
                        $("#card_container3").show(700);
                        $('#btnMas').stop();
                    }
                }
            })
        })
    </script>
    </section>
</body>
</html>
@endsection
