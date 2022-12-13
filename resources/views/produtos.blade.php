@extends('layout')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>


<style>
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
    <h1 style="color:white;text-shadow: 0 0 3px #4e4e4e;font-family: 'Adam-Medium';font-weight:bold;">PRODUTOS</h1>
</div>
<div class="container"
    style="padding-right: calc(var(--bs-gutter-x) * 2);padding-left: calc(var(--bs-gutter-x) * 2); margin-bottom:10rem;">
    <div class="row">
        <div class="col-lg-12 text-center my-2">

        </div>
    </div>
    <div class="portfolio-menu mt-2 mb-4">
        <ul style="border-bottom:2px solid rgba(77,40,93,0.4);padding-right: 4rem;">
            <li class="btn1 " data-filter=".esf">ESFERIFICACAO</li>
            <li class="btn1 active" data-filter=".lolli">LOLLIPOPS</li>
            <li class="btn1  text" data-filter=".cana">CANAPES</li>
            <li class="btn1  text" data-filter=".semi">SEMI-ACABADOS</li>
        </ul>
    </div>
    <div class="portfolio-item row">
        @foreach ($esferificacoes as $esf )
        <div class="item esf col-lg-3 col-md-4 col-6 col-12-sm" style="text-align:center;">
            <a href="#" style="text-decoration:none !important;"
                class="fancylight popup-btn1" data-fancybox-group="light">
                <img class="img-fluid shadow" src="storage/{{$esf->avatar}}"
                    alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$esf->nome}}</h4>
            </a>
        </div>
        @endforeach
        @foreach ($lollipolis as $lolli )
        <div class="item lolli col-lg-3 col-md-4 col-6 col-12-sm" style="text-align:center;">
            <a href="#" style="text-decoration:none !important;"
                class="fancylight popup-btn1" data-fancybox-group="light">
                <img class="img-fluid shadow" src="storage/{{$lolli->avatar}}"
                    alt="">
                <h4 style=" color:rgba(77,40,93,1);margin-top:1rem;margin-bottom:3rem;">{{$lolli->nome}}</h4>
            </a>
        </div>
        @endforeach
    </div>
</div>


<style>
.portfolio-menu {
    text-align: center;
}

.btn1 {
    margin-left: 5rem !important;
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
</style>
<script>

if ($(".portfolio-menu ul li").hasClass("active")) {
    var selector = $(this).attr('data-filter');
    console.log(selector);
}
$('.portfolio-menu ul li').click(function() {
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('.portfolio-item').isotope({
        filter: selector
    });
    return false;
});
</script>
@endsection