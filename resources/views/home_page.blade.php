@extends('layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<style>
.landing-hero {
    background-size: 100% 100vh;
    height: 100vh;
    background-repeat: no-repeat;
}

.title111 {
    position: absolute;
    font-family: 'Adam-Medium';
    top: 50%;
    left: 6%;
}

.gradiente {
    height: auto;
    background-size: 100% 100vh;
    background-repeat: no-repeat;
}

.icon1 {
    animation: go-back 1s infinite alternate;
}

.icon2 {
    animation: go-ro 2s infinite alternate;
}

.icon3 {
    animation: scaled-up 1s infinite alternate;
}

.icon4 {
    animation: go-ro2 2s infinite alternate;
}

@keyframes scaled-up {
    0% {
        transform: scale(1);
    }

    100% {
        transform: scale(1.2);
    }
}

@keyframes go-ro2 {
    from {
        transform: translateX(-50px);

    }

    to {
        transform: translateX(0);
    }
}

@keyframes go-ro {
    from {
        transform: translateX(-200px);

    }

    to {
        transform: translateX(0);
    }
}

@keyframes go-back {


    0% {
        transform: rotate(0);
    }

    100% {
        transform: rotate(360deg);
    }
}

@media(max-width: 449px) {
    .oh {
        font-size: 2rem !important;
    }

    .versa1 {
        background-image: url('img/dare-gif-responsive.gif') !important;
        background-size: cover;
    }

    .versa2 {
        background-image: url('img/dare-gif-responsive-01.gif') !important;
        background-size: cover;
    }

    .te {
        margin-top: -16rem;

    }

    .inicio {
        padding-left: 1.2rem !important;
    }

    #textgra {
        font-size: 1.5rem !important;
    }

    .landing-hero {
        background-size: 100% 29vh !important;
        height: 29vh !important;
        background-repeat: no-repeat;
    }

    .text1 {
        font-weight: bold;
        font-size: 1rem !important;
    }

    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
        top: 20%;
        left: 4%;
    }

    /*.al {margin-left:7rem;margin-right:7rem;}*/
}

@media(min-width:450px) and (max-width: 730px) {
    .te {
        margin-top: -20rem;

    }

    .versa1 {
        background-image: url('img/dare-gif-responsive.gif') !important;
        background-size: cover;
    }

    .versa2 {
        background-image: url('img/dare-gif-responsive-01.gif') !important;
        background-size: cover;
    }

    .inicio {

        margin-left: 1.2rem !important;
    }

    #textgra {
        font-size: 2rem !important;
    }

    .landing-hero {
        background-size: 100% 29vh !important;
        height: 29vh !important;
        background-repeat: no-repeat;

        /*.al {margin-left:7rem;margin-right:7rem;}*/
    }

    .title111 {
        position: absolute;
        font-family: 'Adam-Medium';
        top: 20%;
        left: 4%;
    }

    .text1 {
        font-weight: bold;
        font-size: 1rem !important;
    }
}
</style>
<section class="">
    <!--<div class="landing-hero" style="background-image: url('img/dare-gif-versao pc.gif');">
        <div class="title111 navbar-nav mx-auto">

            <p class="text1" style="font-weight: bold;font-size: 3rem;">SOMOS ESPECIALISTAS<br>EM
                SURPREENDER
            </p>
        </div>
    </div>-->
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
        data-loop="true" data-autoplay="4000" data-simulate-touch="true" data-nav="false" data-direction="horizontal">
        <div class="swiper-wrapper text-left">
            <div class="versa1 swiper-slide context-dark"
                style="background-image: url('img/dare-gif-versao pc.gif');background-size:cover;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row te">
                            <div class="col-md-10" style="color:black">

                                <h3 style="color:black;font-family: 'Adam-Medium';margin-left:2rem;font-size: 3rem;"
                                    class="oh font-weight-light" data-caption-animate="slideInUp"
                                    data-caption-delay="100">
                                    <span>SOMOS ESPECIALISTAS<br>EM
                                        SURPREENDER</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="versa2 swiper-slide context-dark"
                style="background-image: url('video/dare-gif-versao pc-01.gif');background-size:cover;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <!--<div class="col-md-10" style="color:black">
                                <h6 style="color:black" class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A
                                    team
                                    of professional Travel Experts</h6>
                                <h2 style="color:black" class="oh font-weight-light" data-caption-animate="slideInUp"
                                    data-caption-delay="100">
                                    <span>Trust</span><span class="font-weight-bold"> Our
                                        Experience</span>
                                </h2><a style="color:black" class="button button-default-outline button-ujarak" href="#"
                                    data-caption-animate="fadeInLeft" data-caption-delay="0">Book now</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="swiper-slide context-dark" data-slide-bg="img/dare-gif-versao pc.gif">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 style="color:black" class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">
                                    Build
                                    your Next Holiday Trip with Us</h6>
                                <h2 style="color:black" class="oh font-weight-light" data-caption-animate="slideInUp"
                                    data-caption-delay="100">
                                    <span>Create</span><span class="font-weight-bold"> Your
                                        Tour</span>
                                </h2><a style="color:black" class="button button-default-outline button-ujarak" href="#"
                                    data-caption-animate="fadeInLeft" data-caption-delay="0">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <!-- Swiper Pagination-->
    </section>
    <script>
    var
        words = ['DO YOU DARE TO BE AMAZED?'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 10,
        speed = 350;

    var wordflick = function() {
        setInterval(function() {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = false;
                        skip_count = 0;
                    }
                }
            } else {
                if (offset == 1) {
                    forwards = true;
                    i++;
                    offset = 1;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            console.log(offset);
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                } else {
                    offset--;
                }
            }
            $('.word').text(part);
        }, speed);
    };

    $(document).ready(function() {
        wordflick();
    });
    </script>
    <div class="mx-auto">
        <nav class="navbar gradiente" style="background-image: url(img/gradiente-home.png);">
            <div class="navbar-nav mx-auto">
                <h1 class="word" id="textgra" style="font-family: 'Adam-Medium'; color:white;font-size:4rem;margin-top:0.5rem;"></h1>
            </div>
        </nav>
    </div>
    <!--<nav class="navbar gradiente navbar-light bg-light" >
  <p class="navbar-brand mx-auto" style="font-family: 'Adam-Medium';" href="#">DO YOU DARE TO BE AMAZED?</p>
