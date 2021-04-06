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
                                    <span class="post-count">168</span>
                                    <a href="#" class="category-title">Branding
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">52</span>
                                    <a href="#" class="category-title">Diseño Web
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">40</span>
                                    <a href="#" class="category-title">Redes Sociales
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">33</span>
                                    <a href="#" class="category-title">SEO
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">21</span>
                                    <a href="#" class="category-title">Producción Audiovisual
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>

                                <div class="category-post-item">
                                    <span class="post-count">18</span>
                                    <a href="#" class="category-title">Nebula Edu
                                        <i class="seoicon-right-arrow"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>

                        <div class="widget w-about">
                            <div class="heading">
                                <h4 class="heading-title">About Us and
                                    This Blog</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per seacula quarta decima quinta.
                                </p>
                            </div>

                            <a href="02_abouts.html" class="btn btn-small btn-border c-primary">
                                <span class="text">Learn More</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="widget w-request bg-boxed-red">
                            <div class="w-request-content">
                                <img loading="lazy" src="img/request.png" alt="request">
                                <h4 class="w-request-content-title">Request
                                    a Free Quote</h4>
                                <p class="w-request-content-text">Gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis.
                                </p>

                                <a href="22_contacts.html" class="btn btn-small btn--dark btn-hover-shadow">
                                    <span class="text">Contact Now</span>
                                </a>
                            </div>
                        </div>

                        <div class="widget w-latest-news">
                            <div class="heading">
                                <h4 class="heading-title">Latest News</h4>
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

                                        <time class="published" datetime="2016-04-23 12:00:00">
                                            April 23, 2016
                                        </time>

                                    </span>

                                    </div>

                                    <h5 class="post__title entry-title ">
                                        <a href="15_blog_details.html">Eodem modo typi, qui nunc nobis videntur</a>
                                    </h5>
                                </div>

                                <div class="latest-news-item">
                                    <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-08 12:00:00">
                                            April 8, 2016
                                        </time>

                                    </span>

                                    </div>

                                    <h5 class="post__title entry-title ">
                                        <a href="15_blog_details.html">Investigationes demonstraverunt lectores legere</a>
                                    </h5>
                                </div>

                                <div class="latest-news-item">
                                    <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-25 12:00:00">
                                            March 25, 2016
                                        </time>

                                    </span>

                                    </div>

                                    <h5 class="post__title entry-title ">
                                        <a href="15_blog_details.html">Qemonstraverunt legere</a>
                                    </h5>
                                </div>

                                <div class="latest-news-item">
                                    <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-03-12 12:00:00">
                                            March 12, 2016
                                        </time>

                                    </span>

                                    </div>

                                    <h5 class="post__title entry-title ">
                                        <a href="15_blog_details.html">Ut wisi enim ad minim veniam, quis nostrud exerci</a>
                                    </h5>
                                </div>

                            </div>

                            <a href="14_blog.html" class="btn btn-small btn--dark btn-hover-shadow">
                                <span class="text">All News</span>
                                <i class="seoicon-right-arrow"></i>
                            </a>
                        </div>

                        <div class="widget w-follow">
                            <div class="heading">
                                <h4 class="heading-title">Follow Us</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <div class="w-follow-wrap">
                                <div class="w-follow-item facebook-bg-color">
                                    <a href="#" class="w-follow-social__item table-cell">
                                        <i class="seoicon-social-facebook"></i>
                                    </a>
                                    <a href="#" class="w-follow-title table-cell">Facebook
                                        <span class="w-follow-add">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="w-follow-item twitter-bg-color">
                                    <a href="#" class="w-follow-social__item table-cell">
                                        <i class=" seoicon-social-twitter"></i>
                                    </a>
                                    <a href="#" class="w-follow-title table-cell">Twitter
                                        <span class="w-follow-add active">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="w-follow-item linkedin-bg-color">
                                    <a href="#" class="w-follow-social__item table-cell">
                                        <i class="seoicon-social-linkedin"></i>
                                    </a>
                                    <a href="#" class="w-follow-title table-cell">Linkedin
                                        <span class="w-follow-add">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="w-follow-item google-bg-color">
                                    <a href="#" class="w-follow-social__item table-cell">
                                        <i class="seoicon-social-google-plus"></i>
                                    </a>
                                    <a href="#" class="w-follow-title table-cell">Google+
                                        <span class="w-follow-add">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
                                    </a>
                                </div>
                                <div class="w-follow-item pinterest-bg-color">
                                    <a href="#" class="w-follow-social__item table-cell">
                                        <i class="seoicon-social-pinterest"></i>
                                    </a>
                                    <a href="#" class="w-follow-title table-cell">Pinterest
                                        <span class="w-follow-add">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="widget w-tags">
                            <div class="heading">
                                <h4 class="heading-title">Popular Tags</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <div class="tags-wrap">
                                <a href="#" class="w-tags-item">SEO</a>
                                <a href="#" class="w-tags-item">Advertising</a>
                                <a href="#" class="w-tags-item">Business</a>
                                <a href="#" class="w-tags-item">Optimization</a>
                                <a href="#" class="w-tags-item">Digital Marketing</a>
                                <a href="#" class="w-tags-item">Social</a>
                                <a href="#" class="w-tags-item">Keyword</a>
                                <a href="#" class="w-tags-item">Strategy</a>
                                <a href="#" class="w-tags-item">Audience</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </main>
        </div>
    </div>
    <!-- End Sidebar-->
@endsection