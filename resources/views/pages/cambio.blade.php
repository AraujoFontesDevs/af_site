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
</head>
<body >
<main>
    <!-- Cabeçalho -->
    @include('layout.header.navbar-secundario')
    @include('layout.header.navbar')
    <!-- Dobra principal -->
    <div class="container-fluid h-auto d-flex flex-column justify-content-center px-5" id="mainCoverCambio">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                     class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary mb-0">Câmbio</h2>
            <br>
            <h1 class="title-about">Remessas, importações, exportações e operações financeiras para ajudar nosso cliente a atuar globalmente</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center padding-about"
         style="align-items: center;">
        <h1 class="title-blue mb-3">Câmbio</h1>

        <p class="p-blue" style="max-width: 1062px">Os serviços de câmbio atendem de forma simplificada, ágil e de considerável custo-benefício aos clientes. Eles contam com serviços de fechamento de câmbio de importação e exportação, remessas internacionais, operações financeiras, compra de moedas estrangeiras e cartão pré-pago internacional.</p>
    </div>

    <div class="container-fluid" id="actingSection">
        <h1 class="title-blue text-start">Atuação</h1>

        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Remessas e Pagamentos Internacionais</h2>
                </div>
                <p>Serviço destinado para clientes que necessitam enviar ou receber valores em moeda estrangeira com agilidade. </p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/cambio_1.png') }}">
            </div>
        </div>
        <div class="row mx-0 right-sided-acting">
            <div class="col-12 col-lg-6 px-0 img-wrapper">
                <img src="{{ asset('/assets/images/cambio_2.png') }}">
            </div>
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2 class="ps-0 ps-lg-5">Importação e Exportação</h2>
                </div>
                <p class="ps-0 ps-lg-5"><i>Sua empresa realiza ou recebe pagamentos de um produto ou serviço do exterior com segurança e praticidade.</i></p>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Operações Financeiras</h2>
                </div>
                <p>A Araújo Fontes tem uma equipe altamente qualificada que dá todo o apoio na gestão e classificação das operações junto ao Banco Central e Receita Federal.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/cambio_3.png') }}">
            </div>
        </div>
    </div>

    @include('partials.offices')

</main>

@include('layout.footer')


<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>
</body>
</html>
