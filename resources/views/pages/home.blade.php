<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Araújo Fontes - Assessores de Confiança</title>
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
<body>
<main>

    <!-- Cabeçalho -->
    @include('layout.header.navbar')
    <!-- Dobra principal -->
    <div class="container-fluid h-auto d-flex flex-column justify-content-center" id="mainCover">
        <div id="coverTitle">
            <h1>Assessores de</h1>
            <br>
            <h1>Confiança</h1>
        </div>
    </div>

    <!-- Quem Somos -->
    <div class="container-fluid bg-dark-blue pb-3" id="whoWeAre">
        <div class="row">
            <div class="col-12 col-lg-5 d-flex align-items-center img-section">
                <img src="{{ asset('assets/images/quem_somos.png') }}" alt="">
            </div>
            <div class="col-12 col-lg-7 text-section-wrapper">
                <div class="who-we-are-wrapper text-section">
                    <h1 class="mb-4 text-center text-lg-start">Quem Somos</h1>
                    <h2 class="text-center text-lg-start">Uma das principais boutiques de investimento independentes do
                        Brasil, com 32 anos de experiência, foco no middle market e atuação nacional. Sediados em Belo
                        Horizonte, possuímos escritórios regionais em São Paulo, Goiânia e Ribeirão Preto.</h2>
                    <div class="ps-lg-3 mt-5" id="fourSections">
                        <ul>
                            <div class="row">
                                <li class="col-6 d-flex flex-column pt-0 p-3" id="firstSection">
                                    <div class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <strong>32</strong><span>+</span>
                                        </div>
                                        <p>anos no</p>
                                        <p>mercado</p>
                                    </div>
                                </li>
                                <li class="col-6 d-flex flex-column pt-0 p-3" id="secondSection">
                                    <div class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <strong>200</strong><span>+</span>
                                        </div>
                                        <p>transações</p>
                                        <p>concluídas</p>
                                    </div>
                                </li>
                            </div>
                            <div class="row">
                                <li class="col-6 d-flex flex-column pt-0 p-3" id="thirdSection">
                                    <div class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <strong>80</strong><span>+</span>
                                        </div>
                                        <p>colaboradores</p>
                                    </div>
                                </li>
                                <li class="col-6 d-flex flex-column pt-0 p-3" id="fourthSection">
                                    <div class="ps-4">
                                        <div class="d-flex align-items-center gap-3">
                                            <strong><small>R$&nbsp;&nbsp;</small>30</strong><span>BI</span>
                                        </div>
                                        <p>em transações</p>
                                        <p>concluídas</p>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="button-wrapper ps-lg-5 d-flex d-lg-block justify-content-center">
                    <a href="{{ route('about') }}" id="aboutBtn">Saiba mais sobre nós</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Atuação -->
    <div class="container-fluid" id="acting">
        <h1 class="mt-4 mb-4 text-center text-md-start">Atuação</h1>
        <div class="row gap-2 mb-4" id="actingList">
            <div class="col cursor-pointer" id="mAndA" data-url="{{ route('ma') }}">
                <h1>M&A</h1>
                <hr>
                <p>Assessoria de venda, compra, fusões e desinvestimentos</p>
            </div>
            <div class="col cursor-pointer" id="financialAdvisory" data-url="{{ route('advise') }}">
                <h1>Assessoria Financeira</h1>
                <hr>
                <p>Captação de recursos e reestruturação de dívida</p>
            </div>
            <div class="col cursor-pointer" id="realEstate" data-url="{{ route('real_estate') }}">
                <h1>Real Estate</h1>
                <hr>
                <p>Operações estruturadas com lastro imobiliário</p>
            </div>
            <div class="col cursor-pointer" id="exchange" data-url="{{ route('cambio') }}">
                <h1>Câmbio</h1>
                <hr>
                <p>Remessas internacionais, importação e exportação</p>
            </div>
            <div class="col cursor-pointer" id="management" data-url="#">
                <h1>Gestão</h1>
                <hr>
                <p>Gestora de Fundos Independente e Wealth Management</p>
            </div>
        </div>
    </div>

    <!-- Princípios -->
    <div class="container-fluid bg-dark-blue" id="principles">
        <h1 class="mt-4 mb-5 text-center text-md-start">Princípios</h1>

        <div class="cards-container d-flex justify-content-between flex-wrap">
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Ética</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_ethics.png') }}" alt="Ética na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p><strong>Ética</strong> na condução de negócios</p>
                    </div>
                </div>
            </div>
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Aconselhamento</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_counseling.png') }}"
                             alt="Aconselhamento na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p>Fornecer <strong>aconselhamento imparcial e independente</strong></p>
                    </div>
                </div>
            </div>
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Cliente</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_costumer.png') }}"
                             alt="Prioridade aos clientes na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p>Colocar os <strong>interesses do cliente</strong> acima dos interesses da Araújo Fontes</p>
                    </div>
                </div>
            </div>
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Relacionamento</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_relationship.png') }}"
                             alt="Ética na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p>Desenvolver <strong>relacionamento de longo prazo</strong></p>
                    </div>
                </div>
            </div>
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Confiança</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_trusting.png') }}"
                             alt="Aconselhamento na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p>Fazer por merecer o direito de atuar como <strong>assessores de confiança</strong></p>
                    </div>
                </div>
            </div>
            <div class="single-card-container d-flex gap-4 justify-content-center">
                <h2 class="card-outside-title">Ouvir</h2>
                <div class="card-wrapper">
                    <div class="card-image">
                        <img src="{{ asset('/assets/images/principles_hearing.png') }}"
                             alt="Prioridade aos clientes na Araujo Fontes">
                    </div>
                    <div class="card-content">
                        <p><strong>Ouvir o cliente</strong>, compreender e estabelecer as questões com clareza</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Equipe -->
    <div class="container-fluid" id="team">
        <div class="dialog-card">
            <h1 class="mb-4">Equipe</h1>
            <p class="mb-4">Sócios e analistas experientes, com visão crítica acerca da estratégia a ser adotada</p>
            <a href="{{ route('socio') }}" id="teamBtn">Conheça nossos sócios</a>
        </div>
        <img src="{{ asset('assets/images/araujo-fontes-team.png') }}" alt="Equipe Araújo Fontes">
    </div>

    <!-- Transações Selecionadas -->
    @include('partials.transactions')

    <!-- Instagram -->
    <div class="container-fluid" id="instagram">
        <div class="insta-wrapper d-flex justify-content-center justify-content-xl-start align-items-center mb-4">
            <img src="{{ asset('assets/images/insta_af.png') }}" alt="" class="insta-logo">
            <a href="https://www.instagram.com/araujo_fontes/" target="_blank"><h1 class="mt-5 mb-5">@araujo_fontes</h1>
            </a>
        </div>

        <div class="instafeed-wrapper d-flex flex-wrap justify-content-center">
            <div class="feed-item px-3">
                <img src="{{ asset('assets/images/insta_feed_1.png') }}" alt="">
            </div>
            <div class="feed-item px-3">
                <img src="{{ asset('assets/images/insta_feed_2.png') }}" alt="">
            </div>
            <div class="feed-item px-3">
                <img src="{{ asset('assets/images/insta_feed_3.png') }}" alt="">
            </div>
            <div class="feed-item px-3">
                <img src="{{ asset('assets/images/insta_feed_4.png') }}" alt="">
            </div>
            <div class="feed-item px-3">
                <img src="{{ asset('assets/images/insta_feed_5.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Escritórios -->
    @include('partials.offices')
</main>

@include('layout.footer')

<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>

<!-- Clique nas atuações -->
<script>
    $('#actingList > div').click( function() {
        let url = $(this).data('url');
        window.open(url, '_blank').focus();
    });
</script>
</body>
</html>
