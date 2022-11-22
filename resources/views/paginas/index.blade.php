@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <main class="main">
        <div class="item">
            <section class="video-presentacion">
                <div class="background">
                    <div class="background-video">
                        <video src="{{asset('storage/video/background-video.mp4')}}" class="background-video-mp4" autoplay muted loop></video>
                    </div>
                </div>
                <div class="foreground">
                    <div class="foreground-video">
                        <div class="foreground-video-container">
                            <video src="{{asset('storage/video/foreground-video.mp4')}}" autoplay muted loop></video>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="portfolio">
                <div class="portfolio_container container">
                    <h3 class="subtitle">MUCHO POR</h3>
                    <h1 class="title">DESCUBRIR</h1>
                    <div class="portfolio_cards">
                        <article class="portfolio_card">
                            <a href="#" class="portfolio_cta">
                                <img src="{{asset('storage/img/torneo.jpg')}}" alt="" class="portfolio_picture">
                                <div class="portfolio_text">
                                    <h3 class="portfolio_title">LA COPA DEL INVOCADOR DE LOL ESPORTS Y TIFFANY & CO.</h3>
                                </div>
                            </a>
                        </article>
                        <article class="portfolio_card">
                            <a href="#" class="portfolio_cta">
                                <img src="{{asset('storage/img/TeamAmp_campeon.jpg')}}" alt="" class="portfolio_picture">
                                <div class="portfolio_text">
                                    <h3 class="portfolio_title">MEXICO BUSCA OTRO ASCENSO</h3>
                                </div>
                            </a>
                        </article>
                        <article class="portfolio_card">
                            <a href="#" class="portfolio_cta">
                                <img src="{{asset('storage/img/guardianas estelares.jpg')}}" alt="" class="portfolio_picture">
                                <div class="portfolio_text">
                                    <h3 class="portfolio_title">ANTERIORMENTE EN GUARDIANAS DE LAS ESTRELLAS...</h3>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

        </div>

    </main>
    <div class="type-player-guide">
        <section class="style-section">
            <div class="style-wrapper">
                <div class="style-title">
                    <div class="style-text-container">
                        <div class="style-text">Cómo jugar</div>
                    </div>
                </div>
                <div class="style-content">
                    <div class="style-content-container">
                        <div class="style-map-container">
                            <div class="style-container">
                                <div class="style-container-inner">
                                    <div class="style-container-inner2">
                                        <div class="style-map-camera">
                                            <div class="style-layer">
                                                <img class="style-img" src="{{asset('storage/img/bg_mapa.png')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="style-content-croisv">
                            <div class="style-wrapper">
                                <h1 class="style-heading">
                                    <span class="style-intro">
                                        <div class="style-reveal-wrapper" style="animation-duration: 2800ms; animation-delay: 200ms; animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);">
                                            <span data-testid="playerguide:subtitle">Comienza tu</span>
                                        </div>
                                    </span>
                                    <strong class="style-title">
                                        <div class="style-reveal-wrapper" style="animation-duration: 2000ms; animation-delay: 100ms; animation-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);">
                                            <span data-testid="playerguide:title">leyenda</span>
                                        </div>
                                    </strong>
                                </h1>
                                <p class="style-description">¿Acabas de llegar a LoL? Consulta un resumen de lo básico para el modo de juego más popular.</p>
                            </div>
                            <div class="style-actions">
                                <a class="style-anchor" data-testid="playerguide:getstartedbutton" href="#">
                                    <span class="style-inner">
                                        <div class="style-reveal-wrapper" style="animation-duration: 1000ms; animation-delay: 150ms; animation-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);">
                                            <span class="style-background"></span>
                                        </div>
                                        <span class="style-label">Comenzar</span>
                                    </span>
                                    <div class="style-container">
                                        <canvas class="style-canvas" width="205" height="66" style="width: 205px; height: 66px; left: -6px; top: -6px;"></canvas>
                                    </div>
                                </a>
                                <a class="style-anchor-primary" href="https://signup.lan.leagueoflegends.com/es" data-testid="playerguide:playbutton">
                                    <span class="style-inner">
                                        <div class="style-reveal-wrapper" style="animation-duration: 1000ms; animation-delay: 250ms; animation-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);">
                                            <span class="style-background"></span>
                                        </div>
                                        <span class="style-label">Juega gratis</span>
                                    </span>
                                    <div class="style-container">
                                        <canvas class="style-canvas" width="205" height="66" style="width: 205px; height: 66px; left: -6px; top: -6px;"></canvas>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <main class="main">
        <div class="container">
            <section class="gallery container">
                <h2 class="gallery-title">VARIAS FORMAS DE JUGAR</h2>
                <div class="gallery_container">
                    <article class="gallery-card">
                        <img src="{{asset('storage/img/bg_nexo.jpg')}}" alt="" class="gallery_picture">
                        <div class="gallery-capa">
                            <h3>GRIETA DEL INVOCADOR</h3>
                            <p>EL MODO DE JUEGO MÁS POPULAR</p>
                            <p>Despeja tu calle, lánzate a épicos combates de equipo 5 contra 5 y destruye el nexo enemigo antes de que destruyan el tuyo.</p>
                        </div>
                    </article>
                    <article class="gallery-card">
                    <img src="{{asset('storage/img/bg_aram.jpg')}}" alt="" class="gallery_picture">
                        <div class="gallery-capa">
                            <h3>ARAM</h3>
                            <p>ALL RANDOM, ALL MID</p>
                            <p>Lucha sobre un puente helado con tu equipo aleatorio y carga hacia el nexo enemigo en este divertidísimo modo cinco contra cinco</p>
                        </div>
                    </article>
                    <article class="gallery-card">
                        <img src="{{asset('storage/img/bg_tft.jpg')}}" alt="" class="gallery_picture">
                        <div class="gallery-capa">
                            <h3>TEAMFIGHT TACTICS</h3>
                            <p>UN COMBATE TODOS CONTRA TODOS</p>
                            <p>Reúne a un equipo de campeones para que luchen en tu nombre. Sobrevive a siete oponentes para hacerte con la victoria.</p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    <div class="download-app">
        <section class="style-section">
            <div class="style-video-container">
                <div class="style-wrapper">
                    <video src="{{asset('storage/video/presentacion.mp4')}}" muted preload="none" loop="" playsinline="" autoplay="" class="style-video" data-object-fit="cover" data-object-position="center top"></video>
                </div>
            </div>
            <div class="style-button-container">
                <a class="style-anchor" href="#">
                    <span class="style-inner">
                        <div class="style-reveal-wrapper">
                            <span class="style-background"></span>
                        </div>
                        <span class="style-label">Juega gratis</span>
                    </span>
                </a>
            </div>
        </section>
    </div>

</body>
</html>
@endsection
