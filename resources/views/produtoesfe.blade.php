@extends('layout')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

<link href="{{ asset('css/style-produto.css') }}" rel="stylesheet">
<section>

    <div class="container" style="margin-top:2.5rem; margin-bottom:5rem;">
        <div class="row">
            <div class="col-lg-12 text-center my-2">
                <div class="row">
                    <div class="col-md-6" style="text-align: left;">
                        <h6 style="font-family: 'Raleway-Medium';color: rgba(14, 162, 154,0.5);margin-left:2rem;"> <a
                                style="text-decoration: none; color: rgba(14, 162, 154,0.5) !important;"
                                href="/">HOME</a> /
                            <a style="text-decoration: none; color: rgba(14, 162, 154,0.5) !important;"
                                href="/produtos">PRODUTOS</a> / {{$tipoproduto->nome}}
                        </h6>
                    </div>
                    <div class="col-md-6" style="text-align:right;">
                        <!--<h6 style="font-family: 'Raleway-Medium';color:rgba(77,40,93,0.5)"> 08 PRODUTOS</h6>-->
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-left:2rem;margin-top:3rem;">

            <div class="col-md-5">
                <div class="image-gallery">
                    <div class="image-container shadow">
                        <input type="radio" name="gallery_group" id="image1" checked />
                        <div class="image-1" style="background-image: url('https://dare.pt/img/esferificacao/1.png');">
                            <label class="prev" for="image4"></label>
                            <label class="next" for="image2"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image2" />
                        <div class="image-2" style="background-image: url('https://dare.pt/img/esferificacao/2.png');">
                            <label class="prev" for="image1"></label>
                            <label class="next" for="image3"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image3" />
                        <div class="image-3" style="background-image: url('https://dare.pt/img/esferificacao/3.png');">
                            <label class="prev" for="image2"></label>
                            <label class="next" for="image4"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image4" />
                        <div class="image-4" style="background-image: url('https://dare.pt/img/esferificacao/4.png');">
                            <label class="prev" for="image3"></label>
                            <label class="next" for="image1"></label>
                        </div>
                    </div>
                    <div class="thumbnails" style="margin-top: 2rem;">
                        <label for="image1"
                            style="background-image: url('https://dare.pt/img/esferificacao/1.png');"></label>
                        <label for="image2"
                            style="background-image: url('https://dare.pt/img/esferificacao/2.png');"></label>
                        <label for="image3"
                            style="background-image: url('https://dare.pt/img/esferificacao/3.png');"></label>
                        <label for="image4"
                            style="background-image: url('https://dare.pt/img/esferificacao/4.png');"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-7" style="padding-left:1rem;padding-right:5rem; color: rgb(14, 162, 154);">
                <div style="text-align:left;">
                    <h1 style="font-family:'Raleway-Light';">{{$tipoproduto->nome}}</h1>
                </div>
                <div style="font-family:'Lato-LightItalic';">
                    <p>
                        {!! $tipoproduto->texto !!}
                    </p>

                    <div class="row" style="margin-top:3rem;">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('img/icon/icon-caixaesf.png') }}" style="height:1.5rem;" alt="">
                                </div>
                                <div class="col-md-10">
                                    <p> <span style="font-family:'Raleway-Regular';">FORMATO DE VENDAS</span><br>
                                        <span style="font-family:'Lato-Light';">FRASCOS <br>
                                            {{$tipoproduto->formato}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="text-align: center;margin-top:5rem;">
            <div class="portfolio-menu mt-2 mb-4">
                <ul class="linha" style="border-bottom:2px solid rgba(14, 162, 154,0.4);padding-right: 4rem;">
                    <li class="btn1 filter-btn active" data-target="#prod1" data-filter=".prod1">COM ALCOOL</li>
                    <li class="btn1 filter-btn " data-target="#prod0" data-filter=".prod0">SEM ALCOOL</li>
                </ul>
            </div>
            <div class="portfolio-i row d-flex ">
                @foreach ($produto0 as $prod0 )
                <div id="prod0" class="ite block-card prod0 col-md-3" style="text-align:center;">
                    <a href="{{route('produto', $prod0->id_tipo)}}" style="text-decoration:none !important;">
                        <img class="img-fluid shadow" style="border-radius:15px;"
                            src="https://dare.pt/storage/{{$prod0->avatar}}" alt="">
                        <h6
                            style="font-family: 'Raleway-Medium';color:rgba(14, 162, 154,1);margin-top:1rem;margin-bottom:3rem;">
                            {{$prod0->nome}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="portfolio-i row d-flex">
                @foreach ($produto1 as $prod1 )
                <div id="prod1" class="ite block-card active prod1 col-md-3" style="text-align:center;">
                    <a href="{{route('produto', $prod1->id_tipo)}}" style="text-decoration:none !important;">
                        <img class="img-fluid shadow" style="border-radius:15px;"
                            src="https://dare.pt/storage/{{$prod1->avatar}}" alt="">
                        <h6
                            style=" font-family: 'Raleway-Medium';color:rgba(14, 162, 154,1);margin-top:1rem;margin-bottom:3rem;">
                            {{$prod1->nome}}
                        </h6>
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
        margin-left: 5rem !important;
        color: rgba(14, 162, 154, 0.4);
        position: relative;
        top: 2px;
    }

    .btn1-check:active+.btn1,
    .btn1-check:checked+.btn1,
    .btn1.active,
    .btn1.show,
    .btn1:active,
    .btn1:hover {
        color: rgba(14, 162, 154, 1);
        border-radius: 0px !important;
        --bs-btn1-border-color: none;
        border-bottom: 2px solid rgba(14, 162, 154, 1) !important;
    }

    :focus-visible {
        outline: -webkit-focus-ring-color auto 0px !important;
    }


    .produtoli,
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
    </script>

    <div class="container">
        <div class="row" style="text-align: center;margin-top:5rem;">
            <div class="mt-2 mb-4 ">
                <ul class="linha d-flex justify-content-center"
                    style="border-bottom:2px solid rgba(14, 162, 154, 0.4);padding-right: 4rem;">
                    <li class="btn1 produtoli active">PRODUTOS RELACIONADOS</li>
                </ul>
            </div>
            <div class=" row d-flex justify-content-center">
                @foreach ($produtosR as $prodR )
                <div class="ite col-md-3" style="text-align:center;">
                    <a href="<?php if($prodR->id_tipo == 3 || $prodR->id_tipo == 4){echo route('produto', $prodR->id); }else{ echo route('produto', $prodR->id_tipo) ; }?>"
                        style="text-decoration:none !important;">
                        <img class="img-fluid shadow" style="border-radius:15px;"
                            src="https://dare.pt/storage/{{$prodR->avatar}}" alt="">
                        <h6
                            style="font-family: 'Raleway-Medium';color:rgba(14, 162, 154, 1);margin-top:1rem;margin-bottom:3rem;">
                            {{$prodR->nome}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<footer class="text-center text-lg-start text-white footer-16371" id="contacto"
    style="background-color:rgba(14, 162, 154, 1);">
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
                            <input style="background:rgba(14, 162, 154, 1);" type="submit" value="Subscrever">
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
        style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: rgba(14, 162, 154, 1)">
        <h6 style="font-size:0.6rem;">© 2022 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection