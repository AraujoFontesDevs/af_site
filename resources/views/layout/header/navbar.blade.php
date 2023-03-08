<header class="w-100 bg-blue d-flex justify-content-between align-items-center sticky-top" id="mainHeader">

{{-- <header class="w-100 bg-blue d-flex justify-content-between align-items-center sticky-top header-mobile" id="mainHeader"> --}}
{{-- >>>>>>> Stashed changes:resources/views/pages/navbar.blade.php --}}
    <div id="headerLogo">
        <a href="{{ route('index') }}">
            <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo Araújo Fontes">
        </a>
    </div>
    <nav id="headerMenu">
        <ul class="d-flex mb-0 gap-5 f-weight-700 text-align-center">
            <li><a href="/quem-somos">Quem Somos</a></li>
            <li><a href="#acting">Atuação</a></li>
            <li><a href="#selectedTransactions">Transações</a></li>
            <li><a href="/equipe">Equipe</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </nav>
    <nav id="headerMenuMobile" class="position-relative" style="display: none;">
        <i class="fa-solid fa-bars" id="menuButton"></i>
        <ul class="position-absolute text-center" style="display: none;">
            <li><a href="/quem-somos">Quem Somos</a></li>
            <li><a href="#acting">Atuação</a></li>
            <li><a href="#selectedTransactions">Transações</a></li>
            <li><a href="/equipe">Equipe</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </nav>
</header>
