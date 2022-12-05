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
</style>
<section class="">
    <div class="landing-hero" style="background-image: url(img/headline-01.png);">
    </div>

    <div class="mx-auto">
        <nav class="navbar gradiente" style="background-image: url(img/grandient-home.png);">
            <div class="navbar-nav mx-auto">
                <h1 style="font-family: 'Adam-Medium'; color:white;font-size:3rem;margin-top:0.5rem;">DO YOU DARE TO BE
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

    <section style="margin-top: 5rem;">

        <div class="row justify-content-center  d-flex align-items-center">
            <div class="col-md-8 col-lg-6 col-xl-6 justify-content-center mx-auto d-flex align-items-center"
                style="width:22rem !important;height:18rem !important;">
                <div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon3.svg" style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE DREAM </h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon1.svg" style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size:3.5rem;">WE AMAZE</h1>
                    </div>
                    <div style="margin-bottom:2rem;">
                        <img src="img/icon2.svg" style="width:4rem;position:absolute;margin-left:17rem;margin-top:-1.8rem" alt="">
                        <h1 style="color:black;font-family: 'Adam-Medium';font-size: 3.5rem;">WE REPEAT</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-6 mx-auto">
                <h5 style="font-family: 'Lato-LightItalic';">A nossa equipa é composta por
                    cientistas,
                    gastrónomos e criativos que se juntam para proporcionar uma
                    experiêcia inovadora que irá mexer com os seus sentidos.</h5>
                    <br>
                    <br>
                <h5 style="font-family: 'Lato-LightItalic';">Temos como objetivo agilizar e potenciar
                    o trabalho dos nossos parceiros "criativos da cozinha" para que possam, desta forma, dar asas à
                    imaginação com os nossos completmentos "ready to serve".</h5>
                    <br>
            </div>


        </div>


    </section>
    <section>
        <div>
            <h3
                style="font-family: 'Raleway-Regular';font-weight:bold; text-align:center;margin-bottom:3rem; margin-top:3rem;color:#4d285d ">
                O SEU
                A NOSSA GAMA DE PRODUTOS É DIRECIONADA PARA</h3>
        </div>

        <div class="row" style="text-align: center;">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <img src="img/hotel.jpg" style="width:15rem;height:15rem;margin-bottom:1rem"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';">HOTELARIA</h3>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <img src="img/eve.jpg" style="width:15rem;height:15rem;margin-bottom:1rem" class="rounded-circle shadow"
                    alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';">EVENTOS E CATERING</h3>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                <img src="img/restaurante.jpg" style="width:15rem;height:15rem;margin-bottom:1rem"
                    class="rounded-circle shadow" alt="">
                <h3 style="color:#4d285d;font-family: 'Raleway-Regular';">RESTAURAÇÃO</h3>
            </div>
        </div>
    </section>
    <!--<section>
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
        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        .carousel-inner .carousel-item-right.active,
        .carousel-inner .carousel-item-next {
            transform: translateX(25%);
        }

        .carousel-inner .carousel-item-left.active,
        .carousel-inner .carousel-item-prev {
            transform: translateX(-25%);
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);

        }
        </style>
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 1</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 2</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 3</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 4</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 5</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                </div>
                                <div class="card-img-overlay">Slide 6</div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
  <section>
        <div>
            <h3
                style="font-family: 'Adam-Medium';font-weight:bold; text-align:center;margin-bottom:3rem;margin-top:5rem;">
                IDEIAS</h3>
        </div>
        <div class="row">
            <div class="gallery">
                <figure>
                    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>Daytona Beach <small>United States</small></figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>
                        Bad Pyrmont <small>Deutschland</small>
                    </figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600"
                        alt="" />
                    <figcaption>Highlands <small>United States</small></figcaption>
                </figure>

            </div>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                <symbol id="close" viewBox="0 0 18 18">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z" />
                </symbol>
            </svg>
             <script>
            popup = {
                init: function() {
                    $('figure').click(function() {
                        popup.open($(this));
                    });

                    $(document).on('click', '.popup img', function() {
                        return false;
                    }).on('click', '.popup', function() {
                        popup.close();
                    })
                },
                open: function($figure) {
                    $('.gallery').addClass('pop');
                    $popup = $('<div class="popup" />').appendTo($('body'));
                    $fig = $figure.clone().appendTo($('.popup'));
                    $bg = $('<div class="bg" />').appendTo($('.popup'));
                    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>')
                        .appendTo(
                            $fig);
                    $shadow = $('<div class="shadow" />').appendTo($fig);
                    src = $('img', $fig).attr('src');
                    $shadow.css({
                        backgroundImage: 'url(' + src + ')'
                    });
                    $bg.css({
                        backgroundImage: 'url(' + src + ')'
                    });
                    setTimeout(function() {
                        $('.popup').addClass('pop');
                    }, 10);
                },
                close: function() {
                    $('.gallery, .popup').removeClass('pop');
                    setTimeout(function() {
                        $('.popup').remove()
                    }, 100);
                }
            }

            popup.init()
            </script>-->

</div>
</section>-->

</div>

@endsection