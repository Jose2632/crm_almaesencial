<!doctype html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sitio Web dedicado a la videncia y el esoterismo">
    <meta name="author" content="HootStack">
    <meta name="generator" content="HootStack">
    <title>Bienvenido a Alma Esencial</title>
    <link rel="icon" href={{ asset('src/img/luna.ico') }} type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href={{ asset('src/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('src/css/app.css') }} rel="stylesheet">
    <link href={{ asset('src/aos/dist/aos.css') }} rel="stylesheet">
    <link href={{ asset('src/css/carousel.css') }} rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DVPGN4768P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-DVPGN4768P');
    </script>
</head>

<body class="bg-body text-light">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-body">
            <div class="container-fluid">
                <a class="navbar-brand user-select-none"> <b> Alma Esencial </b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('about')}}">Acerca de Mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('testimonial')}}">Testimonios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
