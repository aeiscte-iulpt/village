@extends('layout')

@section('content')
<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<script defer src="https://friconix.com/cdn/friconix.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
.landing-hero {
    background-size: 100% 100vh;
    height: 100vh;
    background-repeat: no-repeat;
}

.title111 {
    position: absolute;
    font-family: 'Bebas Neue', cursive;
    font-family: 'Roboto', sans-serif;
    top: 50%;
    left: 6%;
}

@media(max-width: 449px) {
    .oh {
        font-size: 2rem !important;
    }

    .versa1 {
        background-image: url('img/homete.png') !important;
        background-size: cover;
    }




    .landing-hero {
        background-size: 100% 100vh !important;
        height: 100vh !important;
        background-repeat: no-repeat;
        width: 100vw !important;
    }



    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
        top: 20%;
        left: 4%;
    }

    .butoes {
        padding-top: 7rem;
    }

    .vamos2 {
        display: none !important;
    }

    .vamos {
        display: none !important;
    }

    .map {
        width: 22rem !important;
    }

    /*.al {margin-left:7rem;margin-right:7rem;}*/
}

@media(min-width:450px) and (max-width: 730px) {


    .versa1 {
        background-image: url('img/homete.png') !important;
        background-size: cover;
    }



    .landing-hero {
        background-size: 100% 100vh !important;
        height: 100vh !important;
        background-repeat: no-repeat;
        width: 100vw !important;

        /*.al {margin-left:7rem;margin-right:7rem;}*/
    }

    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
        /* top: 50%;
        left: 50%;*/
    }

    .vamos2 {
        display: none !important;
    }

    .vamos {
        display: none !important;
    }

    .butoes {
        padding-top: 7rem !important;
    }

    .map {
        width: 22rem !important;
    }
}

.btn:hover {
    background-color: rgb(250 183 0) !important;
    color: rgb(227 6 19) !important;
}
</style>

<div class=" versa1 landing-hero" style="width:100%;background-image: url('img/site-pc.png');">
    <div class="col-md-12 text-center vamos2">
        <img src="img/logo principal.png" style="padding-top: 15vh;width: 16rem;" alt="Example image"
            class="img-responsive" />
    </div>
    <div class="col-md-12 text-center d-flex justify-content-center butoes ">
        <button formtarget="_blank"
            onclick="location.href='https://village.aeiscte-iul.pt/pdf/Registration Guide - Iscte Village.pdf'"
            class="btn btn-sm nav-link nav-link-ltr" style="font-weight:bold; color:#e30613;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);padding:0.5rem;">Registration Guide</button>

        <button formtarget="_blank"
            onclick="location.href='https://village.aeiscte-iul.pt/pdf/Guia de Inscrições - Iscte Village.pdf'"
            class="btn btn-sm nav-link nav-link-ltr" style="margin-left:1rem;font-weight:bold; color:#e30613;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);padding:0.5rem;">Guia de Inscrições</button>

    </div>
    <div class="col-md-12 text-center d-flex justify-content-center butoes ">
        <button onclick="location.href='https://www.village.aeiscte-iul.pt/inscrever'"
            class="btn btn-sm nav-link nav-link-ltr" style="margin-top:1rem;font-weight:bold; color:#e30613;background-color: var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);padding:0.5rem;">Pré-Inscrição</button>
    </div>
    <div class="col-md-12 text-center vamos">
        <img src="img/Logo_Branco_Simples.png" style="padding-top: 11vh;width: 5rem;" alt="Example image"
            class="img-responsive" />
    </div>

</div>






