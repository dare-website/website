@extends('layout')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

<link href="{{ asset('css/style-produto.css') }}" rel="stylesheet">
<section>

    <div class="container" style="margin-top:5rem; margin-bottom:5rem;">



        <div class="row" style="margin-left:2rem;margin-top:3rem;">

            <div class="col-md-5">
                <div class="image-gallery">
                    <div class="image-container shadow">
                        <input type="radio" name="gallery_group" id="image1" checked />
                        <div class="image-1"
                            style="background-image: url('https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');">
                            <label class="prev" for="image4"></label>
                            <label class="next" for="image2"></label>
                        </div>
                        <input type="radio" name="gallery_group" id="image2" />
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
                        </div>
                    </div>
                    <div class="thumbnails" style="margin-top: 2rem;">
                        <label for="image1"
                            style="background-image: url('https://images.unsplash.com/photo-1568051243847-b6319fad107c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80');"></label>
                        <label for="image2"></label>
                        <label for="image3"></label>
                        <label for="image4"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-7" style="padding-left:1rem;padding-right:5rem; color: rgb(14, 162, 154);">
                <div style="text-align:left;">
                    <h1 style="font-family:'Adam-Medium';">{{$tipoproduto->nome}}</h1>
                </div>
                <div style="font-family:'Lato-Regular';">
                    <p>
                        {!! $tipoproduto->texto !!}
                    </p>

                    <div class="row" style="font-family:'Lato-Regular';margin-top:3rem;">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fi-cwluhl-clock-wide"></i>
                                </div>
                                <div class="col-md-10">
                                    <p> FORMATO DE VENDAS <br>
                                        FRASCOS <br>
                                        6un|20un|20un*|20un
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fi-cwluhl-clock-wide"></i>
                                </div>
                                <div class="col-md-10">
                                    <p> FORMATO DE VENDAS <br>
                                        FRASCOS <br>
                                        6un|20un|20un*|20un
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="text-align: center;margin-top:3rem;">
            <div class="portfolio-menu mt-2 mb-4">
                <ul class="linha" style="border-bottom:2px solid rgba(14, 162, 154,0.4);padding-right: 4rem;">
                    <li class="btn1 active" data-filter=".prod0">COM ALCOOL</li>
                    <li class="btn1 " data-filter=".prod1">SEM ALCOOL</li>
                </ul>
            </div>
            <div class="portfolio-i row">
                @foreach ($produto0 as $prod0 )
                <div class="ite prod0 col-md-2" style="text-align:center;">
                    <a  style="text-decoration:none !important;">
                        <img class="img-fluid shadow" src="https://dare.pt/storage/{{$prod0->avatar}}" alt="">
                        <h4 style=" color:rgba(14, 162, 154,1);margin-top:1rem;margin-bottom:3rem;">{{$prod0->nome}}</h4>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="portfolio-i row">
                @foreach ($produto1 as $prod1 )
                <div class="ite prod1 col-md-2" style="text-align:center;">
                    <a  style="text-decoration:none !important;">
                        <img class="img-fluid shadow" src="https://dare.pt/storage/{{$prod1->avatar}}" alt="">
                        <h4 style=" color:rgba(14, 162, 154,1);margin-top:1rem;margin-bottom:3rem;">{{$prod1->nome}}</h4>
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
    var selector = $(".active").attr('data-filter');
    console.log(selector);
    $('.portfolio-i').isotope({
        filter: selector
    });

}
$('.portfolio-menu ul li').click(function() {
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('.portfolio-i').isotope({
        filter: selector
    });
    return false;
});
</script>

</section>

@endsection