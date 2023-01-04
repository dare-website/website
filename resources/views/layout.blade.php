<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DARE</title>
    <link rel="icon" href="{{ asset('img/dare-horizontal-logo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>

    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<style>
.nav-item {
    margin-right: 5rem;
}

.dropdown-menu a:hover {
    color: #000 !important;
}

.dropdown-menu a:active {
    color: #fff !important;
    background: linear-gradient(90deg, rgba(249, 198, 86, 1) 0%, rgba(252, 162, 103, 1) 14%, rgba(202, 40, 65, 1) 35%, rgba(215, 53, 136, 1) 55%, rgba(77, 40, 93, 1) 80%, rgba(14, 162, 154, 1) 100%);
}
</style>

<body class="antialiased">
  
    <script>
        $(document).ready(function() {

            $('ul.navbar-nav > li')
                .click(function(e) {
                    $('ul.navbar-nav > li')
                        .removeClass('active');
                    $(this).addClass('active');
                });
        });
    </script>
    <nav class="navbar navbar-expand-lg shadow-sm" style="padding: 0px !important;">
        <div class="container-fluid">
            <a style="margin-left:7rem;" class="navbar-brand" href="/"><img style="width:6rem;"
                    src="{{ asset('img/dare-horizontal-logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul style="margin-right:0rem !important;" class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/#sobre-nos">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/produtos">Produtos</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-ltr dropdown-toggle" href="/produtos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            Produtos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/produtos">ESFERIFICACAO</a></li>
                            <li><a class="dropdown-item" href="#">LOLLIPOPS</a></li>
                            <li><a class="dropdown-item" href="#">CANAPES</a></li>
                            <li><a class="dropdown-item" href="#">SEMI-ACABADOS</a></li>
                            <li><a class="dropdown-item" href="#">CITRICOS EXOTICOS</a></li>
                        </ul>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="#contacto">Contactos</a>
                    </li>
                    <!---->
                </ul>
            </div>
        </div>



    </nav>

    <main>
        @yield('content')
    </main>



</body>

</html>