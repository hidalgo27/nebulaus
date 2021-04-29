@extends('layouts.default')
@section('title')
	<meta name="description" content="En Nebula Creativo somos una agencia de marketing especilizado en diseño web para empresas, branding y marketing digital en Cusco."/>
    <title>Agencia de Diseño Web y Marketing Digital | NEBULA Cusco 2021</title>
@endsection
@section('content')
	<!--SLIDER-->
    <div class="container-full-width">
        <div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">
            <!-- SLIDER -->
            <div class="swiper-wrapper">
				<div class="swiper-slide bg-slider1">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-10 table-cell">
								<div class="slider-content align-center">
									<h1 class="slider-content-title c-brand-p" data-swiper-parallax="-100">
                                        Agencia de Marketing Digital y Publicidad - Cusco
                                    </h1>
									<h5 class="slider-content-text" data-swiper-parallax="-200">
                                        Somos una agencia de marketing especializada en servicios digitales  e integrales
                                    </h5>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="/Nosotros" class="btn btn-small bg-slider3 btn-hover-shadow">
											<span class="text c-brand-p">¡CONÓSCANOS!</span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-slider2 main-slider-bg-dark thumb-left">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-10 table-cell">
								<div class="slider-content align-center">
									<h3 class="slider-content-title h2" data-swiper-parallax="-100">
										<span class="c-primario bold">¡PROMOCIÓN!</span>
                                        <span class="c-brand-p">Diseño Web para Empresas</span></h3>
									<p class="slider-content-text c-dark" data-swiper-parallax="-200">
                                        Servicio de <b>diseño</b> y desarrollo <b>web para tu negocio</b> a medida, consulta precios y promoción REACTIVACIÓN-10%reactivación
                                    </p>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="/#contacto"
										   class="btn btn-small bg-slider1 btn-hover-shadow">
											<span class="text c-brand-p">CONSULTAR</span>
											<span class="semicircle"></span>
										</a>
										<a href="/diseño-paginas-web-para-empresas-en-peru#precios" class="btn btn-small bg-slider1"data-swiper-parallax="-300">
											<span class="text c-brand-p">VER PRECIOS</span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-slider3 main-slider-bg-dark">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-10 table-cell">
								<div class="slider-content align-center">
									<h3 class="h2 slider-content-title c-brand-p" data-swiper-parallax="-100"><span class="c-primario bold">Marketing y Publicidad</span> en Redes Sociales
                                    </h3>
									<p class="slider-content-text c-dark" data-swiper-parallax="-200">
                                        Conoce nuestro servicio de Estrategias de marketing en redes sociales para empresas o negocios, ¡Solicita más Información! <b>GRATIS.</b>
                                    </p>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="/#contacto" class="btn btn-small bg-slider2 btn-hover-shadow">
											<span class="text c-brand-p">CONSULTAR</span>
											<span class="semicircle"></span>
										</a>
										<a href="/publicidad-marketing-en-redes-sociales#precios" class="btn btn-small btn-hover-shadow bg-slider2">
											<span class="text c-brand-p">VER PLANES</span>
											<span class="semicircle"></span>
                                        </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--Prev next buttons-->
            <svg class="btn-next btn-next-black">
                <use xlink:href="#arrow-right"></use>
            </svg>
            <svg class="btn-prev btn-prev-black">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </div>
	</div>
	<!--SERVICES-->
    <div id="servicios" class="container">
        <div class="row align-center pb30">
			<div class="col-lg-12">
				<div class="heading">
					<h2 class="h3 c-brand-p">AGENCIA CREATIVA CON SEDE EN CUSCO</h2>
					<div class="heading-line">
						<span class="short-line bg-primary-brand"></span>
						<span class="long-line bg-primary-brand"></span>
					</div>
					<span class="heading-text">SERVICIOS</span>
				</div>
			</div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-brand">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/branding.png" alt="branding">
                    </div>
                    <div class="servises-item__content align-center">
                        <h3 class="servises-title c-white c-brand-p">BRANDING</h3>
                        <p class="servises-text c-white">
							Promueve tu marca ante la competencia. Desde el diseño de logos, línea gráfica, fotografía, videos, packaging, merchandising.
                        </p>
                    </div>
                    <div class="align-center">
                        <a href="/branding-diseño-de-marca" class="btn btn-small btn--olive">
                            <span class="text">Te van a reconocer</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-web">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/diseño-web.png" alt="pagina-Web">
                    </div>
                    <div class="servises-item__content align-center">
                        <h3 class="servises-title c-brand-p">DISEÑO<br>WEB</h3>
                        <p class="servises-text c-white">
							Para tiendas online (Ecommerce). agencias de viajes, restaurantes, hoteles, páginas web de servicios y empresariales.
                        </p>
                    </div>
                    <div class="align-center">
                        <a href="/diseño-paginas-web-para-empresas-en-peru" class="btn btn-small btn--olive">
                            <span class="text">Te van a contactar</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-social">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/redes.png" alt="redes-sociales">
                    </div>
                    <div class="servises-item__content align-center">
                        <h3 class="servises-title c-brand-p">REDES<br>SOCIALES</h3>
                        <p class="servises-text c-white">
							Define la red social ideal para Publicidad de productos y/o servicios, creación de contenidos, estrategia de ventas.
                        </p>
                    </div>
                    <div class="align-center">
                        <a href="/publicidad-marketing-en-redes-sociales" class="btn btn-small btn--olive">
                            <span class="text">Te van a ver</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-seo">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/seo.png" alt="seo">
                    </div>
                    <div class="servises-item__content align-center">
						<h3 class="servises-title c-brand-p">SEO</h3><br>
                        <p class="servises-text c-white">
							Estrategia de Marketing SEO y Posicionamiento de negocios en internet
                        </p><br>
					</div>
                    <div class="align-center">
                        <a href="/seo-y-posicionamiento-web-peru" class="btn btn-small btn--olive">
                            <span class="text">Te van a querer ver</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a><br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-audio">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/audio.png" alt="produccion audiovisual">
                    </div>
                    <div class="servises-item__content align-center">
                        <h3 class="servises-title c-brand-p">PRODUCCIÓN AUDIOVISUAL</h3>
                        <p class="servises-text c-white">
							Edición y producción de videos para productos, servicios y eventos.
                        </p><br>
                    </div>
                    <div class="align-center">
                        <a href="/Audio-Visual-Production" class="btn btn-small btn--olive">
                            <span class="text">Te van a inspirar</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a><br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pb30">
                <div class="servises-item bg-box-edu">
                    <div class="servises-item__thumb align-center">
                        <img loading="lazy" src="img/iconos/nebula-edu.png" alt="educacion">
                    </div>
                    <div class="servises-item__content align-center">
						<h3 class="servises-title c-brand-p">NEBULA<br>EDU</h3>
                        <p class="servises-text c-white">
							Aprende todo sobre nuestros productos y crea tu modelo de negocios para ti.
                        </p><br><br>
                    </div>
                    <div class="align-center">
                        <a href="/Nebula-EDU" class="btn btn-small btn--olive">
                            <span class="text">Te van a enseñar</span>
                            <span class="semicircle"></span>
                            <span class="semicircle"></span>
                        </a><br><br>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!--WHY-->
    <div class="container-fluid">
		<div class="row medium-padding80">
			<div class="background-mountains scrollme">
				<div class="images">
					<img loading="lazy" src="img/mountain1.png" alt="mountain">
					<img loading="lazy" src="img/mountain2.png" alt="mountain">
				</div>
				<div class="container">
					<div class="row align-center">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
							<div class="heading">
								<h3 class="c-brand-p">¿POR QUÉ NEBULA?</h3>
								<div class="heading-line">
									<span class="short-line bg-primary-brand"></span>
									<span class="long-line bg-primary-brand"></span>
								</div>
								<p class="heading-text">NOS CARACTERIZAMOS POR
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="info-box--standard-centered">
								<div class="info-box-image">
									<img loading="lazy" src="img/iconos/nosotros.png" alt="nosotros">
								</div>
								<div class="info-box-content">
									<h4 class="info-box-title c-brand-p">Nosotros</h4>
									<p class="text c-brand-s3">Somos un equipo creativo, apasionado con ganas de ayudarte.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="info-box--standard-centered">
								<div class="info-box-image">
									<img loading="lazy" src="img/iconos/calidad.png" alt="calidad">
								</div>
								<div class="info-box-content">
									<h4 class="info-box-title c-brand-p">Calidad</h4>
									<p class="text c-brand-s3">Brindamos un servicio rentable, siempre vamos un paso adelante a la tendencia.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="info-box--standard-centered">
								<div class="info-box-image">
									<img loading="lazy" src="img/iconos/confianza.png" alt="confianza">
								</div>
								<div class="info-box-content">
									<h4 class="info-box-title c-brand-p">Confianza</h4>
									<p class="text c-brand-s3">Hemos desarrollado diferentes proyectos, dejando a nuestros clientes satisfechos.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="info-box--standard-centered">
								<div class="info-box-image">
									<img loading="lazy" src="img/iconos/conversemos.png" alt="conversemos">
								</div>
								<div class="info-box-content">
									<h4 class="info-box-title c-brand-p">Conversemos</h4>
									<p class="text c-brand-s3">Nos gustaría ayudarte, ¡JUNTÉMONOS!.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--ABOUT YOU-->
    <div class="container">
        <div class="row align-center">
			<div class="col-lg-12">
				<div class="heading ">
					<h3 class="heading-title c-brand-p">ACERCA DE TÍ</h3>
					<div class="heading-line">
						<span class="short-line bg-primary-brand"></span>
						<span class="long-line bg-primary-brand"></span>
					</div>
					<p class="heading-text">¿QUÈ PERFIL TE IDENTIFICA?</p>
				</div>
			</div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="case-item align-center">
					<img loading="lazy" src="img/iconos/START-UP.png" alt="start-up">
					<p class="case-item__title c-brand-p">START UP</p>
                    <p class="case-item__text">Iniciando algo grande</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="case-item align-center">
					<img loading="lazy" src="img/iconos/EMPRENDEDOR.png" alt="emprendedor">
					<p class="case-item__title c-brand-p">EMPRENDEDOR</p>
                    <p class="case-item__text">Listo para dar el sgte gran paso</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="case-item align-center">
					<img loading="lazy" src="img/iconos/EMPRESA.png" alt="empresa">
					<p class="case-item__title c-brand-p">EMPRESA</p>
                    <p class="case-item__text">Servicios a la medida</p>
                </div>
            </div>
		</div>
    </div>
	<!--OUR PROJECTS-->
    <div class="container-fluid bg-border-color">
        <div class="container medium-padding80">
            <div class="row">
				<div class="col-lg-12">
					<div class="heading align-center">
						<h3 class="c-brand-p">NUESTROS PROYECTOS</h3>
						<div class="heading-line">
							<span class="short-line bg-primary-brand"></span>
							<span class="long-line bg-primary-brand"></span>
						</div>
						<p class="heading-text">ESTOS SON ALGUNOS</p>
					</div>
				</div>
            </div>
            <div class="container align-center">
                <div class="row pb30 align-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpv4eerFOo/">
						</blockquote>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpurFSrTfr/">
						</blockquote>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpvwFKrv13/">
						</blockquote>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpvzQrrdwn/">
						</blockquote>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpuyr7L0Mc/">
						</blockquote>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<blockquote class="instagram-media instagram"
							data-instgrm-permalink="https://www.instagram.com/p/CNpwKXhrp6z/">
						</blockquote>
                    </div>
                </div>
            </div>
            <div class="row align-center">
				<div class="col-lg-12">
					<a href="https://www.instagram.com/nebulacreativestudio/" class="btn btn-small bg-primary-brand" target="_blank">
						<span class="text">Ver mas</span>
						<span class="semicircle"></span>
						<span class="semicircle"></span>
					</a>
				</div>
            </div>
        </div>
    </div>
    <!--PRICES-->
	<div class="container-fluid">
		<div class="pricing-tables medium-padding80">
			<div class="heading align-center pb30">
				<h3 class="c-brand-p">NUESTROS PRECIOS</h3>
				<div class="heading-line">
					<span class="short-line bg-primary-brand"></span>
					<span class="long-line bg-primary-brand"></span>
				</div>
				<p class="heading-text">ALGUNAS DE NUESTRAS OFERTAS</p>
			</div>
			<div class="container no-padding">
				<div class="pricing-tables-wrap no-padding">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
						<div class="pricing-tables-item">
							<div class="pricing-tables-icon">
								<img loading="lazy" src="img/iconos/DISEÑO-WEB2.png" alt="diseño web">
							</div>
							<a href="/diseño-paginas-web-para-empresas-en-peru#precios" class="pricing-title c-brand-p">Diseño Web</a>
							<b class="h5 c-primario">Landing</b><br><br>
							<ul class="pricing-tables-position align-left h6">
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">5</span>
									Análisis de Campaña
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">Planificación </span>
									Keywords
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Formulario de Clientes
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Contacto Redes Sociales
								</li><br><br>
							</ul>
							<p class="h6 pb30">
								<b>Desde</b>
								<span class="rate">s/.350</span>
							</p>
							<a href="/diseño-paginas-web-para-empresas-en-peru#precios" class="btn btn-small bg-primary-brand">
								<span class="text">¡Ver más!</span>
								<span class="semicircle"></span>
							</a>
							<img loading="lazy" src="img/pricing-dots.png" class="dots" alt="dots">
						</div>

					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
						<div class="pricing-tables-item">
							<div class="pricing-tables-icon">
								<img loading="lazy" src="img/iconos/REDES-SOCIALES2.png" alt="redes sociales">
							</div>
							<a href="/publicidad-marketing-en-redes-sociales" class="pricing-title c-brand-p">Redes Sociales</a>
							<b class="h5 c-primario">Combo Emprendedor</b><br><br>
							<ul class="pricing-tables-position align-left h6">
								<li class="position-item h5">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">8</span> POST
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">6</span> Diseños gráficos para su post
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">1</span> Diseño gráfico para su perfil
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									<span class="count">1</span> Diseño gráfico para su portada
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Administracion en redes sociales
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Actualizacion en redes sociales
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Campañas y anuncios
								</li><br><br><br>
							</ul>
							<p class="h6 pb30">
								<b>Inversión 1 mes</b>
								<span class="rate">s/.250</span>
								<br><b>4to mes Dscto</b>
								<span class="rate">25%</span>
							</p>
							<a href="/publicidad-marketing-en-redes-sociales#precios" class="btn btn-small bg-primary-brand">
								<span class="text">¡Ver más!</span>
								<span class="semicircle"></span>
							</a>
							<img loading="lazy" src="img/pricing-dots.png" class="dots" alt="dots">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
						<div class="pricing-tables-item">
							<div class="pricing-tables-icon">
								<img loading="lazy" src="img/iconos/SEO2.png" alt="seo">
							</div>
							<a href="/seo-y-posicionamiento-web-peru" class="pricing-title c-brand-p">SEO</a>
							<b class="h5 c-primario">Plan Básico</b><br><br>
							<ul class="pricing-tables-position align-left h6">
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Keywords de baja y mediana competencia
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Resultados entre 3-7 meses
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									SEO posicionamiento - <span class="count">6 keywords</span>
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Colocamos 80%-100% en 1era. PÁGINA GOOGLE
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									SEO local de la keyword principal
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Estrategias de Linkbuilding profesional
								</li>
								<li class="position-item">
									<i class="fa fa-caret-right" aria-hidden="true"></i>
									Seguimiento y Reporte Estadístico de la campaña
								</li>
							</ul>
							<p class="h6 pb30">
								<b>Desde</b>
								<span class="rate">s/.650</span>
								<br><b>por mes</b>
							</p>
							<a href="/seo-y-posicionamiento-web-peru#precios" class="btn btn-small bg-primary-brand">
								<span class="text">¡Ver más!</span>
								<span class="semicircle"></span>
							</a>

							<img loading="lazy" src="img/pricing-dots.png" class="dots" alt="dots">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--COMENTS CLIENTS-->
    <div class="container-fluid">
		<div class="row">
			<div class="testimonial-slider scrollme">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="heading">
								<h2 class="h1 heading-title c-brand-p">CLIENTES FELICES</h2>
								<div class="heading-line">
									<span class="short-line bg-primary-brand"></span>
									<span class="long-line bg-primary-brand"></span>
								</div>
								<p class="heading-text c-white">
									Algunos comentarios que expresan nuestros clientes acerca de nuestra empresa
								</p>
							</div>
							<div class="signature js-animate-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="200" height="60">
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M24.78 42.5C11.28 41.06.96 36 1.16 26.86 1.62 11.6 16.76 3.6 28.13 3.25c5.44-.16 9.8 2.38 10.2 5.8.86 7.66-19.23 15.62-19.23 15.62s17.86-6.57 24.66 2.2c2.8 3.6-11.8 10.65-11.8 10.65s-8.8 3.35-7.65-.24c1.78-5.52 16.8-10.1 18.42-10.3 3.17-.4 7.1-.4 8 .12 1.33.78-1.7 4.14-.94 4.86.76.72 3.82-2.55 3.94-1.97.12.57-.64 2.63.58 3 1.2.38 2.3-1.1 4.28-1.5 1.97-.4 1.83-.44 3.6-.12 1.76.32 2.1.64 3.47 1.4 1.36.74.86 2.22 1.96 1.6 1.1-.6 1.43-4.16 2.44-4.04 1.02.1.03 5.38 1.63 4.5 1.6-.85 4.74-7.97 4.74-7.97s-.82 4.04 0 3.93c3.14-.4 8.12-2.57 14.48-3.36 6.37-.78 8.67-.35 11 .24 1.92.48 2.67 2.3 2.67 2.3"
										  stroke-linecap="round" stroke-linejoin="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M113.7 15.75s-1.1-2.78-3.6-2.08c-5.83 1.62-16.2 7.68-16.44 15.63-.46 16.3 21.1 11.14 22.7 11 13.6-1.2 17.38-9.96 17.36-14.48-.06-14.3-19.07-10.3-21.07-10.07-7.9.92-10.48 1.57-10.48 1.57"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M119.7 1.05c-2.53 13.9-5.1 27.83-2.53 41.44" stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M133.6 27.8c-6.62-.42-12.6.37-17.36 3.35"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4"
										  d="M131.52 32.77s3.95-.13 8.34-.93c2.4-.43 5-1.73 7.87-1.85 2.87-.12 1.74 1.44 3.6 1.38 4.62-.14 7.98-.3 14.92-.7 6.95-.4 9.76-2.76 12.86-.92 1.7 1 1.4 3.13 1.4 3.13"
										  stroke-linecap="round"></path>
									<path fill="none" stroke="#2f2c2c" stroke-width="1.4" d="M153.52 31.03s2.27-2.74-.7-3.35c-3.36-.7-3.7 2.43-3.7 2.43"></path>
								</svg>
							</div>
						</div>

						<div class="col-lg-7 col-lg-offset-1 col-md-8 col-sm-12 col-xs-12">

							<div class="testimonial-item">
								<!-- Slider main container -->
								<div class="swiper-container testimonial__thumb overflow-visible" data-effect="fade" data-loop="false">

									<div class="swiper-wrapper">
										<div class="testimonial-slider-item swiper-slide">
											<div class="testimonial-content">
												<p class="text" data-swiper-parallax="-200">
													Estoy muy satisfecho con el trabajo de Nebula. Gran equipo de profesionales, atención personalizada y amabilidad. Resuelven tus dudas y te asesoran en todo momento sobre el funcionamiento de la web
												</p>
												<a href="#" class="author" data-swiper-parallax="-150">Oscar Rodriguez</a>
												<a href="#" class="company" data-swiper-parallax="-150">Gotoperu Group</a>

											</div>
											<div class="avatar" data-swiper-parallax="-50">
												<img loading="lazy" src="img/avatar.png" alt="avatar">
											</div>
										</div>
									</div>
									<!-- If we need pagination -->
									<div class="swiper-pagination"></div>

									<div class="quote">
										<i class="seoicon-quotes"></i>
									</div>
								</div>

								<div class="testimonial__thumb-img">
									<img loading="lazy" src="img/testimonial1.png" alt="image">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial-img">
					<img loading="lazy" src="img/testimonial2.png" alt="image">
				</div>
			</div>
		</div>
    </div>
    <!--CLIENTS BRANDS-->
    <div id="clientes" class="container-fluid bg-border-color">
		<div class="client-carousel">
			<div class="container medium-padding80">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading align-center">
							<h2 class="heading-title c-brand-p">MÁS DE <b>100</b> CLIENTES SATISFECHOS</h2>
							<div class="heading-line">
								<span class="short-line bg-primary-brand"></span>
								<span class="long-line bg-primary-brand"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="theme-module clients-slider-module">
					<div class="swiper-container pagination-bottom" data-show-items="1">
						<div class="swiper-wrapper">
							<div class="swiper-slide ">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web8.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web12.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web3.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web4.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web5.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web6.png" alt="cliente" class="hover">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web13.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web10.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web15.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web24.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web16.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web23.png" alt="cliente" class="hover">
										</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web21.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web18.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web1.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web2.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web11.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web7.png" alt="cliente" class="hover">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web9.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web14.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web17.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web19.png" alt="cliente" class="hover">
										</a>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web20.png" alt="cliente" class="hover">
										</a>
									</div>

									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
										<a href="/#clientes" class="client-item">
											<img loading="lazy" src="img/clientes/web22.png" alt="cliente" class="hover">
										</a>
									</div>
								</div>
							</div>
						</div>
						<svg class="btn-next">
							<use xlink:href="#arrow-right"></use>
						</svg>

						<svg class="btn-prev">
							<use xlink:href="#arrow-left"></use>
						</svg>
					</div>	
				</div>
			</div>
		</div>
    </div>
	<!--TALKING-->
    <div id="contacto" class="container-fluid bg-form">
		@if (session('status'))
			<div class="align-center bg-alert h6 c-brand-p">
				<b>Gracias por contactar con nosotros!</b> Su mensaje fue enviado satisfactoriamente.
			</div>
		@endif
		<div class="container medium-padding80">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
					<div class="row">
						<div class="heading align-center">
							<h4 class="h1 heading-title c-white">¿Conversamos?</h4>
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
@endsection
