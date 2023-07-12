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
                        <h6 style="font-family: 'Raleway-Medium';color: rgba(255, 133, 11, 0.5);margin-left:2rem;"> <a
                                style="text-decoration: none; color: rgba(255, 133, 11,0.5) !important;"
                                href="/">HOME</a> /
                            <a style="text-decoration: none; color: rgba(255, 133, 11,0.5) !important;"
                                href="/produtos">{{__('messages.product')}}</a> / {{$tipoproduto->nome}}
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
                    <style>
                    .image-container {
                        width: 98%;
                        height: 0;
                        padding-bottom: 98%;
                    }
                    </style>
                    <div class="image-container shadow">
                        @php
                        $i=1;
                        $count_array= count($img_produto);
                        @endphp
                        @if ($count_array == 0)
                        <input type="radio" name="gallery_group" id="image1" checked />
                        <div class="image-1"
                            style="background-image: url('https://dare.pt/storage/{{$tipoproduto->avatar}}');background-size:cover;">
                        </div>
                        @else


                        @foreach ($img_produto as $img)


                        <input type="radio" name="gallery_group" id="image{{$i}}" checked />
                        <div class="image-{{$i}}"
                            style="background-image:url('https://dare.pt/storage/{{$img->avatar}}');">

                        </div>

                        @php
                        $i++;
                        @endphp
                        @endforeach
                        @endif
                        <!-- <input type="radio" name="gallery_group" id="image2" />
                        <div class="image-2">
                            <label class="prev" for="image1"></label>
                            <label class="next" for="image3"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image3" />
                        <div class="image-3">
                            <label class="prev" for="image2"></label>
                            <label class="next" for="image4"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image4" />
                        <div class="image-4">
                            <label class="prev" for="image3"></label>
                            <label class="next" for="image1"></label>
                        </div>-->
                    </div>
                    <div class="thumbnails" style="margin-top: 2rem;">
                        @php
                        $i=1;
                        $count_array= count($img_produto);
                        @endphp
                        @if ($count_array == 4)
                        @foreach ($img_produto as $img)
                        <label for="image{{$i}}"
                            style="border: solid 1.5px #a2a1a1;background-image:url('https://dare.pt/storage/{{$img->avatar}}');"></label>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        @endif

                        @if ($count_array == 3)
                        @foreach ($img_produto as $img)
                        <label for="image{{$i}}"
                            style="border: solid 1.5px #a2a1a1;background-image:url('https://dare.pt/storage/{{$img->avatar}}');"></label>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        @endif
                        @if ($count_array == 2)
                        @foreach ($img_produto as $img)
                        <label for="image{{$i}}"
                            style="border: solid 1.5px #a2a1a1;background-image:url('https://dare.pt/storage/{{$img->avatar}}');"></label>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        @endif

                        @if ($count_array == 1)
                        @foreach ($img_produto as $img)
                        <label for="image{{$i}}"
                            style="border: solid 1.5px #a2a1a1;background-image:url('https://dare.pt/storage/{{$img->avatar}}');"></label>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>

                        @endif
                        @if ($count_array == 0)

                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>
                        <label for="image"
                            style="border: solid 1.5px #a2a1a1;border:0px !important; background-image:url('https://dare.pt/storage/');"></label>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7" style="padding-left:1rem;padding-right:5rem; color: rgba(255, 133, 11,1);">
                <div style="text-align:left;">
                    <h1 style="font-family:'Raleway-Light';">{{$tipoproduto->nome}}</h1>
                </div>
                <div style="font-family:'Lato-LightItalic';">
                    <p>
                        @if (is_null($tipoproduto->texto))
                        <img src="{{ asset('img/icon/icon-glutencana.png') }}" style="height:1.5rem;" alt="">
                        @endif
                        {!! $tipoproduto->texto!!}

                    </p>

                    <div class="row" style="font-family:'Lato-Regular';margin-top:3rem;">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('img/icon/icon-chefcana.png') }}" style="height:1.5rem;" alt="">
                                </div>
                                <div class="col-md-10">
                                    <p style="padding-right:0rem;"> <span
                                            style="font-family:'Raleway-Regular';">{{__('messages.prep')}}</span><br>

                                        <span style="font-family:'Lato-Light';"> {!! $tipoproduto->preparacao !!}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('img/icon/icon-caixacanapng.png') }}" style="height:1.5rem;"
                                        alt="">
                                </div>
                                <div class="col-md-10">
                                    <p> <span style="font-family:'Raleway-Regular';">{{__('messages.form')}}</span><br>
                                        <span style="font-family:'Lato-Light';">{{__('messages.caixa')}} <br>
                                            {!! $tipoproduto->formato !!}</span>
                                    </p>
                                </div>
                            </div>
                            @if (!is_null($tipoproduto->balanca))
                            <div class="row">
                                <div class="col-md-1">

                                    <img src="{{ asset('img/icon/icon-balancacana.png') }}" style="height:1.5rem;"
                                        alt="">
                                </div>
                                <div class="col-md-10 d-flex">
                                    <p>
                                        <span style="font-family:'Lato-Light';">
                                            {!! $tipoproduto->balanca !!}</span>
                                    </p>
                                </div>
                            </div>
                            @endif
                        </div>


                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="text-align: center;margin-top:5rem;">

            <div class="portfolio-i row" style="margin-left:1rem;margin-right:1rem;">
                @foreach ($produto as $prod )
                <div class="ite prod0 col-md-2" style="text-align:center;">
                    <a href="{{route('produto', $prod->id)}}" style="text-decoration:none !important;">
                        <img class="img-fluid shadow" style="border-radius:15px;"
                            src="https://dare.pt/storage/{{$prod->avatar}}" alt="">
                        <h6 style=" color:rgba(255, 133, 11,1);margin-top:1rem;margin-bottom:3rem;">{{$prod->nome}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row" style="text-align: center;margin-top:5rem;">
                <div class="portfolio-menu mt-2 mb-4 ">
                    <ul class="linha d-flex justify-content-center"
                        style="border-bottom:2px solid rgba(204, 40, 65,0.4);padding-right: 4rem;">
                        <li class="btn1 active" data-filter=".prod1">{{__('messages.produtosrela')}}</li>
                    </ul>
                </div>
                <div class="portfolio-i row d-flex justify-content-center">
                    @foreach ($produtosR as $prodR)
                    <div class="ite prod0 col-md-3" style="text-align:center;">
                        <a href="<?php if($prodR->id_tipo == 3 || $prodR->id_tipo == 4){ echo route('produto', $prodR->id); }else{  echo route('produto', $prodR->id) ; }?>"
                            style="text-decoration:none !important;">
                            <img class="img-fluid shadow" style="border-radius:15px;"
                                src="https://dare.pt/storage/{{$prodR->avatar}}" alt="">
                            <h6
                                style="font-family: 'Raleway-Medium';color:rgba(255, 133, 11,1);margin-top:1rem;margin-bottom:3rem;">
                                {{$prodR->nome}}
                            </h6>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <style>
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

        .btn1 {
            margin-left: 5rem !important;
            color: rgba(255, 133, 11,0.4);
            position: relative;
            top: 2px;
        }

        .btn1-check:active+.btn1,
        .btn1-check:checked+.btn1,
        .btn1.active,
        .btn1.show,
        .btn1:active,
        .btn1:hover {
            color: rgba(255, 133, 11,1);
            border-radius: 0px !important;
            --bs-btn1-border-color: none;
            border-bottom: 2px solid rgba(255, 133, 11,1) !important;
        }
        </style>


</section>
<footer class="text-center text-lg-start text-white footer-16371" id="contacto" style="background-color:rgba(255, 133, 11,1);">
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
                            <input style="background:#cc2841;" type="submit" value="{{__('messages.sub')}}">
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
        style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: rgba(255, 133, 11,1)">
        <h6 style="font-size:0.6rem;"><a style="color:white" href="/politica-privacidade">Politica de Privacidade</a>
        </h6>
    </div>
    <!-- Copyright -->
    <div class="font1 text-center text-white "
        style="padding-bottom:0.5rem;padding-top:0.5rem; background-color: rgba(255, 133, 11,1)">
        <h6 style="font-size:0.6rem;">© 2022 DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection
