<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DARE</title>
    <link rel="icon" href="{{ asset('img/dare-vertical-logo.png') }}" type="image/x-icon">
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
    document.addEventListener("DOMContentLoaded", function() {
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
    });
    </script>
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="padding: 0px !important;">
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
                        <a class="nav-link nav-link-ltr" href="/#sobre-nos">{{__('messages.about')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/produtos">{{__('messages.product')}}</a>
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
                        <a class="nav-link nav-link-ltr" href="#contacto">{{__('messages.cont')}}</a>
                    </li>
                
                    <div class="nav-item" style="display:flex;margin-left:auto;margin-right:auto;">

                        <a class="nav-link" style="<?php if(strcmp(session()->get('applocale'),"pt")==0){ ?> text-decoration: underline;<?php } ?> padding-left:.08 !important;padding-right:.08 !important;"
                            href="{{ route('lang.switch', 'pt') }}"> PT</a> 
                        <a class="nav-link" style="padding-left:.08 !important;padding-right:.08 !important;">|&nbsp</a>
                        <a class="nav-link"
                            style="<?php if(strcmp(session()->get('applocale'),"en")==0){ ?> text-decoration: underline;<?php } ?> padding-right:0 !important;padding-left:0 !important;margin-right:1.5rem;"
                            href="{{ route('lang.switch', 'en') }}"> EN &nbsp</a>


                    </div>

                </ul>
            </div>
        </div>
        <script type="text/javascript">
        var comboGoogleTradutor = null; //Variavel global

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'pt',
                includedLanguages: 'en,pt',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');

            comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
        }

        function changeEvent(el) {
            if (el.fireEvent) {
                el.fireEvent('onchange');
            } else {
                var evObj = document.createEvent("HTMLEvents");

                evObj.initEvent("change", false, true);
                el.dispatchEvent(evObj);
            }
        }

        function trocarIdioma(sigla) {
            if (comboGoogleTradutor) {
                comboGoogleTradutor.value = sigla;
                changeEvent(comboGoogleTradutor);
                if (sigla == "pt") {
                    changeEvent(comboGoogleTradutor);
                }
                //Dispara a troca
            }
        }
        </script>
        <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>


    </nav>

    <main>
        @yield('content')
    </main>
    <style>
    .goog-te-banner-frame {

        visibility: hidden !important;
        display: none !important;
    }
    </style>
    <div id="google_translate_element" style="visibility:hidden;display:none !important;" class="boxTradutor"></div>

</body>

</html>