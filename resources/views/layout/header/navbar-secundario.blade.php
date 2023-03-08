<header class="w-100 d-flex justify-content-between align-items-center sticky-top bg-grey hide-with-scroll header-mobile-1" id="mainHeaderAbout">
    <div id="headerLogo">
        <a href="{{ route('index') }}">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes">
        </a>
    </div>
    <nav id="headerMenuAbout">
        <ul class="d-flex mb-0 gap-5 f-weight-700 text-align-center">
            <li><a href="/quem-somos">Quem Somos</a></li>
            <li><a href="">Atuação</a></li>
            <li><a href="">Transações</a></li>
            <li><a href="/equipe">Equipe</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </nav>
    <nav id="headerMenuMobile" class="position-relative" style="display: none;">
        <i class="fa-solid fa-bars" id="menuButton"></i>
        <ul class="position-absolute text-center" style="display: none;">
            <li><a href="/quem-somos">Quem Somos</a></li>
            <li><a href="">Atuação</a></li>
            <li><a href="">Transações</a></li>
            <li><a href="/equipe">Equipe</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </nav>
</header>


