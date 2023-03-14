@extends('layout')

@section('content')
    <script
        src="https://wait.crowdhandler.com/js/latest/main.js?id=bafd15ec3d6de8f58116f0d26c3bb2ccbca9938127e159f1dcde2c14b3594c15">
    </script>
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
                style="position:absolute; top:40%;right:0;bottom:0;left:0; color:#fdc929"><b>INSCRIÇÕES</b></h2>
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
            
                <div class="col-md-3 text-center"></div>
                <div class="col-md-6 text-center">
                    <label for="inputEmail4" class="form-label">Nome do Quarto<b style="color:#cf1c29">*</b></label>
                    <input type="text" name="nome_quarto" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-3 text-center"></div>
                <div class="col-md-3 text-center"></div>
                <div class="col-md-6 text-center">
                    <label for="inputEmail4" class="form-label">Token<b style="color:#cf1c29">*</b></label>
                    <input type="text" name="token" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-3 text-center"></div>
                <div class="col-md-3 text-center"></div>
                <div class="col-md-6 text-center">
                    <button type="submit" class="btn btn-sm nav-link nav-link-ltr" style="margin-top:2rem;padding:0.8rem;width:30%;font-weight:bold; color:#e30613;background-color:var(--bs-btn-hover-bg);
    border-color: var(--bs-btn-hover-border-color);">Inscrever</button>
                </div>
                <div class="col-md-3 text-center"></div>
            </form>



        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
document.querySelector('form').addEventListener('submit', function() {
    document.getElementById('spinner-overlay').style.display = 'flex';
});
</script>



<style>
#spinner-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}



@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}


.pl,
.pl__worm {
    animation-duration: 3s;
    animation-iteration-count: infinite;
}

.pl {
    animation-name: bump;
    animation-timing-function: linear;
    width: 8em;
    height: 8em;
}

.pl__ring {
    stroke: hsla(var(--hue), 10%, 10%, 0.1);
    transition: stroke 0.3s;
}

.pl__worm {
    animation-name: worm;
    animation-timing-function: cubic-bezier(0.42, 0.17, 0.75, 0.83);
}

/* Dark theme */
@media (prefers-color-scheme: dark) {
    :root {
        --bg: hsl(var(--hue), 10%, 10%);
        --fg: hsl(var(--hue), 10%, 90%);
    }

    .pl__ring {
        stroke: hsla(var(--hue), 10%, 90%, 0.1);
    }
}

/* Animations */
@keyframes bump {

    from,
    42%,
    46%,
    51%,
    55%,
    59%,
    63%,
    67%,
    71%,
    74%,
    78%,
    81%,
    85%,
    88%,
    92%,
    to {
        transform: translate(0, 0);
    }

    44% {
        transform: translate(1.33%, 6.75%);
    }

    53% {
        transform: translate(-16.67%, -0.54%);
    }

    61% {
        transform: translate(3.66%, -2.46%);
    }

    69% {
        transform: translate(-0.59%, 15.27%);
    }

    76% {
        transform: translate(-1.92%, -4.68%);
    }

    83% {
        transform: translate(9.38%, 0.96%);
    }

    90% {
        transform: translate(-4.55%, 1.98%);
    }
}

@keyframes worm {
    from {
        stroke-dashoffset: 10;
    }

    25% {
        stroke-dashoffset: 295;
    }

    to {
        stroke-dashoffset: 1165;
    }
}
</style>

<div id="spinner-overlay" style="display: none;">
    <div id="spinner">
        <svg class="pl" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="pl-grad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(193,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </linearGradient>
            </defs>
            <circle class="pl__ring" r="56" cx="64" cy="64" fill="none" stroke="hsla(0,10%,10%,0.1)" stroke-width="16"
                stroke-linecap="round" />
            <path class="pl__worm"
                d="M92,15.492S78.194,4.967,66.743,16.887c-17.231,17.938-28.26,96.974-28.26,96.974L119.85,59.892l-99-31.588,57.528,89.832L97.8,19.349,13.636,88.51l89.012,16.015S81.908,38.332,66.1,22.337C50.114,6.156,36,15.492,36,15.492a56,56,0,1,0,56,0Z"
                fill="none" stroke="url(#pl-grad)" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"
                stroke-dasharray="44 1111" stroke-dashoffset="10" />
        </svg>
    </div>
</div>

@endsection