@extends('layout')

@section('content')

<section>

    <div class="container">
        <div class="mb-4" style="margin-top:auto;margin-left:auto">
            <div class="row">
                <h4 onclick="javascript:window.history.back()" class="ml-3 mr-2"
                    style="margin-top: 0.75rem; cursor: pointer"><i style="color:#f9c656;"
                        class="fi-xnslxl-chevron-solid"></i>Voltar</h4>
            </div>
        </div>

        <div style="text-align:center;">
            <h1 style="color: black;margin-left:1rem">Mango, Tomate e Hasbsbhsb </h1>

            <span class="badge bg-secondary"
                style="background: linear-gradient(90deg, rgba(249,198,86,1) 0%, rgba(252,162,103,1) 14%, rgba(202,40,65,1) 35%, rgba(215,53,136,1) 55%, rgba(77,40,93,1) 80%, rgba(14,162,154,1) 100%);color:white;border-radius:30px;">LOLLIPOPS</span>
        </div>

        <div class="row" style="margin-left:2rem;margin-top:3rem;">

            <div class="col-md-8">
                <h5 style="margin-top:3rem;"><i class="fi-xnslxl-chevron-solid"></i>Instruções do Serviço</h5>
                <h5 style="margin-top:2rem;"><i class="fi-xnslxl-chevron-solid"></i>A ser servido e consumido
                    semi-congelado(entre -5º a 0º)</h5>
                <h5 style="margin-top:2rem;"><i class="fi-xnslxl-chevron-solid"></i>Sirva em cima do display</h5>
            </div>

            <div class="col-md-4">
                <img src="img/produtos/corquetas.png" class="rounded float-right" style="height:20rem;" alt="...">
            </div>
        </div>

        <div class="row" style="text-align: center;">
            <div class="col-md-6 col-lg-5 col-xl-5 mx-auto">
                <h5><i class="fi-cwluhl-clock-wide"></i> PREPARACAO</h5>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-5 mx-auto">
                <h5><i class="fi-cwluhl-clock-wide"></i> FORMATO DE VENDA</h5>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
                <br>
                <h5><i class="fi-cwluhl-clock-wide"></i> PREPARACAO</h5>
                <h6>dshcbhdshcbhdshcbhdshcbh dshcbhdshcbhdshcbh</h6>
            </div>
           <!-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                
            </div>-->

        </div>
    </div>

</section>

@endsection