</nav>-->
</section>


<div class="container" style="margin-top:5rem;">

    <!-- <section>
        <div>
            <h3 style="font-family: 'Adam-Medium';font-weight:bold; text-align:center;margin-bottom:3rem;">O SEU
                PARCEIRO PERFEITO PARA O SEU NEGOCIO</h3>
        </div>

        <div class="row" style="text-align: center;">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <h1 style="color:#f9c656;margin-bottom:0.8rem"><i class="fi-cwluhl-clock-wide"></i></h1>
                <h4>djndcdfncjd</h4>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <h1 style="color:#d73588;margin-bottom:0.8rem"><i class="fi-cwluhl-clock-wide"></i></h1>
                <h4>djndcdfncjd</h4>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <h1 style="color:#0ea29a;margin-bottom:0.8rem"><i class="fi-cwluhl-clock-wide"></i></h1>
                <h4>djndcdfncjd</h4>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
            </div>

        </div>
    </section>-->

    <section style="margin-top: 5rem;" id="sobre-nos">

        <div class="al row justify-content-center  d-flex align-items-center">
            <div class=" inicio col-md-6 col-lg-6 col-xl-6"
                style="width:27rem !important;height:18rem !important;padding-left:3rem;">
                <div>
                    <div style="margin-bottom:2rem;">
                        <div class="icon3"><img class="icon4" src="img/icon/dream.png"
                                style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt=""></div>
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE DREAM </h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <div class="icon2"><img class="icon1" src="img/icon/amaze.png"
                                style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt=""></div>
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE AMAZE</h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <img class="icon1" src="img/icon/repeat.png"
                            style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size: 3.5rem;">WE REPEAT</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 ">
                <h4 style="font-family: 'Lato-LightItalic';">A nossa equipa é composta por
                    gastrónomos e criativos que se juntam para proporcionar uma
                    experiência inovadora que irá mexer com os seus sentidos.</h4>
                <br>
                <br>
                <h4 style="font-family: 'Lato-LightItalic';">Temos como objetivo agilizar e potenciar
                    o trabalho dos nossos complementos "criativos da cozinha" para que possam, desta forma, dar asas à
                    imaginação com os nossos complementos "ready to serve".</h4>
                <br>
            </div>


        </div>


    </section>

    <script>
    var root = document.documentElement;
    root.className += ' js';

    function boxTop(idBox) {
        var boxOffset = $(idBox).offset().top;
        return boxOffset;
    }

    $(document).ready(function() {
        var $target = $('.anime'),
            animationClass = 'anime-init',
            windowHeight = $(window).height(),
            offset = windowHeight - (windowHeight / 4);

        function animeScroll() {
            var documentTop = $(document).scrollTop();
            $target.each(function() {
                if (documentTop > boxTop(this) - offset) {
                    $(this).addClass(animationClass);
                } else {
                    $(this).removeClass(animationClass);
                }
            });
        }
        animeScroll();

        $(document).scroll(function() {
            setTimeout(function() {
                animeScroll()
            }, 150);
        });
    });
    </script>

    <section>
        <div>
            <h2
                style="font-family: 'Raleway-Regular';font-weight:bold; text-align:center;margin-bottom:3rem; margin-top:3rem;color:#4d285d ">
                A NOSSA GAMA DE PRODUTOS <br> É DIRECIONADA PARA</h2>
        </div>

        <div class="row" style="text-align: left;">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" style="text-align: -webkit-center;">
                <img src="img/hotel.jpg" style="width:15rem;height:15rem;margin-bottom:1rem;    vertical-align: middle;"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';">HOTELARIA</h3>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto anime" style="text-align: -webkit-center;">
                <img src="img/eve.jpg" style="width:15rem;height:15rem;margin-bottom:1rem;vertical-align: middle;"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';    vertical-align: middle;">EVENTOS E CATERING
                </h3>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" style="text-align: -webkit-center;">
                <img src="img/restaurante.jpg"
                    style="width:15rem;height:15rem;margin-bottom:1rem;    vertical-align: middle;"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';    vertical-align: middle;">RESTAURAÇÃO</h3>
            </div>
        </div>
    </section>

