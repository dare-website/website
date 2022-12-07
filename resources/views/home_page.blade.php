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


</div>

@endsection