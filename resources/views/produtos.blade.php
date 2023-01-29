@extends('layout')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

<style>
@media(max-width: 449px) {
    .linha {
        display: inline-flex;
        overflow-x: scroll;
        width: 100%;
    }
}

.parallax {
    /* The image used */
    background-color: #4d285c;

    /* Set a specific height */
    min-height: 12rem;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.img-fluid {
    border-radius: 15px;
}
</style>

<div class="parallax justify-content-center  d-flex align-items-center">
    <h1 style="color:white;text-shadow: 0 0 3px #4e4e4e;font-family: 'Adam-Medium';font-weight:bold;">{{__('messages.product')}}</h1>
</div>
<div class="container"
    style="padding-right: calc(var(--bs-gutter-x) * 2);padding-left: calc(var(--bs-gutter-x) * 2); margin-bottom:10rem;margin-top:2rem;">
    <div class="row">
        <div class="col-lg-12 text-center my-2">
            <div class="row">
                <div class="col-md-6" style="text-align: left;">
                    <h6 style="font-family: 'Raleway-Medium';color: rgba(77,40,93,0.5);margin-left:2rem;"> <a
                            style="text-decoration: none; color: rgba(77,40,93,0.5) !important;" href="/">HOME</a>
                        /{{__('messages.product')}} </h6>
                </div>
                <div class="col-md-6" style="text-align:right;">
                    <!--<h6 style="font-family: 'Raleway-Medium';color:rgba(77,40,93,0.5)"> 08 PRODUTOS</h6>-->
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-menu mt-2 mb-4">
        <ul class="linha" style="border-bottom:2px solid rgba(77,40,93,0.4);padding-right: 4rem;">
            <li class="btn1 filter-btn active" data-target="#esf" data-filter=".esf">{{__('messages.esfe')}}</li>
            <li class="btn1 filter-btn" data-target="#lolli" data-filter=".lolli">LOLLIPOPS</li>
            <li class="btn1 filter-btn" data-target="#cana" data-filter=".cana">CANAPÉS</li>
            <li class="btn1 filter-btn" data-target="#semi" data-filter=".semi">{{__('messages.semi')}}</li>
        </ul>
    </div>
    <div class="portfolio-i row">
        @foreach ($esferificacoes as $esf )
        <div id="esf" class="ite esf block-card active col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $esf->id) }}" style="text-decoration:none !important;">
                <img class="img-fluid shadow" src="https://dare.pt/storage/{{$esf->avatar}}" alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$esf->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>
    <div class="portfolio-i row">
        @foreach ($lollipolis as $lolli )
        <div id="lolli" class="ite lolli block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $lolli->id) }}" style="text-decoration:none !important;">
                <img class="img-fluid shadow" src="https://dare.pt/storage/{{$lolli->avatar}}" alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$lolli->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>
    <div class="portfolio-i row">
        @foreach ($canapes as $cana )
        <div id="cana" class="ite cana block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $cana->id) }}" style="text-decoration:none !important;">
                <img class="img-fluid shadow" src="https://dare.pt/storage/{{$cana->avatar}}" alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$cana->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>
    <div class="portfolio-i row">
        @foreach ($semi as $sem )
        <div id="semi" class="ite semi block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $sem->id) }}" style="text-decoration:none !important;">
            
                <img class="img-fluid shadow" src="https://dare.pt/storage/{{$sem->avatar}}" alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$sem->nome}}</h4>
                
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>


<style>
.portfolio-menu {
    text-align: center;
}

.btn1 {
    /*margin-left: 5rem !important;*/
    color: rgba(77, 40, 93, 0.4);
    position: relative;
    top: 2px;
}

.btn1-check:active+.btn1,
.btn1-check:checked+.btn1,
.btn1.active,
.btn1.show,
.btn1:active,
.btn1:hover {
    color: rgba(77, 40, 93, 1);
    border-radius: 0px !important;
    --bs-btn1-border-color: none;
    border-bottom: 2px solid rgba(77, 40, 93, 1) !important;
}

:focus-visible {
    outline: -webkit-focus-ring-color auto 0px !important;
}


.portfolio-menu ul li {
    display: inline-block;
    margin: 0;
    list-style: none;
    padding: 10px 15px;
    cursor: pointer;
    -webkit-transition: all 05s ease;
    -moz-transition: all 05s ease;
    -ms-transition: all 05s ease;
    -o-transition: all 05s ease;
    transition: all .5s ease;
}

.portfolio-item {
    /*width:100%;*/
}

.portfolio-item .item {
    /*width:303px;*/
    float: left;
    margin-bottom: 10px;
}

.block-card {
    display: none;
}

.block-card.active {
    display: block;
}
</style>
<script>
let $blocks = $('.block-card');

$('.filter-btn').on('click', e => {
    let $btn = $(e.target).addClass('active');
    $btn.siblings().removeClass('active');

    let selector = $btn.data('target');
    console.log(selector);
    $blocks.removeClass('active').filter(selector).addClass('active');
});

/* if (selector == ".esf") {
     console.log(selector);
     $(".parallax").css('background-color', '#0ea29a');
     $(".footer-16371").css('background-color', 'rgb(14, 162, 154)');
     $(".font1").css('background-color', 'rgb(14, 162, 154)');
     $(".btn1").css('color', 'rgb(14, 162, 154, 0.4)');
     $(".btn1:active").css('border-bottom','rgb(14, 162, 154, 1)');
     $(".footer-newsletter form input[type=submit]").css('background-color', '#0ea29a');
     $(".linha").css('border-bottom', '2px solid rgba(14, 162, 154, 0.4)');

 }
 if (selector == ".lolli") {
     console.log(selector);
     $(".parallax").css('background-color', '#ca2841');
     $(".footer-16371").css('background-color', '#ca2841');
     $(".linha").css('border-bottom', '2px solid #ca2841');
 }
 if (selector == ".cana") {
     console.log(selector);
     $(".parallax").css('background-color', '#fca267');
     $(".footer-16371").css('background-color', '#fca267');
     $(".linha").css('border-bottom', '2px solid #ca2841');
 }
 if (selector == ".semi") {
     console.log(selector);
     $(".parallax").css('background-color', '#d73588');
     $(".footer-16371").css('background-color', '#d73588');
     $(".linha").css('border-bottom', '2px solid #ca2841');

 }*/
</script>
<footer class="text-center text-lg-start text-white footer-16371" id="contacto"
    style="background-color:rgba(77, 40, 93, 1);">
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
                            <input style="rgba(77, 40, 93, 1);" type="submit" value="Subscrever">
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
    <div class="font1 text-center text-white "
        style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: rgba(77, 40, 93, 1);">
        <h6 style="font-size:0.6rem;"><a style="color:white" href="/politica-privacidade">Politica de Privacidade</a>
        </h6>
    </div>
    <!-- Copyright -->
    <div class="font1 text-center text-white "
        style="padding-bottom:0.5rem;padding-top:0.5rem; background-color: rgba(77, 40, 93, 1)">
        <h6 style="font-size:0.6rem;">© 2022 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection