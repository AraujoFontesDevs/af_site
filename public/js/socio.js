$(function() {
    var socios = [
        {
            id: 1,
            nome: 'Marcelo Araújo',
            cargo: 'Sócio Fundador',
            url_img: '/assets/images/socios/Marcelo-Araujo.png',
            url_linkedin: '',
            email: '',
            description: [
                `Marcelo Araújo fundou a Araújo Fontes em 1990 juntamente com Evaldo Fontes.Trabalhou como consultor na área de Auditoria e Consultoria da Arthur Andersen (1985-1989) e como diretor da Deloitte Touche Tohmatsu (2001-2002).`,
                `Ministrou curso de pós-graduação em Consultoria Tributária na Fundação Mineira de Educação e Cultura – FUMEC.`
            ],
            formacao: [

                    '2002 - Mestre em Direito Empresarial pela Faculdade de Direito Milton Campos;',
                    '1994 - Graduado em Direito pela Universidade Federal de Minas Gerais – UFMG;',
                    '1988 - Ciências Contábeis pela Universidade Federal de Minas Gerais – UFMG;',
                    '1985 - Bacharel em Administração de Empresas pela Universidade Fedseral de Minas Gerais – UFMG;'

            ]
        },
        {
            id: 2,
            nome: 'Evaldo Fontes',
            cargo: 'Sócio Fundador',
            url_img: '/assets/images/socios/Evaldo-Fontes.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 3,
            nome: 'Alexandre Romanelli',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Alexandre-Romanelli.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 4,
            nome: 'Daniel Uchoa',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Daniel-Uchoa.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 5,
            nome: 'Fábio Salazar',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Fábio-Salazar.png',
            url_linkedin: '',
            email: '',
        },
        {
            id: 6,
            nome: 'Felipe Borlido',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Felipe-Borlido.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 7,
            nome: 'Gederson da Silva Ferreira',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Gederson-Ferreira.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 8,
            nome: 'Leonardo Teixeira',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Leonardo-Teixeira.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 9,
            nome: 'Marco Aurélio Fontes',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Marco-Fontes.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 10,
            nome: 'Rafael Vieira',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Rafael-Vieira.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 11,
            nome: 'Raul Ciarelli',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Raul-Ciarelli.png',
            url_linkedin: '',
            email: ''
        },
        {
            id: 11,
            nome: 'Sergio Carlos',
            cargo: 'Sócio',
            url_img: '/assets/images/socios/Sérgio.png',
            url_linkedin: '',
            email: ''
        }
    ];


    var html = "";

    $.each(socios, function(i, value){
        console.log(value);
        html += `
        <div class="col card-padding-equipe">
            <div class="card h-100 cards-societario">
                <div class="card-socio-header" style="background-image:url(${value.url_img});">
                </div>
                <div class="card-body card-body-equipe">
                <h5 class="card-title card-title-equipe">${value.nome}</h5>
                <p class="card-text">${value.cargo}</p>

                <div class="row footer-card-equipe">
                    <div class="col-2">
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                        </a>
                    </div>
                    <div class="col-2" style="margin-top: 4px">
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        `
    });

    $('#cards-socios').html(html);
})
