@extends('layouts.default')
@section('title')
	<meta name="description" content="Empresa de diseño web en peru,  especializada en el desarrollo de las mejores páginas web para ventas online, ecommerce agencias de viajes." />
    <title>Contacto</title>
@endsection
@section('content')
<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-blue">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Contacto</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="/">Home</a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span href="#">Contacto</span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>

<!-- End Stunning header -->

<!-- Overlay Search -->


<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->

<!--TALKING-->
<div id="contacto" class="container-fluid ">
    @if (session('status'))
        <div class="align-center bg-alert h6 c-social-s2">
            <b>Gracias por contactar con nosotros!</b> Su mensaje fue enviado satisfactoriamente.
        </div>
    @endif
    <div class="container medium-padding80">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="heading align-center">
                        <h4 class="h1 heading-title c-brand-p">¿Conversamos?</h4>
                        <div class="heading-line">
                            <span class="short-line bg-primary-brand"></span>
                            <span class="long-line bg-primary-brand"></span>
                        </div>
                    </div>
                    <div >
                        <form method="POST" action="{{route("contactForm")}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6  col-md-6 col-xs-12 col-sm-12">
                                    <input name="tNombre" class="input-blue" placeholder="Nombre" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                    <input name="tWhatssap" class="input-blue" placeholder="Whatsaap" type="text" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <input name="tEmail" class="input-blue" placeholder="Email" type="email" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <textarea name="tMensaje" class="input-blue" placeholder="Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="row align-center">
                                <button class="btn btn-medium btn--olive btn-hover-shadow" type="submit">
                                    <span class="text">Enviar</span>
                                    <span class="semicircle"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contacts -->

<!-- End Contacts -->

<!-- Leaflet map -->


<div class="section">
    <!--<div id="map"></div>-->

    <div class="container medium-padding80 ">
        <div class="heading pb30">
            <h4 class="h3 heading-title">Ubícanos en</h4>
            <div class="heading-line">
                <span class="short-line"></span>
                <span class="long-line"></span>
            </div>
        </div>
        <div class="row align-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 class="c-gray pb30">Cusco-Perú</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.251892661782!2d-71.9789209855947!3d-13.520127274731973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd675274162ad%3A0x858be8dad4e3e5d0!2sOficina%20301%2C%20Av%20El%20Sol%20449%2C%20Cusco%2008000!5e0!3m2!1ses-419!2spe!4v1617721926234!5m2!1ses-419!2spe" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h4 class="c-gray pb30">Miami-USA</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.9990322536787!2d-80.19147018550377!3d25.770595514523066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b77650ec50af%3A0x22d83f1f6db6e6be!2s200%20S%20Biscayne%20Blvd%2C%20Miami%2C%20FL%2033131%2C%20EE.%20UU.!5e0!3m2!1ses-419!2spe!4v1617722209085!5m2!1ses-419!2spe" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</div>

<!-- End Leaflet map -->

<!-- Contact form -->
@endsection
