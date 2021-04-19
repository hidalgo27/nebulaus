@extends('layouts.default')
@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="seo-score scrollme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                        <div class="seo-score-content align-center">
                            <div class="heading align-center">
                                <h4 class="h1 heading-title">¿Conversamos?</h4>
                            </div>
                            <div class="seo-score-form">
                                <form class="seo-score-form input-inline crumina-submit" method="POST" action="{{route("contact.send")}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12  col-md-12 col-xs-12 col-sm-12">
                                            <input name="subject" class="input-dark" placeholder="Nombre" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                            <textarea name="message" class="input-dark" placeholder="Mensaje" required></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-medium btn--green btn-hover-shadow" type="submit">
                                        <span class="text">Enviar</span>
                                        <span class="semicircle"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="images">
                <img loading="lazy" src="img/seoscore1.png" alt="image">
                <img loading="lazy" src="img/seoscore2.png" alt="image">
                <img loading="lazy" src="img/seoscore3.png" alt="image">
            </div>

        </div>
    </div>
</div>
@endsection
