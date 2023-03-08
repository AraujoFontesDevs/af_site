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
    <div class="container-fluid h-auto d-flex flex-column px-5" id="mainCoverPartner">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                     class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div style="z-index: 1021;" id="firstRow">
            <div class="row mx-0">
                <div class="d-flex align-items-center position-relative" style="gap: 40px;" id="partnerPicture">
                    <div class="d-flex flex-column social-icons" style="gap: 20px;">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-regular fa-envelope"></i></a>
                    </div>

                    <div class="img-wrapper position-relative">
                        <img src="{{ asset('/assets/images/socios/Marcelo-Araújo 1.png') }}" alt="Marcelo Araújo" class="img-fluid" id="partnerImg">

                        <div id="blueSquare">
                        </div>
                    </div>

                </div>
                <div id="partnerDescription">
                    <h1>Marcelo Araújo</h1>
                    <h2>Sócio Fundador</h2>
                    <p id="partnerDescriptionText">Marcelo Araújo fundou a Araújo Fontes em 1990 juntamente com Evaldo Fontes.
                        Trabalhou como consultor na área de Auditoria e Consultoria da Arthur Andersen (1985-1989) e como diretor da Deloitte Touche Tohmatsu (2001-2002).

                        <br><br>
                        Ministrou curso de pós-graduação em Consultoria Tributária na Fundação Mineira de Educação e Cultura – FUMEC.
                    </p>

                </div>
            </div>
            <div class="row mx-0 mt-4">
                <div class="partner-education mt-2">
                    <h3>Formação</h3>
                    <p>2002 - Mestre em Direito Empresarial pela Faculdade de Direito Milton Campos;</p>
                    <p>1994 - Graduado em Direito pela Universidade Federal de Minas Gerais – UFMG;</p>
                    <p>1988 - Ciências Contábeis pela Universidade Federal de Minas Gerais – UFMG; </p>
                    <p>1985 - Bacharel em Administração de Empresas pela Universidade Federal de Minas Gerais – UFMG;</p>
                </div>
            </div>
        </div>

    </div>

</main>

@include('layout.footer')


<!-- JavaScript -->
<script src="{{ asset('/js/header.js') }}"></script>
</body>
</html>
