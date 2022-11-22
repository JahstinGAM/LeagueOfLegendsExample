@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones-League of legends</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="body_campeones">
    <main class="main">
        <!--Destacado-->
        <section class="destacado_contenedor">
            <div class="destacado">
                <div class="figura_destacado">
                    <h1 class="destacado_titulo">NILAH</h1>
                </div>
                <div class="actualizacion">
                    <h5>Actualizaciones del juego</h3>
                </div>
                <div class="actualizacion_desc">
                   <h1> Campeón destacado: Nilah</h2>
                </div>
            </div>
        </section>
        <!--Titulo-->
        <section class="titulo_contenedor">
            <div class="titulo">
                <h3 class="titulo_primero">ESCOGE TU</h1>
                <h1 class="titulo_segundo">CAMPEÓN</h1>
                <p class="titulo_parr">
                    Con más de 140 campeones, encontrarás la combinación perfecta para tu estilo de juego. Dominar uno, o dominarlos a todos.
                </p>
            </div>
        </section>
        <!--Reinos-->
        <section class="regiones_contenedor">
            <div class="regiones">
                <div class="regiones_figura regiones_figura1">
                    <h1 class="regiones_titulo">AGUAS TURBIAS</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/aguasturbias.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Aguas Turbias es una ciudad portuaria muy particular enclavada en el archipiélago de las Islas de la Llama Azul. Alberga cazadores de serpientes, bandas portuarias y contrabandistas de todas partes del mundo. Aquí se puede hacer una fortuna en un instante, y los sueños de cualquiera pueden quedar hechos añicos con la misma rapidez. Para quienes huyen de la justicia, las deudas o son perseguidos, Aguas Estancadas es una ciudad para comenzar de nuevo; a nadie le importa tu pasado en sus retorcidas calles. Pese a todo y día tras día, el alba revela los cadáveres de viajeros despistados flotando en el muelle con las carteras vacías y los gaznates cercenados...

                        Aunque se trata de un lugar extremadamente peligroso, en Aguas Estancadas abundan las oportunidades, pues no se ciñe a las encorsetadas normas comerciales ni gubernamentales. Mientras se tenga el dinero, no hay prácticamente nada que no se pueda comprar aquí, desde hextech ilegal hasta el favor de los amos del crimen locales.

                        Tras la expulsión del último "rey de los piratas" de Aguas Estancadas, la ciudad ha iniciado un periodo de transición mientras los capitanes más notables tratan de acordar su futuro. Pero siempre que haya navíos y tripulaciones disponibles para navegar, Aguas Estancadas seguirá siendo uno de los lugares más coloridos y mejor conectados de toda Runaterra.
                    </p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura2">
                    <h1 class="regiones_titulo">DEMACIA</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/demacia.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Demacia es un reino poderoso y honesto con una prestigiosa historia militar, y su gente siempre ha valorado profundamente los ideales de justicia, honor y deber, que coexisten con un feroz orgullo patriota. A pesar de sus principios nobles, esta nación autosuficiente se ha ido aislando cada vez más con el paso de los siglos.

                        Ahora Demacia se halla sumida en el caos y los disturbios.

                        La capital, la Gran ciudad de Demacia, se fundó para servir como refugio de la magia tras la pesadilla que supusieron las Guerras Rúnicas y se blindó con petricita, un tipo de piedra blanca muy inusual que absorbe la energía mágica. Desde entonces, la familia real quedó al cargo de la defensa de los pueblos, ciudades, tierras, bosques y montañas circundantes, unos territorios muy ricos en recursos minerales.

                        No obstante, tras la repentina muerte del rey Jarvan III, las familias nobles de la región aún tienen que aceptar a su sucesor en el trono, el joven príncipe Jarvan.

                        La desconfianza hacia todos aquellos que habitan más allá de los tan vigilados límites de la ciudad va en constante aumento y, durante estos tiempos difíciles, muchos antiguos aliados buscan protección en otros rincones. Los hay que creen que la edad de oro de Demacia ya ha terminado y que, si no se adapta al nuevo mundo (cosa que muchos consideran imposible), el declive del reino será inevitable.

                        Al fin y al cabo, las amplias reservas de petricita de la nación no servirán para proteger a Demacia de sí misma.</p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura3">
                    <h1 class="regiones_titulo">EL VACÍO</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/vacio.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Comenzando a gritos su existencia junto al nacimiento del universo, el Vacío es una manifestación de la nada incognoscible que habita más allá. Es una fuerza de hambre insaciable que espera durante eones hasta que sus maestros, los misteriosos Vigilantes, marquen el momento de la destrucción definitiva.

                        Ser un mortal tocado por este poder es sufrir un atisbo agónico de la irrealidad eterna, suficiente para minar incluso la mente más fuerte. Los habitantes del reino del Vacío son criaturas, a menudo con una sensibilidad limitada, pero con un objetivo singular: conducir a Runaterra a su desaparición total.</p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura4">
                    <h1 class="regiones_titulo">FRELJORD</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/freljord.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Freljord es un lugar duro e implacable en el que la gente nace lista para luchar por la supervivencia contra todo pronóstico.

                        Las tribus de Freljord hacen gala de un orgullo y una independencia feroces, aunque sus vecinos de Valoran suelen considerarlos salvajes, brutos e incluso primitivos, dado que desconocen las tradiciones ancestrales que los moldearon. Hace miles de años, la alianza entre las hermanas Avarosa, Serylda y Lissandra se deshizo en una guerra que amenazó la existencia de toda Runaterra y sumió las islas del norte en un invierno incesante y caótico. Ahora solo los mortales más extraordinarios que parecen inmunes a los estragos del fuego o del hielo parecen destinados a guiar al resto, o al menos capaces.

                        Pese a los esfuerzos de la Guardia de Hielo, los mitos y las leyendas resisten al paso de los dioses antiguos, los yetis enigmáticos y los chamanes caminantes espirituales. Los saqueadores de la Garra Invernal llegan más y más lejos cada año que pasa, y el hostigamiento no cesa en las fronteras de Demacia por el sur y las de Noxus por el este. Por último, en busca de un futuro más pacífico, las tribus y los clanes rebeldes independientes han empezado a ofrecer su lealtad a Ashe, la joven reina de los avarosanos.

                        Pese a todo, los presagios son desalentadores. La guerra se cierne sobre Freljord y nadie podrá escapar de ella.
                    </p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura5">
                    <h1 class="regiones_titulo">JONIA</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/jonia.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Jonia, rodeada por traicioneros mares, está formada por una serie de provincias aliadas desperdigadas a lo largo y ancho de un inmenso archipiélago que muchos conocen como las Tierras Primigenias. El equilibrio es una de las piedras angulares de la cultura jonia, por lo que los límites que separan el mundo material del espiritual son aquí más difusos que en el resto de Runaterra, especialmente en las profundidades de sus bosques y lo alto de sus cumbres.

                        A pesar de que la magia del lugar es caprichosa y sus habitantes, místicos y peligrosos, Jonia prosperó durante siglos. Los monasterios de guerreros y las milicias provinciales, así como la propia naturaleza, eran suficiente defensa frente al mundo exterior.

                        Sin embargo, esta paz llegó a su fin hace doce años, cuando Noxus atacó las Tierras Primigenias. Una infinidad de huestes del imperio arrasó el territorio jonio. Sus gentes tardaron años en expulsarlas, y el número de víctimas fue terrible.

                        Ahora en Jonia reina una paz inestable. Las diferentes reacciones ante la guerra han dividido a la región: por un lado, algunos grupos, como los monjes Shojin o los Kinkou, buscan volver al aislamiento y el pacifismo previos a la invasión, y recuperar las tradiciones pastorales. No obstante, otros grupos más radicalizados, como la hermandad Navori y la Orden de la Sombra, buscan militarizar la magia de sus tierras para forjar una nación unida capaz de vengarse de Noxus.

                        El destino de Jonia pende de un inestable hilo que pocos están dispuestos a cortar, pero cuya fragilidad todos perciben.
                    </p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura6">
                    <h1 class="regiones_titulo">CIUDAD DE BANDLE</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/bandle.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Hay muchas opiniones contradictorias sobre dónde se sitúa el hogar de los yordles, aunque son solo unos pocos mortales los que aseguran haber cruzado los senderos invisibles que conducen a una tierra de un misticismo peculiar más allá del reino material. Se habla de un lugar donde la magia es libre, donde los imprudentes pueden ser tentados por una miríada de maravillas, y quedar atrapados en un sueño...
                        Se dice que en Ciudad de Bandle las sensaciones son más vívidas para quienes no son yordles. Los colores son más brillantes. La comida y la bebida intoxican los sentidos durante años y, una vez probadas, son imposibles de olvidar. La luz del sol es de un dorado perenne, las aguas son cristalinas y cada cosecha es abundante. Es posible que algunas de esas afirmaciones sean ciertas, o quizá ninguna lo sea, puesto que nadie es capaz de ponerse de acuerdo sobre lo visto allí.</p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura7">
                    <h1 class="regiones_titulo">ISLAS DE LA SOMBRA</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/islas.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Hubo una época en la que estas tierras acogieron a una civilización noble y cultivada conocida por sus aliados y emisarios como las Islas Bendecidas. Sin embargo, hace más de mil años, un cataclismo mágico sin precedentes hizo añicos la barrera que protegía el reino material del espiritual y lo convirtió en uno solo... lo que condenó a todos los seres vivos al instante.

                        En la actualidad, una Niebla Negra funesta envuelve las islas, y la tierra está contaminada por la magia negra. Los mortales que osan adentrarse en las lúgubres orillas sienten que su energía vital se les escapa, algo que atrae a los espíritus insaciables e incesantes de los muertos.

                        Aquellos que perecen en la niebla están condenados a morar ese lugar para siempre. Y lo que es peor, el poder de las Islas de la Sombra parece aumentar con más fuerza cada año que pasa, lo que permite que los poderosos espectros deambulen y lleguen cada vez más lejos por Runaterra.</p>
                </div>
            </div>
            <div class="regiones">
                <div class="regiones_figura regiones_figura8">
                    <h1 class="regiones_titulo">IXTAL</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/ixtal.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Famosa por su domino de la magia elemental, Ixtal fue una de las primeras naciones independientes en unirse al imperio de Shurima. En realidad, la cultura de Ixtal es mucho más antigua, pues formó parte de la gran diáspora occidental a partir de la cual se alzaron numerosas civilizaciones, entre las que figuran los Buhru, la magnífica ciudad de Helia y los ascetas de Targon. También se considera que desempeñó un papel importante en la creación de los primeros Ascendidos.

                        Los magos de Ixtal sobrevivieron al Vacío y, más adelante, a los Oscuros. Con ese fin, se distanciaron de sus vecinos y se refugiaron en el abrigo de las tierras salvajes que los rodeaban. Mucho se había perdido, pero estaban decididos a proteger lo poco que habían conseguido conservar.</p>
                </div>
            </div>
        </section>
        <section class="regiones_contenedor regiones_contenedor_mas">
            <div class="regiones">
                <div class="regiones_figura regiones_figura9">
                    <h1 class="regiones_titulo">NOXUS</h1>
                    <i class="regiones_icono"><img src="{{asset('storage/img/noxus.png')}}" alt="" class="regiones_img"></i>
                    <p class="regiones_parr">Noxus es un poderoso imperio con una reputación aterradora. Para quienes no se encuentran en el interior de sus fronteras, Noxus es una civilización amenazante cuya expansión no se detiene. Quienes miran más allá de su exterior militarizado descubren una sociedad sorprendentemente inclusiva que respeta y cultiva la fuerza y el talento de sus habitantes.

                        Los Noxii fueron unas tribus bárbaras temibles hasta que invadieron la ciudad ancestral que hoy en día es el corazón de sus dominios. Amenazados por todos los bandos, decidieron llevar la lucha a terreno enemigo, y cada año sus fronteras avanzan más y más. Esta lucha por la supervivencia ha convertido a los noxianos actuales en personas orgullosas que valoran la fuerza por encima de todo lo demás, aunque la fuerza se puede manifestar de formas muy distintas.

                        Todo el mundo puede aspirar a una posición de respeto y poder en Noxus si demuestran que tienen las aptitudes necesarias sin importar el estatus social, el pasado, su lugar de origen o su riqueza.</p>
                </div>
                <div class="regiones">
                    <div class="regiones_figura regiones_figura10">
                        <h1 class="regiones_titulo">PILTOVER</h1>
                        <i class="regiones_icono"><img src="{{asset('storage/img/piltover.png')}}" alt="" class="regiones_img"></i>
                        <p class="regiones_parr">Piltover es una ciudad progresista, con un poder e influencia en auge. Es el centro cultural de Valoran y el arte, la artesanía, el comercio y la innovación siempre van de la mano. Su poder no es de carácter militar, sino comercial y emprendedor. Situado en los acantilados que lo separan de Zaun por el océano, Piltover acoge a flotas enteras de barcos mercantiles que cruzan las gigantes puertas marítimas para traer bienes
                            provenientes del resto del mundo. Esta riqueza ha provocado un crecimiento sin precedentes en la ciudad. Piltover se ha ido convirtiendo en una ciudad en la que se puede hacer una fortuna y vivir un sueño. Los clanes mercantiles aportan los fondos necesarios para desarrollar las empresas más increíbles: desde enormes locuras artísticas a investigación esotérica hextech, pasando por monumentos arquitectónicos en honor a su poder. Con cada vez más inventores
                             indagando en el mundo hextech, Piltover se ha convertido en un imán para los artesanos más habilidosos de todo el mundo.
                        </p>
                    </div>
                    <div class="regiones">
                        <div class="regiones_figura regiones_figura11">
                            <h1 class="regiones_titulo">SHURIMA</h1>
                            <i class="regiones_icono"><img src="{{asset('storage/img/shurima.png')}}" alt="" class="regiones_img"></i>
                            <p class="regiones_parr">El imperio de Shurima fue una próspera civilización que recubría todo un continente. Los poderosos dioses guerreros de la Hueste Ascendida fueron los encargados de fraguarlo, y reunían a las poblaciones dispares del sur obligándolas a convivir en paz.

                                Muy pocos osaron rebelarse. Los que lo hicieron, como la nación maldita de Icathia, fueron aniquilados sin piedad alguna.

                                Sin embargo, tras varios miles de años de desarrollo y prosperidad, la fallida Ascensión del último emperador de Shurima hizo que la capital se derrumbara, y las historias sobre el antiguo prestigio del imperio pasaron a considerarse poco más que un mito. Hoy en día, la mayoría de los habitantes nómadas de los desiertos de Shurima se buscan la vida precariamente en la tierra inmisericorde. Algunos han construido pequeños puestos fronterizos para defender los oasis, mientras que otros penetran en catacumbas olvidadas en busca de riquezas inconmensurables que seguro que siguen enterradas. También los hay que viven como mercenarios y aceptan dinero a cambio de sus servicios antes de desaparecer en páramos sin ley.</p>
                        </div>
                        <div class="regiones">
                            <div class="regiones_figura regiones_figura12">
                                <h1 class="regiones_titulo">MONTE TARGON</h1>
                                <i class="regiones_icono"><img src="{{asset('storage/img/targon.png')}}" alt="" class="regiones_img"></i>
                                <p class="regiones_parr">El monte Targon es el mayor pico de Runaterra, una montaña de roca erosionada por el sol entre un grupo de montañas que sobrepasan en altura a todos los demás accidentes geográficos del planeta. Lejos de la civilización, la ubicación del monte Targon es remota e imposible de encontrar para todos salvo para los buscadores con más determinación. Son muchas las leyendas relacionadas con el monte Targon y, como tal, es un faro para los soñadores, los locos y los aventureros. Son muchas las almas valientes que intentan realizar el imposible ascenso, algunos buscando sabiduría, otros la gloria, o incluso satisfacer el deseo de llegar a la cima. El ascenso roza lo imposible, y las pocas personas que en algún momento de la historia han alcanzado la cima prácticamente nunca hablan sobre lo que han visto. Algunos vuelven con un vacío en los ojos, y otros nunca vuelven a ser los mismos al ser imbuidos con el poder de un Aspecto de poder inhumano cuyo destino escapa de la comprensión de la mayoría de los mortales.</p>
                            </div>
                            <div class="regiones">
                                <div class="regiones_figura regiones_figura13">
                                    <h1 class="regiones_titulo">ZAUN</h1>
                                    <i class="regiones_icono"><img src="{{asset('storage/img/zaun.png')}}" alt="" class="regiones_img"></i>
                                    <p class="regiones_parr">Zaun es un distrito suburbano que yace en los valles y cañones que conectan con Piltover. La poca luz que llega lo hace filtrada a través del humo generado en una maraña de tuberías, pues Zaun destaca por su arquitectura gris e industrial. En el pasado Zaun y Piltover estaban unidos. A pesar de que ahora están separadas, ambas sociedades mantienen una relación simbiótica. Zaun vive en un constante crepúsculo de niebla y humo, pero sus gentes continúan desarrollando su dinámica cultura. La riqueza de Piltover ha permitido que Zaun se desarrolle por efecto tándem, un espejo oscuro de la ciudad de las alturas. Muchos de los recursos que llegan a
                                        Piltover lo hacen desde los mercados negros de Zaun, y los inventores hextech a quienes la ciudad de Piltover les pone demasiadas restricciones en su investigación, Zaun suele darles la bienvenida. El desarrollo libre de tecnologías volátiles y la industria imprudente han hecho que varias partes de Zaun
                                        hayan quedado peligrosamente contaminadas. En los puntos más bajos de la ciudad se estancan los riachuelos de vertidos tóxicos, pero incluso en esos lugares la gente encuentra el modo de existir y prosperar.</p>
                                </div>
        </section>
        <section class="btn_regiones">
            <button href="#" id="btn_regiones_mas" class="btn_regiones_accion">MÁS REGIONES</button> <br>
           <button href="#" id="btn_regiones_menos" class="btn_regiones_accion"> VER MENOS</button>
           </section>
        <!--Cartas-->
        <section class="campeones_contenedor">
            <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura1">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/mago.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Ahri es una vastaya conectada de forma innata al poder latente de Runaterra, y es capaz de convertir la magia en orbes de energía pura. Le gusta jugar con su presa, manipulando sus emociones antes de devorar su esencia de vida.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">AHRI</p>
                        <p class="procedencia">JONIA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura2">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/asesino.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Asesino</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Tras renunciar a la Orden Kinkou y a su título como el Puño de la Sombra, Akali pelea sola, lista para ser el arma letal que su pueblo necesita. Aunque conserva todo lo que aprendió de su maestro Shen, juró defender a Jonia de sus enemigos, una muerte a la vez.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">AKALI</p>
                        <p class="procedencia">JONIA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura3">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/tanque.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Tanque</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Blitzcrank, un coloso de metal bruñido, vapor y electricidad centelleante, camina por las calles de Zaun en un esfuerzo incansable por mejorar el distrito suburbano y ayudar a aquellos que lo necesiten.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">BLITZCRANK</p>
                        <p class="procedencia">ZAUN</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura4">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/tanque.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Tanque</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Desde el momento que Cho'Gath emergió por primera vez a la fuerte luz del sol de Runaterra, como una expresión perfecta del deseo del Vacío para consumir toda vida conocida, la biología compleja de Cho'Gath convierte rápidamente la materia en más crecimiento para su cuerpo. </p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">CHO'GATH</p>
                        <p class="procedencia">EL VACÍO</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura5">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/luchador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/baja.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Luchador</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Baja</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">No hay símbolo más grande del poder noxiano que Darius, el líder más temido y endurecido por las batallas. Desde sus orígenes humildes hasta convertirse en la Mano de Noxus, Darius se encarga de los enemigos del imperio, aunque muchos de ellos sean noxianos.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">DARIUS</p>
                        <p class="procedencia">NOXUS</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura6">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/mago.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/alta.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Alta</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">El Profesor Cecil B. Heimerdinger, brillante y a veces excéntrico científico yordle, es uno de los inventores más innovadores que Piltóver ha conocido. Implacable en su trabajo hasta llegar a niveles de neurótica obsesión, se alegra en poder contestar las preguntas más impenetrables del universo.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">HEIMERDINGER</p>
                        <p class="procedencia">PILTÓVER</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura7">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/mago.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">El yordle Kennen, el miembro más antiguo de la también antigua Orden Kinkou, es el primero y único Corazón de la Tempestad. Durante siglos, se ha valido de la diplomacia y de la fuerza para mantener el equilibrio sagrado en su hogar adoptivo en Jonia. </p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">KENNEN</p>
                        <p class="procedencia">JONIA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura8">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/tirador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Tirador</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Arrojada desde una incursión de un Vacío putrefacto en las profundidades de los deshechos de Icathia, Kog'Maw es una criatura inquisitiva pero pútrida, con una boca ácida y enorme. Este particular engendro del Vacío necesita roer y babear todo para entenderlo de verdad.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">KOG'MAW</p>
                        <p class="procedencia">EL VACÍO</p>
                    </div>
                </figure>
             </div>
        </section>
        <section class="campeones_contenedor campeones_contenedor_mas">
            <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura9">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/luchador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/alta.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Luchador</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Alta</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Shieda Kayn, un practicante sin par de la mortífera magia sombría, lucha por alcanzar su verdadero destino: llegar a guiar algún día a la Orden de la Sombra hacia una nueva era de supremacía jonia. </p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">KAYN</p>
                        <p class="procedencia">JONIA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura10">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/asesino.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Aurelion Sol solía agraciar al vasto vacío del cosmos con las maravillas celestiales que él mismo ideaba. Ahora, se ve forzado a hacer uso de su increíble poder para satisfacer los deseos de un imperio espacial que lo ha engañado para convertirlo en su esclavo.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">AURELION SOL</p>
                        <p class="procedencia">TARGON</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura11">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/luchador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/baja.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Baja</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">En el oscuro corazón de las Islas de la Sombra, una yordle solitaria atraviesa arduamente la bruma espectral, satisfecha con su tenebrosa miseria. Con una angustia adolescente inagotable y una poderosa sombra tras de sí, Vex vive en un planeta de pesimismo creado por ella misma.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">VEX</p>
                        <p class="procedencia">ISLAS DE LA SOMBRA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura12">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/luchador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/baja.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Luchador</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Baja</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Para aquellos que aún lo veneran, Volibear es la encarnación de la tormenta. Destructivo, salvaje y decidido, existe desde antes de que los mortales pusieran pie en las tundras de Freljord y protege con fiereza las tierras que creó junto a sus hermanos semidioses.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">VOLIBEAR</p>
                        <p class="procedencia">FRELJORD</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura13">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/apoyo.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Apoyo</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Thresh, un ser sádico y astuto, es un ambicioso y trastornado espíritu de las Islas de la Sombra. Otrora guardián de innumerables secretos arcanos, acabó sucumbiendo a un poder por encima de la vida y la muerte. Ahora sobrevive torturando a sus víctimas con prolongados e inimaginables tormentos.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">THRESH</p>
                        <p class="procedencia">ISLAS DE LA SOMBRA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura14">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/mago.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Mago</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Taliyah es una hechicera nómada de Shurima desgarrada entre la curiosidad de una adolescente y la responsabilidad de una adulta. Ha atravesado Valoran de un lado a otro para descubrir la auténtica naturaleza de sus crecientes poderes, aunque recientemente ha tenido que regresar para proteger a su tribu.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">TALIYAH</p>
                        <p class="procedencia">SHURIMA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura15">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/luchador.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/baja.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Luchador</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Baja</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Renekton es una terrorífica criatura Ascendida movida por la ira y procedente de los desiertos abrasadores de Shurima. En su día fue el guerrero más admirado del imperio, un líder que condujo a los ejércitos de la nación a incontables victorias.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">RENEKTON</p>
                        <p class="procedencia">SHURIMA</p>
                    </div>
                </figure>
             </div>
             <div class="campeones_carta">
                <figure class="campeones_figura campeones_figura16">
                    <i class="campeones_icono rol1"><img class="campeones_img1" src="{{asset('storage/img/apoyo.png')}}" alt=""></i>
                    <i class="campeones_icono rol2"><img class="campeones_img2" src="{{asset('storage/img/moderada.png')}}" alt=""></i>
                    <div class="campeones_desc1">
                        <p class="desc1">Rol</p>
                        <p class="desc2">Apoyo</p>
                    </div>
                    <div class="campeones_desc2">
                        <p class="desc1">Dificultad</p>
                        <p class="desc2">Moderada</p>
                    </div>
                    <div class="campeones_parr">
                        <p class="campeones_texto">Janna, armada con el poder de los vendavales de Runaterra, es un misterioso espíritu elemental que aprovecha el viento para proteger a los más desfavorecidos de Zaun.</p>
                    </div>
                    <div class="campeon_nombre">
                        <p class="nombre">JANNA</p>
                        <p class="procedencia">ZAUN</p>
                    </div>
                </figure>
             </div>
        </section>
            <section class="btn_campeones">
             <button href="#" id="btn_campeones_mas" class="btn_campeones_accion">MÁS CAMPEONES</button> <br>
            <button href="#" id="btn_campeones_menos" class="btn_campeones_accion"> VER MENOS</button>
            </section>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script>
        $('.campeones_contenedor_mas').hide();
        $('.regiones_contenedor_mas').hide();
        $('#btn_campeones_menos').hide();
        $('#btn_regiones_menos').hide();
        $(()=>{
            $('#btn_campeones_mas').click(function () {
                $(".campeones_contenedor_mas").show(1000);
                $('#btn_campeones_mas').hide(1000);
                $('#btn_campeones_menos').show(1000);
            });
        $('#btn_campeones_menos').click(function () {
            $('.campeones_contenedor_mas').hide (1000);
            $('#btn_campeones_menos').hide(1000);
            $('#btn_campeones_mas').show(1000);
            });
            $('#btn_regiones_mas').click(function () {
                $(".regiones_contenedor_mas").show(1000);
                $('#btn_regiones_mas').hide(1000);
                $('#btn_regiones_menos').show(1000);
            });
        $('#btn_regiones_menos').click(function () {
            $('.regiones_contenedor_mas').hide (1000);
            $('#btn_regiones_menos').hide(1000);
            $('#btn_regiones_mas').show(1000);
            });

        })
    </script>
    </main>
</body>
</html>
@endsection