<section id="sobre" class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6">
                <!--<img style="border-radius:15px;" class="shadow"
                    src="img/todos/IMG_1766.jpg" alt="" height="" />-->
                <iframe class="map" style="border-radius:10px !important;width:550px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2060.6517718561627!2d-6.985455943945796!3d37.18887549342892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd11d1384b90b62f%3A0x494096f8c29fe8ff!2sAparta%20Hotel%20LEO!5e1!3m2!1spt-PT!2spt!4v1677547145603!5m2!1spt-PT!2spt"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">

                <!-- Bootstrap tabs-->
                <div class="box-width-lg-470">
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-md-left"
                        id="tabs-7">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs" style="border-bottom: 0px ;">
                            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab">
                                    <h4 style="color:#000 !important">Sobre o Iscte Village...</h4>
                                </a></li>

                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-7-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="font-size:1.1rem; color:#000"><b>Quando?</b>
                                            <br>
                                            <img src="img/todos/cronometro (1).png" alt="" style="height:1.5rem;">
                                            <b style="margin-left:0.4rem;font-size:0.85rem; color:#000">De 28 de abril
                                                a 1 de maio (3 noites)</b>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size:1.1rem;color:#000"><b>Onde?</b>
                                            <br>
                                            <img src="img/todos/placeholder.png" alt="" style="height:1.5rem;">
                                            <b style="margin-left:0.4rem;font-size:0.85rem; color:#000">Apartamentos
                                                Leo, Punta Umbria</b>
                                        </p>
                                    </div>

                                    <div class="col-md-6">
                                        <p style="font-size:1.1rem;color:#000"><b>Quanto?</b><br>
                                            <img src="img/todos/dinheiro.png" alt="" style="height:1.5rem;">
                                            <b style="margin-left:0.4rem;font-size:0.85rem; color:#000"> 90 AEs / 80
                                                AEs para sócios e bolseiros</b>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size:1.1rem;color:#000"><b>Método de Pagamento:</b><br>
                                            <img src="img/time.png" alt="" style="height:2rem;">
                                            <b style="margin-left:0.4rem;font-size:0.85rem; color:#000">2
                                                prestações</b>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="font-size:1.1rem;color:#000"><b>Participantes por quarto</b><br>
                                            <img src="img/todos/standing-up-man-.png" alt="" style="height:1.2rem;">
                                            <b style="margin-left:0.4rem;font-size:0.85rem; color:#000">4</b>
                                        </p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-50 justify-content-center align-items-xl-center">
            <h4 style="color:#000 !important;margin-bottom:2rem;text-align:center;">Datas Importantes</h4>
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Pré-Inscrições</th>
                            <td>1 a 10 de março</td>
                        </tr>
                        <tr>
                            <th scope="row">Inscrições (Alunos Atuais)</th>
                            <td>15 de março</td>
                        </tr>
                        <tr>
                            <th scope="row">Alumni (caso haja vagas)</th>
                            <td>16 de março (9h-12h)</td>
                        </tr>
                        <tr>
                            <th scope="row">1º Prestação</th>
                            <td>20 a 24 de março</td>
                        </tr>
                        <tr>
                            <th scope="row">2º Prestação</th>
                            <td>17 a 21 de abril</td>
                        </tr>
                        <tr>
                            <th scope="row">FDS + Caução</th>
                            <td>28 de abril a 1 de maio</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>


</section>


