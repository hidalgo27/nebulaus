@extends('layouts.default')
@section('content')
    @yield('headBlog')
    <!-- Sidebar-->
    <div class="container">
        <div class="row medium-padding120">
            <main class="main">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    @yield('contentBlog')
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
                    <aside aria-label="sidebar" class="sidebar sidebar-right">
                        <div class="widget">
                            <form class="w-search">
                                <input class="search input-standard-grey" required="required" placeholder="Search" type="search">
                                <button class="icon">
                                    <i class="seoicon-loupe"></i>
                                </button>
                            </form>
                        </div>

                        <div class="widget w-post-category">
                            <div class="heading">
                                <h4 class="heading-title">Categorias</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                            <div class="post-category-wrap">
                                <div class="category-post-item">
                                    <span class="post-count">1</span>
                                    <a href="/Blog" class="category-title">Branding
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">3</span>
                                    <a href="/Blog" class="category-title">Diseño Web
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">1</span>
                                    <a href="/Blog" class="category-title">Redes Sociales
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">2</span>
                                    <a href="/Blog" class="category-title">SEO
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">1</span>
                                    <a href="/Blog" class="category-title">Producción Audiovisual
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">0</span>
                                    <a href="/Blog" class="category-title">Nebula Edu
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="widget w-latest-news">
                            <div class="heading">
                                <h4 class="heading-title">Ultimas noticias</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <div class="latest-news-wrap">
                                <div class="latest-news-item">
                                    <div class="post-additional-info">
                                        <span class="post__date">
                                            <i class="seoicon-clock"></i>
                                            <time class="published">
                                                Abril 04, 2021
                                            </time>
                                        </span>
                                    </div>
                                    <h5 class="post__title entry-title ">
                                        <a href="/Audio-Video">El audio y el video dominarán las tendencias del 2021</a>
                                    </h5>
                                </div>
                                <div class="latest-news-item">
                                    <div class="post-additional-info">
                                        <span class="post__date">
                                            <i class="seoicon-clock"></i>
                                            <time class="published" datetime="2016-04-08 12:00:00">
                                                Abril 04, 2021
                                            </time>
                                        </span>
                                    </div>
                                    <h5 class="post__title entry-title ">
                                        <a href="/Create-Page-Web">Cinco claves para la creación de una buena página web</a>
                                    </h5>
                                </div>
                                <div class="latest-news-item">
                                    <div class="post-additional-info">
                                        <span class="post__date">
                                            <i class="seoicon-clock"></i>
                                            <time class="published" datetime="2016-03-25 12:00:00">
                                                Abril 04, 2021
                                            </time>
                                        </span>
                                    </div>
                                    <h5 class="post__title entry-title ">
                                        <a href="/Objetive-Public">¿Cómo analizar y definir el público objetivo de una empresa?</a>
                                    </h5>
                                </div>
                                <div class="latest-news-item">
                                    <div class="post-additional-info">
                                        <span class="post__date">
                                            <i class="seoicon-clock"></i>
                                            <time class="published" datetime="2016-03-12 12:00:00">
                                            Abril 04, 2021
                                            </time>
                                        </span>
                                    </div>
                                    <h5 class="post__title entry-title ">
                                        <a href="/Organize-Content">¿Cómo organizar el contenido de mi web?</a>
                                    </h5>
                                </div>

                            </div>

                            <a href="/Blog" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">Ver todas las noticias</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="widget w-follow">
                            <div class="heading">
                                <h4 class="heading-title">¡Síguenos!</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <div class="w-follow-wrap">
                                <div class="w-follow-item facebook-bg-color">
                                    <a href="https://www.facebook.com/nebulaperu/" class="w-follow-social__item table-cell" target="_BLANK">
                                        <i class="seoicon-social-facebook"></i>
                                    </a>
                                    <a href="https://www.facebook.com/nebulaperu/" class="w-follow-title table-cell" target="_BLANK">Facebook
                                        <span class="w-follow-add">
                                            <i class="seoicon-cross plus"></i>
                                            <i class="seoicon-check-bold check"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="w-follow-item bg-instagram">
                                    <a href="https://www.instagram.com/nebulaperu/" class="w-follow-social__item table-cell" target="_BLANK">
                                        <i class="seoicon-social-instagram"></i>
                                    </a>
                                    <a href="https://www.instagram.com/nebulaperu/" class="w-follow-title table-cell" target="_BLANK">Instagram
                                        <span class="w-follow-add">
                                            <i class="seoicon-cross plus"></i>
                                            <i class="seoicon-check-bold check"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="w-follow-item bg-tiktok">
                                    <a href="https://www.tiktok.com/@nebulamarketing?lang=es/" class="w-follow-social__item table-cell" target="_BLANK">
                                        <i class="seoicon-social-instagram"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@nebulamarketing?lang=es" class="w-follow-title table-cell" target="_BLANK">Tiktok
                                        <span class="w-follow-add">
                                            <i class="seoicon-cross plus"></i>
                                            <i class="seoicon-check-bold check"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </main>
        </div>
    </div>
    <!-- End Sidebar-->
@endsection
