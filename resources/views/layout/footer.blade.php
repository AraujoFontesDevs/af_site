<footer id="footer">
    <div class="row footer-info">
        <div class="mb-5 mb-xl-0 d-flex d-xl-block justify-content-center col-12 col-xl-3 d-flex align-items-center">
            <img src="{{ asset('/assets/images/footer_logo.png') }}" alt="Logo AF" id="footerLogo">
        </div>
        <div class="col-12 text-center text-sm-start col-sm-6 col-xl-3 d-flex d-xl-block justify-content-center justify-content-sm-start justify-content-lg-center">
            <ul>
                <li><a href="{{ route('about') }}">Quem Somos</a></li>
                <li><a href="#acting">Atuação</a></li>
                <li><a href="#">Princípios</a></li>
                <li><a href="{{ route('socio') }}">Equipe</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </div>
        <div class="col-12 text-center text-sm-start col-sm-6 col-xl-3 d-flex d-xl-block justify-content-center justify-content-sm-end justify-content-lg-center">
            <ul>
                <li><a href="/ouvidoria">Ouvidoria</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Trabalhe Conosco</a></li>
                <li><a href="mailto:bh@afs.com.br">bh@afs.com.br</a></li>
            </ul>
        </div>
        <div class="mt-3 mt-xl-0 d-flex justify-content-center col-12 col-xl-3 align-items-center footer-socials" style="gap: 15px;">
            <a href="https://www.linkedin.com/company/araujo-fontes"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/araujo_fontes/"><i class="fa-brands fa-instagram"></i></a>
            Siga nossas redes!
        </div>
    </div>
    <div class="row af-logos">
        <img src="{{ asset('/assets/images/footer_logo.png') }}" alt="Logo AF">
        <img src="{{ asset('/assets/images/af_cambio_logo.png') }}" alt="Logo AF Câmbio">
        <img src="{{ asset('/assets/images/af_invest_logo.png') }}" alt="Logo AF Invest">
    </div>

</footer>