<section class="container" id="FAQ" style="margin-top:3rem;margin-bottom:3rem;">
    <h4 style="color:#000 !important;margin-bottom:2rem;text-align:center;">Perguntas Frequentes</h4>

    <div class=" shadow" id="accordionFlushExample">
        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading2">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Como me posso inscrever?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse2" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Disponibilizamos neste site todas as informações que precisas para te inscreveres no melhor
                            fim de semana do teu ano. <a href="">Clica aqui</a> para seres direcionado para o Guia de
                            Inscrição.
                            (-----inserir o link do guia de inscrição------)</p>

                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading1">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Como são os apartamentos?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse1" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Os apartamentos vão ser formados por grupos de <b>4 pessoas</b>. Os apartamentos dispõem de
                            um
                            microondas, um fogão, frigorífico, torradeira, máquina de café e utensílios para cozinhar.
                            <br>
                            Além disso, também têm toalhas, roupa de cama e um kit de limpeza.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading4">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collaps4">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Onde posso fazer compras?

                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse4" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Sugerimos que leves las provisiones de Lisboa, contudo, existe um Mercadona, a cerca de 20
                            minutos a pé e um Burger King a 5 minutos. Os apartamentos dispõem de um microondas, um
                            fogão, frigorífico e utensílios para cozinhar.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading5">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collaps5">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Qual é o valor da caução?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse5" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> A caução terá o valor de <b>50€ por pessoa</b>, que te será devolvido no final do
                            fim-de-semana se
                            não existirem danos no quarto.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading6">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collaps6">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Se eu quiser mudar algo na minha inscrição, posso
                                    fazê-lo?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse6" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Sim, só tens que te dirigir à secretaria para o fazer. Caso não consigas dirigir-te à
                            secretaria, pedimos que nos envies um email para <a
                                href="mailto:fimdesemana@aeiscte-iul.pt">fimdesemana@aeiscte-iul.pt</a>, contudo, a
                            resposta por email pode demorar um pouco mais do que se fores à secretaria.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading7">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collaps7">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Posso escolher o meu quarto?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse7" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Não, os quartos são atribuídos de forma aleatória a cada grupo.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading8">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collaps8">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Posso inscrever-me se o meu grupo tiver menos ou
                                    mais de 4 elementos?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse8" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Não, todos os grupos são de 4 elementos.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading9">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collaps9">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>A que horas é a partida no dia 28 de abril?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse9" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> A partida do ISCTE acontecerá por volta das 15:00 horas da tarde. <br>
                            A hora do check-in que terá início durante a manhã será anunciada em breve.

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading10">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collaps10">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>O que é que está incluído?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse10" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p>O preço inclui transporte desde o Iscte até Punta e vice-versa; alojamento para as três
                            noites; entrada na festa para as três noites; muitas atividades e surpresas ao longo de todo
                            o fim de semana e um incrível Kit de participante.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading11">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collaps11">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Posso deslocar-me pelos meus próprios meios até
                                    Punta Umbria?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse11" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Sim. Mas não te esqueças que tens que fazer obrigatoriamente o check-in no ISCTE. Para além
                            disso, não garantimos lugar de estacionamento.

                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading13">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collaps13">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Se decidir que não posso ir e já tiver pago, é-me
                                    feita a devolução de alguma prestação?
                                </li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse13" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Não, não serão feitas devoluções. Uma vez efetuados os pagamentos, a tua inscrição fica
                            reservada.

                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading14">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collaps14">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>É obrigatório ter cartão europeu de saúde?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse14" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Não, mas apesar disso aconselhamos-te a fazer, de modo, a ires nesta viagem com o máximo de
                            segurança possível!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;margin-top:0.6rem"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading15">
                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collaps15">
                        <div style=" display:flex;align-items: center;justify-content: space-between;">
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Como posso obter o meu cartão europeu de saúde?</li>
                            </ul>
                        </div>
                    </a>
                </h3>
                <div style="margin:0.8rem;" id="flush-collapse15" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
                    <div style="padding:1.4rem;" class="accordion-body">
                        <p> Para pedires o teu Cartão Europeu de Seguro de Doença, que é totalmente gratuito, basta:
                            Acederes à Segurança Social Direta usando o teu número da Segurança Social > Selecionar o
                            menu "Doença" > Escolher a opção "Obter Cartão Europeu de Seguro de Doença" > Carregar no
                            botão "Iniciar pedido" e seguir as instruções

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>Para outras informações consulta o guia de inscrições ou dirige-te à secretaria da AEISCTE.</p>
</section>

<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row>div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}


.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}

.o-video {
    width: 100%;
    height: 0;
    position: relative;
    padding-top: 56.25%;
    /* 9 / 16 * 100 */
}

.o-video>iframe {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border: 0;
}
</style>



<div class="container" id="anos_anteriores">
    <h4 style="color:#000 !important;margin-bottom:2rem;text-align:center;">👀 Edição anterior...</h4>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_0857.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_0857.jpg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_0872.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_0872.jpg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_0947.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_0947.jpg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_1032.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_1032.jpg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_7225.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_7225.jpg">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/todos/IMG_1766.jpg">
                    <img style="border-radius: 15px;" class="shadow" src="img/todos/IMG_1766.jpg">
                </a>
            </div>


        </div>

    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="o-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HAHZuKUF8ow" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<footer class="text-center text-lg-start text-white footer-16371 shadow" style="background-color: #fffff;">
    <!-- Copyright -->
    <div class="text-center text-black p-3">
        © 2023 Copyright
        <a class="text-black" href="https://aeiscte-iul.pt">AEISCTE-Iul</a>
    </div>
    <!-- Copyright -->
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>


@endsection