<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projects</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}" />

    <!-- Favicon-->
    <link rel="shortcut icon" href="content/webdesign/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/developer-icon-152-279030.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/developer-icon-144-279030.png">

    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/developer-icon-120-279030.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/developer-icon-114-279030.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/developer-icon-72-279030.png">

    <link rel="apple-touch-icon-precomposed" href="/developer-icon-57-279030.png">

    <link rel="icon" href="/developer-icon-32-279030.png" sizes="32x32">
    <!--[if lt IE 9 ]>
    <script src="assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
    <![endif]-->
    @yield('assets')
</head>

<body class="loading">
<!-- Loader-->
<div class="screen-loader">
    <div class="loading">
            <span class="loader_span">
            <span class="loader_right"></span>
            <span class="loader_left"></span>
            </span>
    </div>

    <span class="loader-text shuffle">Please wait...</span>


    <div class="sl-top"></div>
    <div class="sl-bottom"></div>
</div>
<div class="" data-header="sticky" data-header-top="200" data-canvas="container">

    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->
    <div data-off-canvas="mobile-slidebar left overlay">

        <ul class="yamm main-menu nav navbar-nav">
            <li><a href="contact.html">Home</a></li>
            <li><a href="typography.html">About Us</a>
            <li><a href="services.html">Projects</a></li>
            <li><a href="services.html">Contact Us</a></li>

        </ul>



    </div>
    <!-- ==========================-->
    <!-- FULL SCREEN MENU-->
    <!-- ==========================-->
    <div class="wrap-fixed-menu" id="fixedMenu">
        <nav class="fullscreen-center-menu">

            <div class="menu-main-menu-container">

                <ul class="nav navbar-nav">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Works</a></li>
                    <li><a href="blog-main.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>



            </div>
        </nav>
        <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
    </div>



    <header class="header header-topbar-hidden header-boxed-width navbar-fixed-top header-background-trans header-navibox-1-left header-navibox-2-right">
        <div class="container container-boxed-width">
            <nav class="navbar" id="nav">
                <div class="header-navibox-1">
                    <!-- Mobile Trigger Start-->
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                    <!-- Mobile Trigger End-->
                    <div class="ui-decor-1 ui-decor-1_sm"></div>
                    <a class="navbar-brand scroll" href="{{route('home')}}"><img class="normal-logo" src="assets/media/general/logo-dark.png" alt="logo" /><img class="scroll-logo hidden-xs" src="assets/media/general/logo-dark.png" alt="logo" /></a>
                </div>
                <div class="header-navibox-2">
                    <ul class="yamm main-menu nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('project')}}">Services</a></li>
                        <li><a href="{{route('home')}}">What we Offer</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <ul class="btn-menu">
                        {{--<li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>--}}
                        {{--<li>--}}
                            {{--<button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </nav>
        </div>
        @yield('header')
    </header>
@yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer__main">
                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <div class="footer-section">
                            <div class="ui-decor-1 bg-primary"></div>
                            <a class="footer__logo" href="home.html"><img class="img-responsive" src="assets/media/general/logo.png" alt="Logo" /></a>
                            <div class="footer__info">
                                <br> support@unitedagency.com
                                <br> (+254) 736508817</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <section class="footer-section footer-section_list">
                            <h3 class="footer-section__title">company</h3>
                            <ul class="footer-list list-unstyled">
                                <li class="footer-list__item"><a class="footer-list__link" href="{{route('home')}}">Home Page</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="{{route('about')}}">About United</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="{{route('home')}}">What We Offers</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="{{route('project')}}">The Latest Projects</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <section class="footer-section footer-section_form">
                            <h3 class="footer-section__title">newsletter</h3>
                            <div class="footer-form__info">Incididunt ut labore etad dolore magna aliqua enim tempore veniam</div>
                            <form class="footer-form">
                                <input class="footer-form__input" type="email" placeholder="Email address" />
                                <button class="footer-form__btn border-b_prim text-primary_h"><i class="icon fa fa-long-arrow-right"></i></button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright">Worth Group (c) <?php echo date("Y")?>. All Rights Reserved</div>
                </div>
            </div>
        </div>
        @yield('footer')
    </footer>

</div>
    <!-- .footer-->
<!-- end layout-theme-->


<!-- ++++++++++++-->
<!-- MAIN SCRIPTS-->
<!-- ++++++++++++-->
<script src="assets/libs/jquery-1.12.4.min.js"></script>
<script src="assets/libs/jquery-migrate-1.2.1.js"></script>
<!-- Bootstrap-->
<script src="assets/libs/bootstrap/bootstrap.min.js"></script>
<!-- Color scheme-->
<script src="assets/plugins/switcher/js/dmss.js"></script>
<!-- Select customization & Color scheme-->
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<!-- Slider-->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- Pop-up window-->
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Headers scripts-->
<script src="assets/plugins/headers/slidebar.js"></script>
<script src="assets/plugins/headers/header.js"></script>
<!-- Mail scripts-->
<script src="assets/plugins/jqBootstrapValidation.js"></script>
<script src="assets/plugins/contact_me.js"></script>
<!-- Filter and sorting images-->
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/isotope/imagesLoaded.js"></script>
<!-- Progress numbers-->
<script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
<!-- Animations-->
<script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
<script src="assets/plugins/revealer/js/anime.min.js"></script>
<script src="assets/plugins/revealer/js/scrollMonitor.js"></script>
<script src="assets/plugins/revealer/js/main.js"></script>
<script src="assets/plugins/TiltHoverEffects/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/TiltHoverEffects/js/anime.min.js"></script>
<script src="assets/plugins/TiltHoverEffects/js/main.js"></script>
<script src="assets/plugins/animate/wow.min.js"></script>
<script src="assets/plugins/animate/jquery.shuffleLetters.js"></script>
<script src="assets/plugins/animate/jquery.sticky-kit.js"></script>
<script src="assets/plugins/animate/typed.js"></script>
<!-- User customization-->
<script src="assets/js/custom.js"></script>
</body>
@yield('scripts')
</html>