<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Araújo Fontes — Assessores de Confiança</title>
    <meta name="description" content="Assessores de confiança">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

    <!-- Estilos -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/socio.css') }}" rel="stylesheet">
</head>
<body>
<main>
    <!-- Cabeçalho -->
        @include('layout.header.navbar-secundario')
        @include('layout.header.navbar')
    <!-- Dobra principal -->
    <div class="container-fluid h-auto d-flex flex-column justify-content-center bg-socio px-5" id="mainCoverAbout">
        <div class="background-blue-skew">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes" class="logo-af-about hide-with-scroll">
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary">Equipe</h1>
            <br>
            <h1 class="title-about">Sócios e analistas experientes, com inputs e visão crítica acerca da estratégia a ser adotada</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex">
        <div class="row row-cols-1 row-cols-md-4 g-4" id="cards-socios">

        </div>
    </div>

</main>

@include('layout.footer')


<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>
<script src="{{ asset('/js/socio.js') }}"></script>

<script src="../../js/socio.js"></script>
</body>
</html>
