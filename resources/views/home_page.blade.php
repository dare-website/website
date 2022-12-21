@extends('layout')

@section('content')

<style>
.landing-hero {
    background-size: 100% 100vh;
    height: 100vh;
    background-repeat: no-repeat;
}

.gradiente {
    height: auto;
    background-size: 100% 100vh;
    background-repeat: no-repeat;
}

@media(max-width: 449px) {
    #textgra {
        font-size: 1.5rem !important;
    }

    /*.al {margin-left:7rem;margin-right:7rem;}*/
}

@media(min-width:450px) and (max-width: 730px) {
    #textgra {
        font-size: 2rem !important;
    }

    /*.al {margin-left:7rem;margin-right:7rem;}*/
}
</style>
<section class="">
    <div class="landing-hero" style="background-image: url(img/headline-01.png);">
    </div>

    <div class="mx-auto">
        <nav class="navbar gradiente" style="background-image: url(img/gradiente-home.png);">
            <div class="navbar-nav mx-auto">
                <h1 id="textgra" style="font-family: 'Adam-Medium'; color:white;font-size:3rem;margin-top:0.5rem;">DO
                    YOU DARE TO BE
                    AMAZED?</h1>
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
            <div class="col-md-8 col-lg-6 col-xl-6 justify-content-center ml-auto d-flex align-items-center"
                style="width:22rem !important;height:18rem !important;">
                <div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon3.svg"
                            style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE DREAM </h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon1.svg"
                            style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE AMAZE</h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon2.svg"
                            style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size: 3.5rem;">WE REPEAT</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4 ml-auto">
                <h5 style="font-family: 'Lato-LightItalic';">A nossa equipa é composta por
                    gastrónomos e criativos que se juntam para proporcionar uma
                    experiêcia inovadora que irá mexer com os seus sentidos.</h5>
                <br>
                <br>
                <h5 style="font-family: 'Lato-LightItalic';">Temos como objetivo agilizar e potenciar
                    o trabalho dos nossos complementos "criativos da cozinha" para que possam, desta forma, dar asas à
                    imaginação com os nossos completmentos "ready to serve".</h5>
                <br>
            </div>


        </div>


    </section>
    <section>
        <div>
            <h3
                style="font-family: 'Raleway-Regular';font-weight:bold; text-align:center;margin-bottom:3rem; margin-top:3rem;color:#4d285d ">
                A NOSSA GAMA DE PRODUTOS <br> É DIRECIONADA PARA</h3>
        </div>

        <div class="row" style="text-align: left;">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" style="text-align: -webkit-center;">
                <img src="img/hotel.jpg" style="width:15rem;height:15rem;margin-bottom:1rem;    vertical-align: middle;"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';">HOTELARIA</h3>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto" style="text-align: -webkit-center;">
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
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel9.png" style="padding:1rem;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel6.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel7.png" style="padding:0.6rem;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel8.png" style="padding:1rem;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel10.svg" class="img-fluid">
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
                                        <img src="/img/parceiros/hotel4.svg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="/img/parceiros/hotel55.png" class="img-fluid">
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
                    <a style="font-size:1.5rem;margin-right:1rem;color: #fff !important" href="https://www.facebook.com/people/DARE-Innovative-Cuisine/100084415685710/"><i
                            class="fi-xnsuxl-facebook"></i></a>
                    <a style="font-size:1.35rem;color: #fff !important"
                        href="https://www.instagram.com/dare_portugal/"><i class="fi-xnsuxl-instagram"></i></a>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

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

@endsection