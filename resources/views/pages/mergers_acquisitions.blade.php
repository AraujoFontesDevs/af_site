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
    <div class="container-fluid h-auto d-flex flex-column justify-content-center px-5" id="mainCoverMA">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                     class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary mb-0">M&A</h2>
            <br>
            <h1 class="title-about">+ de 200 transações
                    concluídas</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center padding-about"
         style="align-items: center;">
        <h1 class="title-blue mb-3">Fusões e Aquisições</h1>

        <p class="p-blue" style="max-width: 1062px"> A Araújo Fontes assessora seus clientes nas decisões mais
            estratégicas e complexas, como em transações estratégicas de fusões, aquisições, desinvestimentos, joint
            ventures, reestruturação societárias, sucessões e spin-offs. Com abrangência nacional e histórico em
            diversos setores, a AF está singularmente preparada para atuar como assessora de confiança para acionistas e
            executivos. A extensa experiência dos sócios é complementada pela atuação de especialistas em outras
            áreas-chave, como jurídica, tributária e contábil. A abordagem, baseada em relacionamentos de longo prazo,
            se traduz em relações de confiança e um histórico recorrente de atuação.

        </p>
    </div>

    <div class="container-fluid" id="actingSection">
        <h1 class="title-blue text-start">Atuação</h1>

        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Fusões e Aquisições | M&A</h2>
                </div>
                <p>Assessoria completa nos trâmites operacionais, negociais e legais nos processos de venda, fusões, aquisições e joint ventures, seja para pares estratégicos ou financeiros.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/ma-1.png') }}">
            </div>
        </div>
        <div class="row mx-0 right-sided-acting">
            <div class="col-12 col-lg-6 px-0 img-wrapper">
                <img src="{{ asset('/assets/images/ma-2.png') }}">
            </div>
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2 class="ps-0 ps-lg-5">Captação de Recursos em Equity ou Quasi-Equity</h2>
                </div>
                <p class="ps-0 ps-lg-5">Estruturação dos instrumentos financeiros e societários que salvaguardem os interesses da parte assessorada. Relacionamentos estabelecidos com players financeiros e estratégicos relevantes.</p>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-0 info-wrapper">
                <div class="title-wrapper">
                    <h2>Restruturação Societária e Sucessória</h2>
                </div>
                <p>Estruturação dos instrumentos financeiros e societários que salvaguardem os interesses da parte assessorada. Gestão das tratativas negociais.</p>
            </div>
            <div class="col-12 col-lg-6 p-0">
                <img src="{{ asset('/assets/images/ma-3.png') }}">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark-blue" id="selectedTransactions">
        <h1 class="mt-4 mb-5 text-center text-md-start">Transações Selecionadas</h1>

        <ul class="d-flex flex-wrap justify-content-center align-items-stretch mb-5 ps-0">
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #01478C !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_cupom_verde.png') }}" alt="Cupom Verde"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Parceria Comercial</h2>
                    <p class="text-center mb-0">2022</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/second_trasaction_rede.png') }}" alt="Rede"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #01478C !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_itaobi.png') }}" alt="Itaobi"
                         class="transaction-logo">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="text-center mb-0">2022</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/second_trasaction_morada.png') }}" alt="Morada"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #01478C !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_khaya.png') }}" alt="Khaya"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação via Equity</h2>
                    <p class="mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #01478C !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_materdei.png') }}" alt="Materdei"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Captação</h2>
                    <p class="mb-0">2021</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/transaction_santagenoveva.png') }}" alt="Santa Genoveva"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center justify-content-between">
                <div class="border-detail w-100" style="background-color: #01478C !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_bmg.png') }}" alt="Banco BMG"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda de participação de ativo</h2>
                    <p class="mb-0 text-center">2021</p>
                </div>
                <div class="transaction-footer">
                    <img src="{{ asset('assets/images/second_trasaction_bossanova.png') }}" alt="Bossanova"
                         class="last-transaction-logo">
                </div>
            </li>
            <li class="transaction d-flex flex-column align-items-center">
                <div class="border-detail w-100" style="background-color: #B5B5B5 !important;"></div>
                <div class="transaction-header">
                    <img src="{{ asset('assets/images/transaction_mgm.png') }}" alt="Banco BMG"
                         class="transaction-logo mb-0">
                </div>
                <div class="text-wrapper">
                    <h2 class="text-center">Venda</h2>
                    <p class="mb-0">2020</p>
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
