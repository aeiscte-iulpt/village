@extends('layout')

@section('content')
<style>
.breadcrumbs-custom {
    position: relative;
    overflow: hidden;
}

[class*='bg-overlay-'] {
    position: relative;
}

[class*='bg-'] {
    background-size: cover;
    background-position: center center;
}

.context-dark,
.bg-gray-dark,
.bg-primary,
.context-dark h1,
.bg-gray-dark h1,
.bg-primary h1,
.context-dark h2,
.bg-gray-dark h2,
.bg-primary h2,
.context-dark h3,
.bg-gray-dark h3,
.bg-primary h3,
.context-dark h4,
.bg-gray-dark h4,
.bg-primary h4,
.context-dark h5,
.bg-gray-dark h5,
.bg-primary h5,
.context-dark h6,
.bg-gray-dark h6,
.bg-primary h6,
.context-dark [class*='heading-'],
.bg-gray-dark [class*='heading-'],
.bg-primary [class*='heading-'] {
    color: #ffffff;
}

.box-position {
    position: absolute;
    left: 0;
    top: 5%;
    width: calc(100% + 150px);
    height: calc(100% + 250px);
    will-change: transform;
    animation: bgPos 100s linear infinite;
    transform: translate3d(-75px, -75px, 0) rotate(0.001deg);
    background-position: 50% 50%;
    background-size: cover;
    z-index: -1;
}

.breadcrumbs-custom {
    position: relative;
    overflow: hidden;
    padding: 70px 0;
    text-align: center;
    background-color: #cccccc;
    z-index: 1;
}
</style>
<style>
.accordion-button::after {
    margin: auto;
    margin-right: inherit;
}

.accordion-button:not(.collapsed) {
    color: black !important;
    background-color: white;
    box-shadow: inset 0 0 0 white;
}

.accordion-button {
    padding: 0px !important;
    align-items: flex-start !important;
}

.features .tab-pane h3 {
    padding-bottom: 0px;
}

.tx {
    text-decoration: none !important;
    list-style: none;
    font-weight: bold;
    font-size: 1.2rem;

}

.accordion-button:hover {
    color: #cf1c29 !important;
}

.tx:hover {}
</style>
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-60" style="height:20rem !important">
        <div class="container">
            <h2 class="breadcrumbs-custom-title shadow"
                style="position:absolute; top:40%;right:0;bottom:0;left:0; color:#fdc929"><b>PRÉ-INSCRIÇÕES</b></h2>
        </div>
        <div class="box-po" style="background: #0000007d; width: 111%;height: 217%;margin-top: -7rem !important;">
        
        <div class="box-position"
            style="background:url('https://village.aeiscte-iul.pt/img/todos/IMG_1766.jpg');background-size:cover;background-position:center;">
        </div>
        </div>
    </div>
