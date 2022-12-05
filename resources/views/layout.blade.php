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
                        <a class="nav-link nav-link-ltr" href="/contactos">Contactos</a>
                    </li>
                    <!---->
                </ul>
            </div>
        </div>



    </nav>

    <main>
        @yield('content')
    </main>
    <!--<footer class="footer-16371">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <div class="footer-site-logo mb-4">
                            <a href="#"><img style="width:12rem" src="img/footer-dare.png" alt=""></a>
                        </div>
                        <ul class="list-unstyled nav-links mb-5">
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Produtos</a></li>
                            <li><a href="#">Contactos</a></li>
                        </ul>

                        <div class="social mb-4">
                            <h3>Stay in touch</h3>
                            <ul class="list-unstyled">
                                <li class="in"><a href="#"><i class="fi-xnsuxl-instagram"></i></a></li>
                                <li class="fb"><a href="#"><i class="fi-xnsuxl-facebook"></i></a></li>
                                <li class="tw"><a href="#"><i class="fi-xnsuxl-twitter-solid"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                            <p class="mb-0"><small>&copy; Inoveit. All Rights Reserved.</small></p>
                        </div>


                    </div>
                </div>
            </div>
        </footer>-->
    <footer class="text-center text-lg-start text-white footer-16371"
        style="background-color: #fffff; margin-top:5rem;">
        <!-- Grid container -->
        <div class="container pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">
                        <div class="mb-2">
                            <a href="#"><img style="width:12rem" src="img/footer-dare.png" alt=""></a>
                        </div>
                        <p style="font-family: 'Adam-Medium';" class="text-black">
                            Somos especialistas em surpreender.
                        </p>
                        <p style="font-family: 'Adam-Medium';color:black;"><i class="fi-xnluxl-envelope"></i><a
                                style="text-decoration:none; color:black !important" href="mailto:filipa.cruz@dare.pt">
                                FILIPA.CRUZ@DARE.PT
                            </a></p>
                        <p style="font-family: 'Adam-Medium';color:black;"><i class="fi-xnlrxl-phone"></i> <a
                                style="text-decoration:none; color:black !important" href="tel:+351913497009">+351 913
                                497 009</a></p>

                        <a style="color: #df588a !important" href="#"><i class="fi-xnsuxl-instagram"></i></a>
                        <a style="color: #3742d0 !important" href="#"><i class="fi-xnsuxl-facebook"></i></a>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold text-black"
                            style="font-family: 'Adam-Medium';font-weight:bold;">PRODUTOS</h6>
                        <p style="font-family: 'Adam-Medium';">
                            <a style="text-decoration:none" class="text-black">ESFERIFICACAO</a>
                        </p>
                        <p style="font-family: 'Adam-Medium';">
                            <a style="text-decoration:none" class="text-black"> LOLLIPOPS</a>
                        </p>
                        <p style="font-family: 'Adam-Medium';">
                            <a style="text-decoration:none" class="text-black">CANAPES</a>
                        </p>
                        <p style="font-family: 'Adam-Medium';">
                            <a style="text-decoration:none" class="text-black">SEMI-ACABADOS</a>
                        </p>
                        <p style="font-family: 'Adam-Medium';">
                            <a style="text-decoration:none" class="text-black">CITRICOS EXOTICOS</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-black footer-newsletter">
                        <h6 style="font-family: 'Adam-Medium';font-weight:bold;">NEWSLETTER</h6>
                        <p class="text-black" style="font-family: 'Adam-Medium';">Novidades, descontos e sugestões. Subscreva a nossa newsletter para não perder nada.</p>
                        <form action="" method="post">
                            <input type="email" name="email">
                            <input type="submit" value="Subscrever">
                        </form>

                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-white p-3 "
            style="margin-top:0.9rem; background: linear-gradient(90deg, rgba(249,198,86,1) 0%, rgba(252,162,103,1) 14%, rgba(202,40,65,1) 35%, rgba(215,53,136,1) 55%, rgba(77,40,93,1) 80%, rgba(14,162,154,1) 100%);">
            © 2020 Copyright
            <a class="text-white" href="#">inoveit.pt</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>