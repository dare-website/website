@extends('layout')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

<style>

.linha-wrapper {
    overflow-x: auto; /* Allow horizontal scrolling */
}

.linha {
    display: inline-flex;
    width: max-content; /* Adjust width as needed */
    cursor: grab;
    margin: 0;
    padding: 0;
    border-bottom: 2px solid rgba(77, 40, 93, 0.4);
}



.linha li {
    padding: 0 10px;
    border-bottom: 2px solid transparent; /* Set initial border color */
}

.linha li:hover {
    border-bottom-color: rgba(77, 40, 93, 1); /* Change border color on hover */
}

.linha-wrapper::-webkit-scrollbar {
    display:none;
    height: 200px; /* Adjust scrollbar height as needed */
    background-color: transparent; /* Set scrollbar background color */
}



.linha:active {
    cursor: grabbing;
}
/*
.linha {
    display: inline-flex;
    
    width: 100%;
    cursor:grab;
    overflow: auto;   
    scrollbar-width: none;  Hide scrollbar for Firefox 
    -ms-overflow-style: none; Hide scrollbar for IE and Edge 
}


.linha::-webkit-scrollbar {
    display: none; /* Hide scrollbar for Chrome, Safari, and Opera */
/*}*/

/* .linha:active {
    cursor: grabbing;
}  */


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


.image-wrapper:hover img {
    transform: scale(1.1) /*rotate(-10deg)*/; /* Zoom in by 10% and rotate 90 degrees on hover */
}

h4 {
    font-size: 1.2rem !important;
}


</style>

<div class="parallax justify-content-center  d-flex align-items-center">
    <h1 style="color:white;text-shadow: 0 0 3px #4e4e4e;font-family: 'Adam-Medium';font-weight:bold;">
        {{__('messages.product')}}</h1>
</div>
<div class="container"
    style="padding-right: calc(var(--bs-gutter-x) * 2);padding-left: calc(var(--bs-gutter-x) * 2); margin-bottom:10rem;margin-top:2rem;">
    <div class="row">
        <div class="col-lg-12 text-center my-2">
            <div class="row">
                <div class="col-md-6" style="text-align: left;">
                    <h6 style="font-family: 'Raleway-Medium';color: rgba(0,0,0,0.5);margin-left:2rem;"> <a
                            style="text-decoration: none; color: rgba(0,0,0,0.5) !important;" href="/">HOME</a>
                        / {{__('messages.product')}} </h6>
                </div>
                <div class="col-md-6" style="text-align:right;">
                    <!--<h6 style="font-family: 'Raleway-Medium';color:rgba(77,40,93,0.5)"> 08 PRODUTOS</h6>-->
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-menu mt-2" style="margin-bottom:2.5rem;">
        <div class="linha-wrapper">
            <ul class="linha" style="border-bottom:2px solid rgba(0,0,0,0.2); font-size:1.1rem/*padding-right: 4rem;*/">
                <li id="esf-menu"class="btn1 filter-btn active" data-target="#esf" data-filter=".esf">{{__('messages.esfe')}}</li>
                <li id="lolli-menu"class="btn1 filter-btn" data-target="#lolli" data-filter=".lolli">LOLLIPOPS</li>
                <li id="cana-menu" class="btn1 filter-btn" data-target="#cana" data-filter=".cana">CANAPÉS</li>
                <li id="semi-menu" class="btn1 filter-btn" data-target="#semi" data-filter=".semi">{{__('messages.semi')}}</li>
                <li id="vini-menu" class="btn1 filter-btn" data-target="#vini" data-filter=".vini">{{__('messages.vina')}}</li>
                <li id="alhon-menu" class="btn1 filter-btn" data-target="#alhon" data-filter=".alhon">{{__('messages.alhosn')}}</li>
                <li id="perola-menu" class="btn1 filter-btn" data-target="#perola" data-filter=".perola">{{__('messages.perola')}}</li>
                <li id="trufa-menu" class="btn1 filter-btn" data-target="#trufa" data-filter=".trufa">{{__('messages.trufa')}}</li>
                <li id="vegan-menu" class="btn1 filter-btn" data-target="#vegan" data-filter=".vegan">VEGAN</li>
            </ul>
        </div>
    </div>
    <div class="portfolio-i row">
        @foreach ($esferificacoes as $esf )
        <div id="esf"  class="ite esf block-card active col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $esf->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img  src="https://dare.pt/storage/{{$esf->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.5s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem; ">{{$esf->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>     
    <div class="portfolio-i row">
        @foreach ($lollipolis as $lolli )
        <div id="lolli" class="ite lolli block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $lolli->id) }}" style="text-decoration:none !important;">
                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img class="" src="https://dare.pt/storage/{{$lolli->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$lolli->nome}}</h4>
            </a>
        </div>
        @endforeach

         
                
    </div>
    <div class="portfolio-i row">
        
        @foreach ($canapes as $cana )
        <div id="cana" class="ite cana block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $cana->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img  src="https://dare.pt/storage/{{$cana->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$cana->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>
    
    <div class="portfolio-i row">
        @foreach ($semi as $sem )
        <div id="semi" class="ite semi block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $sem->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img  src="https://dare.pt/storage/{{$sem->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$sem->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>
    <div class="portfolio-i row">
        @foreach ($vini as $vin )
        <div id="vini" class="ite vini block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $vin->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                
                    <img src="https://dare.pt/storage/{{$vin->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$vin->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>

    <div class="portfolio-i row">
        @foreach ($alhon as $alho )
        <div id="alhon" class="ite alhon block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $alho->id) }}" style="text-decoration:none !important;">
                
                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                
                    <img  src="https://dare.pt/storage/{{$alho->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$alho->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>
    <div class="portfolio-i row">
        @foreach ($perola as $perol )
        <div id="perola" class="ite perola block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $perol->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img src="https://dare.pt/storage/{{$perol->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$perol->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>

    <div class="portfolio-i row">
        @foreach ($vegan as $vega )
        <div id="vegan" class="ite vegan block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $vega->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img src="https://dare.pt/storage/{{$vega->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$vega->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>

    <div class="portfolio-i row">
        @foreach ($trufa as $truf )
        <div id="trufa" class="ite trufa block-card col-md-3" style="text-align:center;">
            <a href="{{ route('produto', $truf->id) }}" style="text-decoration:none !important;">

                <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                    <img  src="https://dare.pt/storage/{{$truf->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                </div>
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$truf->nome}}</h4>

            </a>
        </div>
        @endforeach
    </div>
</div>
</div>

<script>
var locale = '{{ config('
app.locale ') }}';
console.log(locale);
</script>

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
    border-radius: 0px !important;
    --bs-btn1-border-color: none;
}

#esf-menu-check:active + .esf-menu,
#esf-menu-check:checked + .esf-menu,
#esf-menu.active,
#esf-menu.show,
#esf-menu:active,
#esf-menu:hover {
    color: rgba(14,162,154, 1);
    
    border-bottom: 2px solid rgba(14,162,154, 1) !important;
}
#lolli-menu-check:active + .lolli-menu,
#lolli-menu-check:checked + .lolli-menu,
#lolli-menu.active,
#lolli-menu.show,
#lolli-menu:active,
#lolli-menu:hover {
    color: #ff850b; /* Red color */
    border-bottom: 2px solid #ff850b !important; /* Red color */
}

#cana-menu-check:active + .cana-menu,
#cana-menu-check:checked + .cana-menu,
#cana-menu.active,
#cana-menu.show,
#cana-menu:active,
#cana-menu:hover {
    color: #cc2841; /* Color: #cc2841 */
    border-bottom: 2px solid #cc2841 !important; /* Color: #cc2841 */
}
#semi-menu-check:active + .semi-menu,
#semi-menu-check:checked + .semi-menu,
#semi-menu.active,
#semi-menu.show,
#semi-menu:active,
#semi-menu:hover {
    color: #d9358a; /* Color: #d9358a */
    border-bottom: 2px solid #d9358a !important; /* Color: #d9358a */
}
#vini-menu-check:active + .vini-menu,
#vini-menu-check:checked + .vini-menu,
#vini-menu.active,
#vini-menu.show,
#vini-menu:active,
#vini-menu:hover {
    color: #4c3085; /* Color: #4c3085 */
    border-bottom: 2px solid #4c3085 !important; /* Color: #4c3085 */
}
#alhon-menu-check:active + .alhon-menu,
#alhon-menu-check:checked + .alhon-menu,
#alhon-menu.active,
#alhon-menu.show,
#alhon-menu:active,
#alhon-menu:hover {
    color: #cf324b; /* Color: #cf324b */
    border-bottom: 2px solid #cf324b !important; /* Color: #cf324b */
}
#perola-menu-check:active + .perola-menu,
#perola-menu-check:checked + .perola-menu,
#perola-menu.active,
#perola-menu.show,
#perola-menu:active,
#perola-menu:hover {
    color: #19af9e; /* Color: #19af9e */
    border-bottom: 2px solid #19af9e !important; /* Color: #19af9e */
}
#vegan-menu-check:active + .vegan-menu,
#vegan-menu-check:checked + .vegan-menu,
#vegan-menu.active,
#vegan-menu.show,
#vegan-menu:active,
#vegan-menu:hover {
    color: #46b501; /* Color: #46b501 */
    border-bottom: 2px solid #46b501 !important; /* Color: #46b501 */
}
#trufa-menu-check:active + .trufa-menu,
#trufa-menu-check:checked + .trufa-menu,
#trufa-menu.active,
#trufa-menu.show,
#trufa-menu:active,
#trufa-menu:hover {
    color: #712323; /* Color: #712323 */
    border-bottom: 2px solid #712323 !important; /* Color: #712323 */
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
                        {{__('messages.redef')}}
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
                        {{__('messages.cont')}}
                    </h3>
                    <h6 style="margin-bottom:1rem;">
                        <a style="text-decoration:none;font-family:'Lato-Light' " href="mailto:info@dare.pt"
                            class="text-white">info@dare.pt</a>
                    </h6>

                    <h6 style="margin-bottom:1rem;">
                        <a style="text-decoration:none;font-family:'Lato-Light' " href="tel:+351913497009"
                            class="text-white">+351 913
                            497
                            009 (Chamada para rede fixa nacional)</a>
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
                    <p class="text-white" style="font-family: 'Lato-Light';">{{__('messages.newsl')}}</p>
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
        <h6 style="font-size:0.6rem;">© 2024 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection
