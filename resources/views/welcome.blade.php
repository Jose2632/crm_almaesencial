@include('layouts.header')

<form method="POST" action="{{ route('wathsapp') }}">
    @csrf
    <button class="whatsapp pulse" type="submit"> <i class="fab fa-whatsapp"></i> </button>
</form>


<div class="modal fade" id="contactos" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-body">
            <img src="src/img/suscripcion.svg" alt="imagen suscripcion a almaesencial" class="img-fluid">
            <div class="modal-body">
                <p class="fs-4">Para mayor información y conocer mas sobre mis servicios, puedes seguirme en mis redes
                    sociales o conectar directamente conmigo mediante <span class="text-success"> <b> WhatsApp
                        </b></span> </p>
            </div>
            <div class="modal-footer border-0 flex justify-content-center">
                <a target="_blank" href="https://www.facebook.com/luna.yave" class="nav-link px-2"><ion-icon
                        name="logo-facebook"></ion-icon></a>
                <a target="_blank" href="https://instagram.com/luna.yave?igshid=MzRlODBiNWFlZA=="
                    class="nav-link instagramlogo px-2"><ion-icon name="logo-instagram"></ion-icon></a>
                <form method="POST" action="{{ route('wathsapp') }}">
                    @csrf
                    <button class="btn btn-link text-success" type="submit"> <ion-icon name="logo-whatsapp"></ion-icon>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/img/fondo.jpg" class="img-fluid" alt="Imagen de esoterismo y videncia">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h2>Descubre tu camino espiritual con un vidente experto.</h2>
                        <p>Adéntrate en el fascinante mundo del esoterismo y encuentra tu camino espiritual junto a mí.
                            Ya sea que busques respuestas a preguntas específicas o desees explorar tu propio potencial
                            intuitivo, te brindaré una guía clara y precisa.</p>
                        <p><a class="btn btn-lg rainbow" data-bs-toggle="modal" data-bs-target="#contactos">Conoce mis
                                servicios de videncia</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="src/img/fondo.jpg" class="img-fluid" alt="Imagen de esoterismo y videncia">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Conecta con el universo.</h2>
                        <p>Sumérgete en un viaje místico a través de las artes esotéricas y experimenta una conexión más
                            profunda con el universo. Explora prácticas ancestrales que te permitirán comprender los
                            mensajes ocultos y las energías que te rodean.</p>
                        <p><a class="btn btn-lg rainbow" data-bs-toggle="modal" data-bs-target="#contactos">Explora el
                                mundo del esoterismo</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="src/img/fondo.jpg" class="img-fluid" alt="Imagen de esoterismo y videncia">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h2>Descubre tu destino con mis lecturas de videncia.</h2>
                        <p>Explora el poder de la videncia y desvela los misterios de tu destino hablando conmigo. Te
                            brindaré una visión clara y precisa de los eventos que pueden estar esperándote en el
                            futuro.</p>
                        <p><a class="btn btn-lg rainbow" data-bs-toggle="modal" data-bs-target="#contactos">Descubre mis
                                lecturas de videncia</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">

        <div class="row" data-aos="fade-up">
            <div class="col-lg-4">
                <img src="src/img/horoscopo.png" width="150" height="150" alt="Imagen relacionada con abundancia">
                <h2 class="fw-normal">Abundancia</h2>
                <p>Te ayudaré a resolver tus problemas</p>
            </div>
            <div class="col-lg-4">
                <img src="src/img/terapia-de-pareja.png" width="150" height="150"
                    alt="Imagen relacionada con el amor">
                <h2 class="fw-normal">Amor</h2>
                <p>Recupera el amor de tu pareja o el ex que tanto amas.</p>
            </div>
            <div class="col-lg-4">
                <img src="src/img/felicidad.png" width="150" height="150"
                    alt="Imagen relacionada con la limpieza">
                <h2 class="fw-normal">Limpieza</h2>
                <p>Seré tu ayuda en el camino oscuro.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-up">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Conecta conmigo</h2>
                <p class="lead">Descubre el poder de la videncia y obtén respuestas claras y precisas con mi ayuda.
                    Te guiaré en tu búsqueda espiritual, brindándote orientación y apoyo en todas las áreas de tu vida.
                    Confía en mi sabiduría ancestral y permíteme ayudarte a encontrar la claridad y el equilibrio que
                    necesitas para avanzar en tu camino.</p>
            </div>
            <div class="col-md-5">
                <img src="src/img/img01.jpeg" class="flotante img-fluid rounded"
                    alt="Imagen relacionada con la videncia y los rituales para conectarse con el universo"
                    width="500" height="500">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-up">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Recupera el amor</h2>
                <p class="lead">Estoy aquí para ayudarte a resolver tus problemas, yo seré tu ayuda en este camino
                    oscuro. Si lo que buscas es recuperar el amor de tu pareja o ex que tanto amas estás en el lugar
                    correcto.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="src/img/img03.jpeg" class="flotante img-fluid rounded"
                    alt="Imagen relacionada con el amor, amarres y lazos" width="450" height="450">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" data-aos="fade-up">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Resultados de 4 a 8 horas</h2>
                <p class="lead">Seguro y efectivo, no te dejes engañar por otras personas, estás en buenas manos,
                    solo dame la oportunidad de hablar contigo y sabrás el poder espiritual que tengo con solo hablar
                    conmigo. No te cierres las puertas, recuerda que solo tienes una sola vida para ser feliz, lucha por
                    tu bienestar y felicidad.</p>
            </div>
            <div class="col-md-5">
                <img src="src/img/img02.jpeg" class="flotante img-fluid rounded"
                    alt="Imagen de ritual para conseguir los mejores resultados" width="500" height="500">
            </div>
        </div>
    </div>


    <br>

    <div class="container d-flex justify-content-center">
        <h1 class="display-6 fw-bold"><i>"El destino no es cuestión de casualidad, sino de elección"</i></h1>
    </div>

@include('layouts.footer')