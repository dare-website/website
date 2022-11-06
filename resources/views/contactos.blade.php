@extends('layout')

@section('content')
<link href="css/style-contacto.css" rel="stylesheet">

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section"></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span style="font-size:1.6rem;"><i class="fi-xwluxl-map-marker-wide"></i></span>
                                </div>
                                <div class="text">
                                    <p><span>Morada:</span> Parada do Alto de S.João, Nº17 Porta E 1900-052 Lisboa | Portugal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span style="font-size:1.6rem;"><i class="fi-xwlrxl-phone-wide"></i></span>
                                </div>
                                <div class="text">
                                    <p><span>Telemóvel:</span> <a href="tel://+351913497009"> +351 913 497 009</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span style="font-size:1.6rem;"><i class="fi-xwluxl-envelope-wide"></i></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:filipa.cruz@dare.pt">FILIPA.CRUZ@DARE.PT</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contactar</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Nome</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Assunto</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Assunto">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Menssagem</label>
                                                <textarea name="message" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Menssagem"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Enviar" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img" style="background-image: url(img/cont.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection