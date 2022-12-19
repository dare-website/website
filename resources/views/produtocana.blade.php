@extends('layout')

@section('content')
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

            <div class="col-md-7" style="padding-left:1rem;padding-right:4rem; color: rgb(14, 162, 154);">
                <div style="text-align:left;">
                    <h1 style="font-family:'Adam-Medium';">ESFERIFICACAO</h1>
                </div>
                <div style="font-family:'Lato-Regular';">
                    <p>
                        dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh
                        dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh
                        dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh
                        dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh
                        dshcbhdshcbhdshcbh
                        <br>
                        <br>
                        dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh
                        dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh
                        <br>
                        <br>
                        dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbhdshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh
                    </p>
                    <div class="row" style="font-family:'Lato-Regular';">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-1">
                                    <i class="fi-cwluhl-clock-wide"></i>
                                </div>
                                <div class="col-md-11">
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
                                <div class="col-md-11">
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

        <div class="row" style="text-align: center;">
           @foreach ($produto as $prod)
               {{$prod->nome}}
           @endforeach
        </div>
    </div>

</section>

@endsection