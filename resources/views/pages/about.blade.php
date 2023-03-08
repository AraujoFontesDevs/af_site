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
<body id="aboutUs">
<main>
    <!-- Cabeçalho -->
        @include('layout.header.navbar-secundario')
        @include('layout.header.navbar')

    <!-- Dobra principal -->
    <div class="container-fluid h-auto d-flex flex-column justify-content-center bg-about px-5" id="mainCoverAbout">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                 class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;">
            <h2 class="title-about-secondary">Quem somos</h1>
                <br>
                <h1 class="title-about">Boutique de investimento com 32 anos de experiência, foco no middle market e
                    atuação nacional</h1>
        </div>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center padding-about"
         style="align-items: center;">
        <h1 class="title-blue mb-3"> Quem Somos </h1>

        <p class="p-blue" style="max-width: 1062px"> A Araújo Fontes assessora seus clientes nas decisões mais
            estratégicas e complexas, como em transações estratégicas de fusões, aquisições, desinvestimentos, joint
            ventures, reestruturação societárias, sucessões e spin-offs. Com abrangência nacional e histórico em
            diversos setores, a AF está singularmente preparada para atuar como assessora de confiança para acionistas e
            executivos. A extensa experiência dos sócios é complementada pela atuação de especialistas em outras
            áreas-chave, como jurídica, tributária e contábil. A abordagem, baseada em relacionamentos de longo prazo,
            se traduz em relações de confiança e um histórico recorrente de atuação.

        </p>
    </div>

    <div style="background-color: white;">
        <div style="background-color: #021336;" class="height-bg-blue">
            <div class="container-fluid h-auto d-flex justify-content-center display-block ">
                <h1 class="mt-4 mb-5 text-center text-md-start title-white padding-title">Diferenciais</h1>
                <div class="cards-container d-flex flex-wrap"
                     style="align-items: center; justify-content: space-around;">

                    <div class="single-card-container d-flex gap-4 justify-content-center card-af">
                        <div class="card-wrapper">
                            <div class="card-content-af" style="background-color: white">
                                <h2 class="" style="margin-bottom: 0px">Araújo Fontes</h2>
                            </div>
                            <div class="card-body-af" style="background-color: #0054A6; min-height: 385px;">
                                <ul style="display: flex; flex-wrap: wrap;grid-gap: 13px;">
                                    <li>Assessoria completa com foco na otimização da estrutura de capital e de acordo
                                        com a necessidade do cliente.
                                    </li>
                                    <li>Maior relevância do mandato para o negócio</li>
                                    <li>Profissionais sêniores dedicados à execução do mandato e alinhados com os
                                        principios e valores do cliente
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single-card-container d-flex gap-4 justify-content-center">
                        <div class="card-wrapper">
                            <div class="card-content" style="background-color: white; padding: 20px">
                                <h2 class=""
                                    style="margin-bottom: 0px; color: #0054A6; font-size: 32px; text-align:center">
                                    Demais Players</h2>
                            </div>
                            <div class="card-body" style="background-color: #334D66">
                                <ul style="color: white; font-weight: 700;font-size: 18px;line-height: 30px;letter-spacing: 1.2px;">
                                    <li style="margin-bottom: 50px;">Produtos e serviços comuns</li>
                                    <li style="margin-bottom: 50px;">Baixo engajamento da equipe</li>
                                    <li style="margin-bottom: 50px;">Dedicação esporádica e pontual de profissionais
                                        sêniores
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center"
         style="display: flex; align-items:center;">
        <h1 class="title-blue" style="margin: 86px 0px 47px;"> Como atuamos </h1>

        <p class="p-blue" style="max-width: 1147px;"> Municiamos sócios e executivos com inputs e visão crítica acerca
            da estratégia a ser adotada.
            Dessa forma, permitimos aos clientes a preservação do foco na condução do negócio, enquanto nos dedicamos à
            execução do processo.
        </p>

    </div>

    <div class="container-fluid h-auto d-flex flex-column justify-content-center" style="margin-bottom: 141px">
        <h2 style="font-weight: 700;font-size: 25px;line-height: 45px;text-align: center;letter-spacing: 1.2px;color: #0054A5; margin: 47px 0px;">
            Momentos cruciais da nossa atuação
        </h2>
        <div class="grid-moments text-center">
            <div class="g-col-6">
                <p class="p-moments">● Definição da melhor opção estratégica </p>
                <p class="p-moments">● Otimização da estrutura capital</p>
                <p class="p-moments">● Geração de valor</p>
            </div>
            <div class="g-col-6">
                <p class="p-moments">● Estruturação da operação</p>
                <p class="p-moments">● Definição da contraparte</p>
                <p class="p-moments">● Melhor momento para o movimento</p>
            </div>
        </div>

        <div class="grid-cards">

            <div class="card-number">
                <div class="circle-dashed">
                    <p class="number-card"> 1 </p>
                </div>
                <div class="card-about-2">
                    <div>
                        <h1 class="title-card-about-2"> PREPARAÇÃO </h1>
                        <p class="p-card-about-2">
                            Preparação da empresa
                            e sócios para mitigar riscos
                            de choques culturais, divergências na governança e estrutura de capital.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-number">
                <div class="circle-dashed">
                    <p class="number-card"> 2 </p>
                </div>
                <div class="card-about-2">
                    <div>
                        <h1 class="title-card-about-2"> DEFINIÇÃO </h1>
                        <p class="p-card-about-2">
                            Profunda pesquisa
                            de mercado, adequação da estrutura de capital e busca de pontecias investidores
                            e agentes financeiros.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-number">
                <div class="circle-dashed">
                    <p class="number-card"> 3 </p>
                </div>
                <div class="card-about-2">
                    <div>
                        <h1 class="title-card-about-2"> EXECUÇÃO </h1>
                        <p class="p-card-about-2">
                            Execução das tratativas técnicas e negociais do processo, de acordo com as diretrizes do
                            cliente.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.transactions')

    @include('partials.offices')

</main>

@include('layout.footer')


<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>

</body>
</html>
