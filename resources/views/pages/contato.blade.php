<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body>

    @include('layout.header.navbar-secundario')
    @include('layout.header.navbar')


    <div class="container-fluid h-auto d-flex flex-column justify-content-center background-img-ouvidoria  px-5" id="mainCoverAbout">
        <div class="background-blue-skew">
            <a href="{{ route('index') }}">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes"
                 class="logo-af-about hide-with-scroll">
            </a>
        </div>
        <div class="row" style="margin-top: 48px">

        <div style="z-index: 1021;" class="col-12 col-sm-6">
            <h2 class="title-about-secondary"> Contato</h1>
                <br>
                <h1 class="title-about" style="font-size: 24px; max-width: 460px;">  Entre em contato conosco.</h1>
        </div>

        <div style="z-index: 1021; display:flex; align-items: center; border-radius: 8px; padding: 8px;" class="col-12 col-sm-6">
            <form style="margin-left: 12px" method="post" id="contact-form">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <input class="form-control form-control-lg input-ouvidoria " type="text"
                            placeholder="Primeiro nome" aria-label=".form-control-lg example" name="nome"
                            id="nome">

                        <span id="feedback-nome" style="color:red!important;"
                            class="form-text text-error"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <input class="form-control form-control-lg input-ouvidoria " type="text"
                            placeholder="E-mail" aria-label=".form-control-lg example" name="email"
                            id="email">

                        <span id="feedback-email" style="color:red!important;"
                            class="form-text text-error"></span>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <textarea required class="form-control input-ouvidoria input-ouvidoria-textarea" placeholder="Mensagem" name="mensagem" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea" style="color: rgba(2, 19, 54, 1)">Mensagem</label>
                          </div>

                        <span id="feedback-email" style="color:red!important;"
                            class="form-text text-error"></span>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="acordo-id" name="acordo">
                            <label class="form-check-label" for="acordo-id" style="color: rgb(255, 255, 255)">
                              Estou de acordo com a Política de Privacidade da Araujo Fontes
                            </label>
                          </div>

                        <span id="feedback-email" style="color:red!important;"
                            class="form-text text-error"></span>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary" onclick="sendEmail()" style="background-color: #183967; border-color: #183967">Enviar</button>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-12" id="div-mensagem-sucesso" style="display:none;">
                        <span style="color:black;"><i class="fas fa-check"></i> Mensagem enviada com
                            sucesso!</span>
                    </div>
                </div>
            </form>
        </div>
    </div>


    </div>


    @include('layout.footer')

    <script src="{{ asset('/js/header.js') }}"></script>
    <script src="{{ asset('/js/email.js') }}"></script>

</body>

</html>