</section>
<!-- Why choose us-->
<section class="container" style="margin-top:3rem;margin-bottom:3rem;">
    <div class="card shadow" id="accordionFlushExample" style="border: 0;">
        <div class="card-header text-center" style="border: 0;">
            <h4>Formulário de inscrição</h4>
        </div>
        <div class="card-body" style="padding:3rem;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::get('erro'))
            <div class="alert alert-danger">
                <strong>{{Session::get('erro')}}</strong>
            </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
            <form id="form-submit" class="row g-3" action="{{ url('/inscricao-2023') }}" method="post">
                @csrf
                <div class="col-md-3"></div>

                <div class="col-md-6 text-center">
                    <label for="inputEmail4" class="form-label">Nome do Quarto <b style="color:#cf1c29">*</b></label>
                    <input type="text" name="nome_quarto" class="form-control" id="inputEmail4">
                </div>
                <div class="accordion accordion-flush shadow"
                    style="padding:0.2rem;border-radius:10px;margin-top:0.6rem" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading1">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse2">
                                <div style=" display:flex;align-items: center;justify-content: space-between;">
                                    <ul>
                                        <li class="tx"><i class="bi bi-check2-all"></i>Dados do Responsável</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse1" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nome<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="nome1" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Email<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="email" name="email1" class="form-control"
                                            id="inputPassword4">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Data de Nascimento<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="date" name="date1" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Nº de Documento de
                                            Identificação<b style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="ndi1" class="form-control" id="inputCity">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto Móvel<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="phone1" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto de Emergência<b
                                                style="color:#cf1c29">*</b></label>
                                        <input placeholder="(982434342- Mãe)" required type="text" name="phone_emerg1" class="form-control"
                                            id="inputCity">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Situação Atual<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="situacao1" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Atual Aluno">Atual Aluno</option>
                                            <option value="Alumni">Alumni</option>
                                          
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Nº Aluno<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="n_aluno1" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Transporte<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="transporte1" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Autocarro">Autocarro</option>
                                            <option value="Transporte Privado">Transporte Privado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Curso<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="curso1" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Ano Curricular<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="ano_cu1" type="text" class="form-control" id="inputZip">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Condição de Saúde (alergias, doenças,
                                            etc)</label>
                                        <input name="saude1" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Número de identificação do Cartão
                                            Europeu de Saúde (caso tenhas):</label>
                                        <input name="nices1" type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion accordion-flush shadow"
                    style="padding:0.2rem;border-radius:10px;margin-top:0.6rem" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading2">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                <div style=" display:flex;align-items: center;justify-content: space-between;">
                                    <ul>
                                        <li class="tx"><i class="bi bi-check2-all"></i>Membro 2</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse2" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nome<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="nome2" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Email<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="email" name="email2" class="form-control"
                                            id="inputPassword4">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Data de Nascimento<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="date" name="date2" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Nº de Documento de
                                            Identificação<b style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="ndi2" class="form-control" id="inputCity">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto Móvel<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="phone2" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto de Emergência<b
                                                style="color:#cf1c29">*</b></label>
                                        <input placeholder="(982434342- Mãe)" required type="text" name="phone_emerg2" class="form-control"
                                            id="inputCity">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Situação Atual<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="situacao2" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Atual Aluno">Atual Aluno</option>
                                            <option value="Alumni">Alumni</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Nº Aluno<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="n_aluno2" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Transporte<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="transporte2" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Autocarro">Autocarro</option>
                                            <option value="Transporte Privado">Transporte Privado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Curso<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="curso2" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Ano Curricular<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="ano_cu2" type="text" class="form-control" id="inputZip">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Condição de Saúde (alergias, doenças,
                                            etc)</label>
                                        <input name="saude2" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Número de identificação do Cartão
                                            Europeu de Saúde (caso tenhas):</label>
                                        <input name="nices2" type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion accordion-flush shadow"
                    style="padding:0.2rem;border-radius:10px;margin-top:0.6rem" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading3">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse2">
                                <div style=" display:flex;align-items: center;justify-content: space-between;">
                                    <ul>
                                        <li class="tx"><i class="bi bi-check2-all"></i>Membro 3</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse3" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nome<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="nome3" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Email<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="email" name="email3" class="form-control"
                                            id="inputPassword4">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Data de Nascimento<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="date" name="date3" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Nº de Documento de
                                            Identificação<b style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="ndi3" class="form-control" id="inputCity">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto Móvel<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="phone3" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto de Emergência<b
                                                style="color:#cf1c29">*</b></label>
                                        <input placeholder="(982434342- Mãe)" required type="text" name="phone_emerg3" class="form-control"
                                            id="inputCity">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Situação Atual<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="situacao3" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Atual Aluno">Atual Aluno</option>
                                            <option value="Alumni">Alumni</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Nº Aluno<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="n_aluno3" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Transporte<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="transporte3" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Autocarro">Autocarro</option>
                                            <option value="Transporte Privado">Transporte Privado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Curso<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="curso3" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Ano Curricular<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="ano_cu3" type="text" class="form-control" id="inputZip">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Condição de Saúde (alergias, doenças,
                                            etc)</label>
                                        <input name="saude3" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Número de identificação do Cartão
                                            Europeu de Saúde (caso tenhas):</label>
                                        <input name="nices3" type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion accordion-flush shadow"
                    style="padding:0.2rem;border-radius:10px;margin-top:0.6rem" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading4">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse2">
                                <div style=" display:flex;align-items: center;justify-content: space-between;">
                                    <ul>
                                        <li class="tx"><i class="bi bi-check2-all"></i>Membro 4</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse4" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nome<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="nome4" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Email<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="email" name="email4" class="form-control"
                                            id="inputPassword4">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Data de Nascimento<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="date" name="date4" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Nº de Documento de
                                            Identificação<b style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="ndi4" class="form-control" id="inputCity">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto Móvel<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required type="text" name="phone4" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto de Emergência<b
                                                style="color:#cf1c29">*</b></label>
                                        <input placeholder="(982434342- Mãe)" required type="text" name="phone_emerg4" class="form-control"
                                            id="inputCity">
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Situação Atual<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="situacao4" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Atual Aluno">Atual Aluno</option>
                                            <option value="Alumni">Alumni</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Nº Aluno<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="n_aluno4" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputState" class="form-label">Transporte<b
                                                style="color:#cf1c29">*</b></label>
                                        <select required name="transporte4" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="Autocarro">Autocarro</option>
                                            <option value="Transporte Privado">Transporte Privado</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Curso<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="curso4" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Ano Curricular<b
                                                style="color:#cf1c29">*</b></label>
                                        <input required name="ano_cu4" type="text" class="form-control" id="inputZip">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Condição de Saúde (alergias, doenças,
                                            etc)</label>
                                        <input name="saude4" type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">Número de identificação do Cartão
                                            Europeu de Saúde (caso tenhas):</label>
                                        <input name="nices4" type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        <b style="color:#cf1c29">*</b>Declaro que li, concordo e aceito toda a informação presente no
                        guia de inscrição relativa ao
                        pagamento do fim de semana e ao funcionamento da caução do alojamento
                    </label>
                </div>
                <button type="submit" class="btn btn-sm nav-link nav-link-ltr" style="margin-top:2rem;padding:0.8rem;width:30%;font-weight:bold; color:#e30613;background-color:var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);">Inscrever</button>

            </form>

        </div>
    </div>
</section>

@endsection