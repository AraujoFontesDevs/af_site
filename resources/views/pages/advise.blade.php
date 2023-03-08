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
    <div class="container-fluid h-auto d-flex flex-column justify-content-center px-5" id="mainCoverAdvise">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                     class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary mb-0">Assessoria Financeira</h2>
            <br>
            <h1 class="title-about">Operações estruturadas com lastro imobiliário</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center padding-about"
         style="align-items: center;">
        <h1 class="title-blue mb-3">Assessoria Financeira</h1>

        <p class="p-blue" style="max-width: 1062px">A Araújo Fontes fornece um conjunto completo de soluções de assessoria financeira para empresas, conselhos, sócios e outras partes interessadas, com foco em fornecer soluções e assessoria independente, de alto nível, para ajudar os clientes a resolverem seus desafios mais complexos de estrutura de capital. Através de uma abordagem abrangente, oferece soluções operacionais, financeiras e estratégicas a fim de otimizar a estrutura de capital para o desenvolvimento de seus negócios. A expertise em captação de recursos, reestruturação e alongamento de dívida, gestão financeira e de risco, a possibilita a assessorar os clientes em todos os aspectos que envolvem captação de recursos no mercado.</p>
    </div>

    <div class="container-fluid" id="actingSection">
        <h1 class="title-blue text-start">Atuação</h1>

        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Captação de Recursos</h2>
                </div>
                <p>Captação junto a instituições locais e internacionais, bancos e fundos de desenvolvimento, agências multilaterais e ECAs, dívida estruturada e sindicatos, FIDCs, securitizações e finanças.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/advise_1.png') }}">
            </div>
        </div>
        <div class="row mx-0 right-sided-acting">
            <div class="col-12 col-lg-6 px-0 img-wrapper">
                <img src="{{ asset('/assets/images/advise_2.png') }}">
            </div>
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2 class="ps-0 ps-lg-5">Mercado de Capitais</h2>
                </div>
                <p class="ps-0 ps-lg-5">Debêntures, CRAs, CRIs, Bonds, colocações privadas etc.</p>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Alongamento e Reestruturação de Dívidas</h2>
                </div>
                <p>Adequação da estrutura de capital: reestruturação de taxas, prazos e garantias de acordo com a capacidade de pagamento, planejamento financeiro de longo prazo para restruturações.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/advise_3.png') }}">
            </div>
        </div>
        <div class="row mx-0 right-sided-acting">
            <div class="col-12 col-lg-6 px-0 img-wrapper">
                <img src="{{ asset('/assets/images/advise_4.png') }}">
            </div>
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2 class="ps-0 ps-lg-5">Assessoria Financeira e Gestão de Riscos</h2>
                </div>
                <p class="ps-0 ps-lg-5">Assessoria na gestão financeira da empresa, assessoria na gestão de riscos de mercado, liquidez e crédito.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark-blue" id="selectedTransactions">
        <h1 class="mt-4 mb-5 text-center text-md-start">Transações Financeiras</h1>

        <ul class="d-flex flex-wrap justify-content-center align-items-stretch mb-5 ps-0">
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_colombo.png') }}" alt="Colombo"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_baldan.png') }}" alt="Baldan"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_magnum.png') }}" alt="Magnum"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_ebec.png') }}" alt="EBEC"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_bembrasil.png') }}" alt="BemBrasil"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #078FCA !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_cataguases.png') }}" alt="Cataguases"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="text-center mb-0">2021</p>
                </div>
                <div class="transaction-footer" style="padding-top: 75px;">

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
