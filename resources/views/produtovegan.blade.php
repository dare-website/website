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
                        <h6 style="font-family: 'Raleway-Medium';color: rgba(100, 181, 1,0.5);margin-left:2rem;"> <a
                                style="text-decoration: none; color: rgba(100, 181, 1,0.5) !important;"
                                href="/">HOME</a> /
                            <a style="text-decoration: none; color: rgba(100, 181, 1,0.5) !important;"
                                href="/produtos">{{__('messages.product')}}</a> / {{$produtoS->nome}}
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

            <div class="col-md-7" style="padding-left:1rem;padding-right:5rem; color: #64b501;">
                <div style="text-align:left;">
                    @if(!is_null($produtoS->referencia))
                        <p style="font-family: 'Raleway-Light'; font-size: 0.6rem;margin:0;">{{$produtoS->referencia}}</p>
                    @endif
                    <h1 style="font-family:'Raleway-Light';">{{$produtoS->nome}}</h1>
                </div>
                <div style="font-family:'Lato-LightItalic';">
                    <p>
                        @if (is_null($produtoS->texto))
                        <img src="{{ asset('img/icon/icon-glutenvegan.png') }}" style="height:1.5rem;" alt="">
                        @endif
                        {!! $produtoS->texto!!}

                    </p>
                    
                    <div class="row" style="font-family: 'Lato-Regular'; margin-top: 3rem;">
                        <div class="col-md-12" style="display:flex">
                                <img src="{{ asset('img/icon/icon-chefvegan.png') }}" style="height: 1.5rem;margin-top:2px" alt="Chef Icon">
                                <p style="padding-left:10px">
                                    <span style="font-family: 'Raleway-Regular';">{{__('messages.prep')}}</span>
                                    <br>
                                    <span style="font-family: 'Lato-Light';">{!! $produtoS->preparacao !!}</span>
                                </p>
                          
                        </div>
                        <div class="col-md-6" style="display:flex">
                            <img src="{{ asset('img/icon/icon-caixavegan.png') }}" style="height: 1.5rem;margin-top:2px" alt="Box Icon">
                            <p style="padding-left:10px">
                                <span style="font-family: 'Raleway-Regular';">{{__('messages.form')}}</span><br>
                                <span style="font-family: 'Lato-Light';">{{__('messages.caixa')}} <br>{!! $produtoS->formato !!}</span>
                            </p>
                        </div>
                          
                        @if (!is_null($produtoS->balanca))
                            <div class="col-md-6" style="display:flex">
                                <img src="{{ asset('img/icon/icon-balancavegan.png') }}" style="height: 1.5rem;margin-top:2px" alt="Box Icon">
                                <p style="padding-left:10px">
                                    <span style="font-family: 'Lato-Light';">{!! $produtoS->balanca !!}</span>
                                </p>
                            </div>
                        
                        @endif
                        
                    </div>

                    
                </div>
            </div>
        </div>



        <div class="row justify-content-center" style="text-align: center;margin-top:5rem;">
            <div class="portfolio-menu mt-2 mb-4">
                <ul class="linha" style="border-bottom:2px solid rgba(100, 181, 1,0.4);padding-right: 2rem;">
                    <li class="btn1 filter-btn active" data-target="#prod1" data-filter=".prod1">DEMI-GLACE</li>
                    <li class="btn1 filter-btn " data-target="#prod0" data-filter=".prod0"></li>
                </ul>
            </div>
            <div class="portfolio-i row d-flex ">
                @foreach ($produto0 as $prod0 )
                <div id="prod0" class="ite block-card prod0 col-md-3" style="text-align:center;">
                    <a href="{{route('produto', $prod0->id)}}" style="text-decoration:none !important;">
                        <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                            <img class="" src="https://dare.pt/storage/{{$prod0->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                        </div>
                        <h6
                            style="font-family: 'Raleway-Medium';color:rgba(100, 181, 1,1);margin-top:1rem;margin-bottom:3rem;">
                            {{$prod0->nome}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>
            
            <div class="portfolio-i row d-flex">
                @foreach ($produto1 as $prod1 )
                <div id="prod1" class="ite block-card active prod1 col-md-3" style="text-align:center;">
                    <a href="{{route('produto', $prod1->id)}}" style="text-decoration:none !important;">
                        <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                            <img class="" src="https://dare.pt/storage/{{$prod1->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">

                        </div>
                        <h6
                            style=" font-family: 'Raleway-Medium';color:rgba(100, 181, 1,1);margin-top:1rem;margin-bottom:3rem;">
                            {{$prod1->nome}}
                        </h6>
                    </a>
                </div>
                @endforeach
            </div>

        </div>

        

        <div class="container">
            <div class="row justify-content-center" style="text-align: center;margin-top:5rem;">
                <div class="portfolio-menu mt-2 mb-4 ">
                    <ul class="linha d-flex justify-content-center"
                        style="border-bottom:2px solid rgba(100, 181, 1,0.4);padding-right: 2rem;">
                        <li class="btn1 active" data-filter=".prod1">{{__('messages.produtosrela')}}</li>
                    </ul>
                </div>
                <div class="portfolio-i row d-flex justify-content-center">
                    @foreach ($produtosR as $prodR)
                    <div class="ite prod0 col-md-3" style="text-align:center;">
                        <a href="<?php if($prodR->id_tipo == 3 || $prodR->id_tipo == 4){ echo route('produto', $prodR->id); }else{  echo route('produto', $prodR->id) ; }?>"
                            style="text-decoration:none !important;">
                            <div class="image-wrapper img-fluid  shadow" style="position:relative; overflow:hidden;">
                                <img class="" src="https://dare.pt/storage/{{$prodR->avatar}}" alt="" style="width:100%; height:auto; transition: transform 0.3s;">
                            </div>
                            <h6
                                style="font-family: 'Raleway-Medium';color:rgba(100, 181, 1,1);margin-top:1rem;margin-bottom:3rem;">
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
            /*margin-left: 5rem !important;*/
            color: rgba(100, 181, 1, 0.4);
            position: relative;
            top: 2px;
        }

        .btn1-check:active+.btn1,
        .btn1-check:checked+.btn1,
        .btn1.active,
        .btn1.show,
        .btn1:active,
        .btn1:hover {
            color: rgba(100, 181, 1, 1);
            border-radius: 0px !important;
            --bs-btn1-border-color: none;
            border-bottom: 2px solid rgba(100, 181, 1, 1) !important;
        }
        </style>


</section>
<footer class="text-center text-lg-start text-white footer-16371" id="contacto" style="background-color:#64b501;">
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
                            <input style="background:#64b501;" type="submit" value="{{__('messages.sub')}}">
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
        style="margin-top:2rem;padding-bottom:0.5rem;padding-top:0.5rem; background-color: #64b501">
        <h6 style="font-size:0.6rem;"><a style="color:white" href="/politica-privacidade">Politica de Privacidade</a>
        </h6>
    </div>
    <!-- Copyright -->
    <div class="font1 text-center text-white "
        style="padding-bottom:0.5rem;padding-top:0.5rem; background-color: #64b501">
        <h6 style="font-size:0.6rem;">© {{ date('Y') }}  DARE - INNOVATE CUISINE. Todos os direitos reservados.</h6>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection