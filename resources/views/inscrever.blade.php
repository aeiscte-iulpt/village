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
</style>
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset" style="margin-top:3rem;">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Inscrições</h2>
        </div>
        <div class="box-position" style="background-color:#e6c492;"></div>
    </div>
</section>
<!-- Why choose us-->
<section class="container" style="margin-top:3rem;margin-bottom:3rem;">
    <div class="card shadow" id="accordionFlushExample">
        <div class="card-header text-center">
            <h4>Formulário de inscrição</h4>
        </div>
        <div class="card-body" style="padding:3rem;">

            <form id="form-submit" class="row g-3" action="{{ url('/inscricao-2023') }}" method="post">
                @csrf
                <div class="col-md-3"></div>

                <div class="col-md-6 text-center">
                    <label for="inputEmail4" class="form-label">Nome do Quarto</label>
                    <input type="text" name="nome_mesa" class="form-control" id="inputEmail4">
                </div>
                <div class="accordion accordion-flush shadow" style="padding:0.2rem;border-radius:10px;"
                    id="accordionFlushExample">
                    <div class="accordion-item">
                        <h3 style="margin:0.8rem;" class="accordion-header" id="flush-heading1">
                            <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse2">
                                <div style=" display:flex;align-items: center;justify-content: space-between;">
                                    <ul>
                                        <li><i class="bi bi-check2-all"></i>Dados do Responsável</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse1" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Nome</label>
                                        <input required type="text" name="nome9" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Email</label>
                                        <input required type="email" name="email9" class="form-control"
                                            id="inputPassword4">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto Móvel</label>
                                        <input required type="text" name="phone9" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">Contacto de Emergência</label>
                                        <input required type="text" name="intolerante9" class="form-control"
                                            id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">És Vegetariano?</label>
                                        <select required name="is_vegan9" id="inputState" class="form-select">
                                            <option value="" disabled selected>Seleciona uma opção..</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Nº Aluno</label>
                                        <input required name="aluno9" type="text" class="form-control" id="inputZip">
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
                                        <li><i class="bi bi-check2-all"></i>Membro 2</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse2" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <p>Siga os passos para fazer um pedido: <br><br>

                                    1. Insira o endereço para recolha e entrega
                                    <br>
                                    2. Pode optar por fazê-lo como um pedido imediato ou um pedido agendado
                                    com base nas suas necessidades<br>
                                    -> Pedido imediato: o motorista irá fazer a recolha num período máximo
                                    de 30 minutos<br>
                                    -> Pedido agendado: pode selecionar o horário de 30 minutos até 30
                                    dias<br>
                                    3. Escolha o tipo de serviço que pretende e selecione 1 de 3 serviços
                                    disponíveis.
                                    <br>
                                    4. Se houver alguma informação de referência que queira fornecer ao
                                    motorista, pode adicioná-la.
                                    <br>
                                    5. Confirme as informações de contato e selecione a sua forma de
                                    pagamento.
                                    <br>
                                    6. Clique em "Fazer pedido" e nós tratamos de tudo com o motorista
                                </p>

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
                                        <li><i class="bi bi-check2-all"></i>Membro 3</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse3" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <p>Siga os passos para fazer um pedido: <br><br>

                                    1. Insira o endereço para recolha e entrega
                                    <br>
                                    2. Pode optar por fazê-lo como um pedido imediato ou um pedido agendado
                                    com base nas suas necessidades<br>
                                    -> Pedido imediato: o motorista irá fazer a recolha num período máximo
                                    de 30 minutos<br>
                                    -> Pedido agendado: pode selecionar o horário de 30 minutos até 30
                                    dias<br>
                                    3. Escolha o tipo de serviço que pretende e selecione 1 de 3 serviços
                                    disponíveis.
                                    <br>
                                    4. Se houver alguma informação de referência que queira fornecer ao
                                    motorista, pode adicioná-la.
                                    <br>
                                    5. Confirme as informações de contato e selecione a sua forma de
                                    pagamento.
                                    <br>
                                    6. Clique em "Fazer pedido" e nós tratamos de tudo com o motorista
                                </p>

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
                                        <li><i class="bi bi-check2-all"></i>Membro 4</li>
                                    </ul>
                                </div>
                            </a>
                        </h3>
                        <div style="margin:0.8rem;" id="flush-collapse4" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div style="padding:1.4rem;" class="accordion-body">
                                <p>Siga os passos para fazer um pedido: <br><br>

                                    1. Insira o endereço para recolha e entrega
                                    <br>
                                    2. Pode optar por fazê-lo como um pedido imediato ou um pedido agendado
                                    com base nas suas necessidades<br>
                                    -> Pedido imediato: o motorista irá fazer a recolha num período máximo
                                    de 30 minutos<br>
                                    -> Pedido agendado: pode selecionar o horário de 30 minutos até 30
                                    dias<br>
                                    3. Escolha o tipo de serviço que pretende e selecione 1 de 3 serviços
                                    disponíveis.
                                    <br>
                                    4. Se houver alguma informação de referência que queira fornecer ao
                                    motorista, pode adicioná-la.
                                    <br>
                                    5. Confirme as informações de contato e selecione a sua forma de
                                    pagamento.
                                    <br>
                                    6. Clique em "Fazer pedido" e nós tratamos de tudo com o motorista
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm nav-link nav-link-ltr" style="margin-top:2rem;padding:0.8rem;width:30%;font-weight:bold; color:#cbae73;background-color:rgba(15,23,72,0.9); ;
    border-color: var(--bs-btn-hover-border-color);">Inscrever</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection