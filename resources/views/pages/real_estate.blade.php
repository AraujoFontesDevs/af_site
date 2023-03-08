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
    <div class="container-fluid h-auto d-flex flex-column justify-content-center px-5" id="mainCoverRealEstate">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                     class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary mb-0">Real Estate</h2>
            <br>
            <h1 class="title-about">Assessoria Estratégica Imobiliária</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center padding-about"
         style="align-items: center;">
        <h1 class="title-blue mb-3">Assessoria Estratégica Imobiliária</h1>

        <p class="p-blue" style="max-width: 1062px"> A área de Real Estate da Araújo Fontes alia a experiência obtida em diversas operações estratégicas de fusões e aquisições (M&A), captação de recursos e reestruturação financeira, ao relacionamento consolidado da equipe com os diversos players do mercado imobiliário, para oferecer aos nossos clientes soluções customizadas e estruturar transações complexas que contemplem questões financeiras, tributárias e patrimoniais. Nosso objetivo é atuar como assessores estratégicos, muito além da simples intermediação imobiliária.
        </p>
    </div>

    <div class="container-fluid" id="actingSection">
        <h1 class="title-blue text-start">Atuação</h1>

        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Intermediação Qualificada</h2>
                </div>
                <p>Imóveis <strong>Corporativos</strong> (performados ou não);<br>
                    <strong>Complexos logísticos</strong>, galpões e imóveis industriais;
                    Grandes Terrenos;<br>
                    <strong>Participações em Shoppings</strong>, Street Malls e Power Centers.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/real_estate_1.png') }}">
            </div>
        </div>
        <div class="row mx-0 right-sided-acting">
            <div class="col-12 col-lg-6 px-0 img-wrapper">
                <img src="{{ asset('/assets/images/real_estate_2.png') }}">
            </div>
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2 class="ps-0 ps-lg-5">Soluções Financeiras</h2>
                </div>
                <p class="ps-0 ps-lg-5"><i>Club Deal, Built to Suit e Sale and Lease-Back;
                    Estruturação de <strong>fundos e gestão de investimentos</strong>;
                        Assessoria financeira em <strong>operações estruturadas</strong> com imóveis.</i></p>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Desenvolvimento Imobiliário</h2>
                </div>
                <p>Identificação de terrenos e ativos;<br>
                    Estudos vocacionais e de desenvolvimento;<br>
                    <strong>Captação via equity ou dívida</strong> para empreendimentos.
                </p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/real_estate_3.png') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark-blue" id="selectedTransactions">
        <h1 class="mt-4 mb-5 text-center text-md-start">Transações Selecionadas</h1>

        <ul class="d-flex flex-wrap justify-content-center align-items-stretch mb-5 ps-0">
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_mgm.png') }}" alt="MGM"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="text-center mb-0">2020</p>
                </div>
                <div class="transaction-footer">

                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_cepalgo.png') }}" alt="Cepalgo"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Sale & Lease Back</h2>
                    <p class="text-center mb-0">2018</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/transaction_ggr.png') }}" alt="GGR"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_todimo.png') }}" alt="Todimo"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Sale & Lease Back</h2>
                    <p class="mb-0">2017</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/transaction_ggr.png') }}" alt="Todimo"
                         class="last-transaction-logo mb-0">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_gatti.png') }}" alt="Gatti"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="mb-0">2017</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/transaction_golgi.png') }}" alt="Golgi"
                         class="last-transaction-logo mb-0">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <h2 class="text-center">Holding
                    Familiar</h2>
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="mb-0 text-center">2016</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/transaction_direcional.png') }}" alt="Direcional"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_automax.png') }}" alt="Automax"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="mb-0">2016</p>
                </div>
                <div class="transaction-footer">

                </div>
            </li>
        </ul>

        <div class="w-100 d-flex justify-content-center">
            <a href="#">Veja mais</a>
        </div>
    </div>

    @include('partials.offices')

</main>

@include('layout.footer')


<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>
</body>
</html>