</div>

<div class="container-fluid" style="margin-top:5rem;background-color:#e5e5e5;padding:2rem;">
    <div class="container">
        <section>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-interval="10000" style="margin-right:7rem;"
                    data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel11.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel12.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel13.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel14.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel20.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel3.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel9.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel8.png" style="padding:0.6rem;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="prev">
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                        data-bs-slide="next">
                    </a>
                </div>
            </div>
            <script>
            let items = document.querySelectorAll('.carousel .carousel-item')

            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
            </script>
            <style>
            .img-fluid {
                height: 6rem;
            }

            .carousel-inner {
                margin-left: 4rem !important;

            }

            .card {
                --bs-card-bg: none !important;
                border: 0 !important;
                margin-left: 2rem !important;
            }


            @media (max-width: 767px) {
                .carousel-inner .carousel-item>div {
                    display: none;
                }

                .carousel-inner .carousel-item>div:first-child {
                    display: block;
                }
            }

            .carousel-inner .carousel-item.active,
            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                display: flex;
            }

            /* medium and up screens */
            @media (min-width: 768px) {

                .carousel-inner .carousel-item-end.active,
                .carousel-inner .carousel-item-next {
                    transform: translateX(25%);
                }

                .carousel-inner .carousel-item-start.active,
                .carousel-inner .carousel-item-prev {
                    transform: translateX(-25%);
                }
            }

            .carousel-inner .carousel-item-end,
            .carousel-inner .carousel-item-start {
                transform: translateX(0);
            }
            </style>
        </section>
    </div>
</div>

<footer class="text-center text-lg-start text-white footer-16371" id="contacto" style="background-color: #52225F;">
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
                    <a style="font-size:1.5rem;margin-right:1rem;color: #fff !important"
                        href="https://www.facebook.com/people/DARE-Innovative-Cuisine/100084415685710/"><i
                            class="fi-xnsuxl-facebook"></i></a>
                    <a style="font-size:1.35rem;color: #fff !important"
                        href="https://www.instagram.com/dare_portugal/"><i class="fi-xnsuxl-instagram"></i></a>
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h3 style="font-family: 'Adam-Medium';padding-top:3rem;" class="text-white">
                        CONTACTOS
                    </h3>
                    <h6 style="margin-bottom:1rem;">
                        <a style="text-decoration:none;font-family:'Lato-Light' " href="mailto:info@dare.pt"
                            class="text-white">info@dare.pt</a>
                    </h6>

                    <h6 style="margin-bottom:1rem;">
                        <a style="text-decoration:none;font-family:'Lato-Light' " href="tel:+351913497009"
                            class="text-white">+351 913
                            497
                            009</a>
                    </h6>

                    <h6 style="font-family:'Lato-Light' ">
                        Rua Placedino dos Reis,Nº8 1ºC <br>
                        2710-336 Linhó <br>
                        Portugal

                    </h6>

                </div>
                <!-- Grid column -->


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
                    <p class="text-white" style="font-family: 'Lato-Light';">Não perca nada. <br> Subscreva para
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
    <div class="font1 text-center text-white "
        style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: #52225F">
        <h6 style="font-size:0.6rem;">© 2022 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="js/core.min.js"></script>
<script src="js/script2.js"></script>
@endsection