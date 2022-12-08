<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DARE</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>

    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link href="css/style.css" rel="stylesheet">
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
    < script >
        $(document).ready(function() {

            $('ul.navbar-nav > li')
                .click(function(e) {
                    $('ul.navbar-nav > li')
                        .removeClass('active');
                    $(this).addClass('active');
                });
        });
    </script>
    </script>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a style="margin-left:7rem;" class="navbar-brand" href="/"><img style="width:4rem;"
                    src="img/dare-horizontal-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul style="margin-right:0rem !important;" class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/produtos1">Produtos</a>
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
                        <a class="nav-link nav-link-ltr" href="/contactos1">Contactos</a>
                    </li>
                    <!---->
                </ul>
            </div>
        </div>



    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center text-lg-start text-white footer-16371" style="background-color: #52225F;">
        <!-- Grid container -->
        <div class="container pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">

                        <h3 style="font-family: 'Adam-Medium';padding-top:3rem;" class="text-white">
                            DO YOU DARE <br>WITH US?
                        </h3>

                        <h4 style="font-family: 'Adam-Medium';padding-top:1.5rem;" class="text-white">
                            REDES SOCIAIS
                        </h4>
                        <a style="font-size:1.5rem;margin-right:1rem;color: #fff !important" href="#"><i
                                class="fi-xnsuxl-facebook"></i></a>
                        <a style="font-size:1.35rem;color: #fff !important" href="#"><i
                                class="fi-xnsuxl-instagram"></i></a>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h3 style="font-family: 'Adam-Medium';padding-top:3rem;" class="text-white">
                            CONTACTOS
                        </h3>
                        <h6 style="margin-bottom:1rem;">
                            <a style="text-decoration:none;font-family:'Raleway-Regular' " href="mailto:info@dare.pt"
                                class="text-white">info@dare.pt</a>
                        </h6>

                        <h6 style="margin-bottom:1rem;">
                            <a style="text-decoration:none;font-family:'Raleway-Regular' " href="tel:+351913497009"
                                class="text-white">+351 913
                                497
                                009</a>
                        </h6>

                        <h6 style="font-family:'Raleway-Regular' ">
                            Rua Placedino dos Reis,Nº8 1ºC <br>
                            2710-336 Linhó <br>
                            Portugal

                        </h6>

                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <style>
                    input[type="text"] {
                        background: rgba(0, 0, 0, 0);
                        border: none;
                        outline: none;
                    }

                    ::placeholder {
                        /* Chrome, Firefox, Opera, Safari 10.1+ */
                        color: white;
                    }
                    </style>
                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-5 col-xl-5 mt-3 text-black footer-newsletter">
                        <h3 style="font-family: 'Adam-Medium';padding-top:3rem;" class="text-white">
                            NEWSLETTER
                        </h3>
                        <p class="text-white" style="font-family: 'Adam-Medium';">Não perca nada. <br> Subscreva para
                            receber o nosso catálogo, promoções exclusivas e acesso antecipado a vendas flash!</p>
                        <div style="">
                            <form action="/news" method="post">
                                @csrf
                                <input type="email" placeholder="Email*" name="email">
                                <input type="submit" value="Subscrever">
                            </form>
                        </div>

                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-white "
            style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: #52225F">
            <h6 style="font-size:0.6rem;">© 2022 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>