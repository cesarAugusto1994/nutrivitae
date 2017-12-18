<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spa Care a Beauty and Spa Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Spa Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smart phone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('css/prettySticky.css')}}" type="text/css">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">

    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

</head>
<body>

<div id="home" class="w3banner">
    <div class="banner-info">
        <!-- navigation -->
        <div class="top-nav">
            <nav>
                <div class="container">
                    <div class="navbar-header logo">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a href="{{url('/')}}">Nutri Vitae</a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-right">
                            <li><a href="#home" class="link-kumya active scroll"><span
                                            data-letters="Inicio">Inicio</span></a></li>
                            <li><a href="#sobre" class="link-kumya"><span data-letters="Sobre">Sobre</span></a></li>
                            <li><a href="#planos" class="link-kumya"><span data-letters="Planos">Planos</span></a></li>

                            <li><a href="#precos" class="link-kumya"><span data-letters="Precos">Precos</span></a></li>
                            <li><a href="blog.html" class="link-kumya"><span data-letters="Blog">Blog</span></a></li>
                            <li><a href="#contato" class="link-kumya"><span data-letters="Contato">Contato</span></a>
                            </li>
                            <li><a href="{{route('login')}}" class="link-kumya active"><span data-letters="Entrar">Entrar</span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- //navigation -->
        <div class="banner-text">
            <!-- banner Slider starts Here -->
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 3
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!-- //End-slider-script -->
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="bnr-agileinfo">
                            <h2>NUTRICIONISTAS</h2>
                            <h3>ACOMPANHE FACILMENTE OS SEUS PACIENTES</h3>
                            <div class="w3lsmore">
                                <a href="single.html" class="button-pipaluk button--inverted"> Saber mais</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="bnr-agileinfo">
                            <h4>PACIENTES</h4>
                            <h3>MOTIVE OS SEUS PACIENTES COM O NOSSO APLICATIVO</h3>
                            <div class="w3lsmore">
                                <a href="single.html" class="button-pipaluk button--inverted"> Saber mais</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="bnr-agileinfo">
                            <h4>CLINICAS DE NUTRICAO</h4>
                            <h3>GANHE PACIENTES COM UM SERVICO INOVADOR </h3>
                            <div class="w3lsmore">
                                <a href="single.html" class="button-pipaluk button--inverted"> Saber mais</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container">

        <div id="contato" class="w3lscontact">
            <div class="container">
                <div class="contact-agileinfo">
                    <div class="col-md-6 contact-grid">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.61395850416!2d-40.29222568560806!3d-20.274838986411563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDE2JzI5LjQiUyA0MMKwMTcnMjQuMSJX!5e0!3m2!1spt-BR!2sbr!4v1512153681994"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6 contact-grid">
                        <h3 class="wthree-title">Contate-nos</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum </p>
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="text" class="ipt-agileits" name="Email" placeholder="Email" required="">
                            <input type="text" name="phone" placeholder="Telephone" required="">
                            <textarea name="Message" placeholder="Message" required=""></textarea>
                            <input type="submit" value="SUBMIT">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="w3agile-address">
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Pca Benedito Rodrigues da
                            Cruz, Vitória ES, Brasil
                        </li>
                        <li><i class="phon">Ligue para nós :</i> +55 27 3302-0001</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                    href="mailto:contato@nutrivitae.com"> contato@nutrivitae.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="footer-copy">
            <p>© 2017 NutriVitae. All rights reserved </p>
        </div>
    </div>
</div>

<script src="{{asset('public/js/prettySticky.js')}}"></script>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
</body>
</html>