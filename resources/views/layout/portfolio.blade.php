@extends('layout.layout_portfolio)
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
    <!-- Loader end-->


    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">

        <!-- ==========================-->
        <!-- SEARCH MODAL-->
        <!-- ==========================-->
        <div class="header-search open-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form class="search-global">
                                <input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
                                <button class="search-global__btn"><i class="icon stroke icon-Search"></i>
                                </button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button class="search-close close" type="button"><i class="fa fa-times"></i>
            </button>
        </div>
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">

            <ul class="yamm main-menu nav navbar-nav">
                <li class="dropdown active"><a class="dropdown-toggle" href="#">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="home.html">Home ver 01</a></li>
                        <li><a href="home-2.html">Home ver 02</a></li>
                    </ul>
                </li>
                <li><a href="services.html">Services</a></li>
                <li class="dropdown"><a class="dropdown-toggle" href="#">Works</a>
                    <ul class="dropdown-menu">
                        <li><a href="portfolio.html">Works ver 01</a></li>
                        <li><a href="portfolio.blade.php">Works ver 02</a></li>
                        <li><a href="portfolio-3.html">Works ver 03</a></li>
                        <li class="divider"></li>
                        <li><a href="portfolio-details.html">Works details</a></li>
                    </ul>
                </li>
                <li><a href="../portfoilio.blade.php">About</a></li>
                <li class="dropdown"><a class="dropdown-toggle" href="#">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-main.html">Blog main</a></li>
                        <li><a href="blog-post.html">Blog post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="typography.html">Pages</a>

                    <ul class="dropdown-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="terms-of-use.html">Terms of use</a></li>
                    </ul>

                </li>
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
                <div class="top-bar">
                    <div class="container">
                        <div class="header-topbarbox-1">
                            <ul>
                                <li>WE HELPING YOU: INFO@YOURSITE.COM</li>
                            </ul>
                        </div>
                        <div class="header-topbarbox-2">
                            <ul class="social-links">
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-facebook-square"></i></a></li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-youtube-square"></i></a></li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-vimeo-square"></i></a></li>
                                <li><a href="/" target="_blank"><i class="social_icons fa fa-twitter-square"></i></a></li>
                                <li class="li-last"><a href="/" target="_blank"><i class="social_icons fa fa-tumblr-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar" id="nav">



                    <div class="header-navibox-1">
                        <!-- Mobile Trigger Start-->
                        <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                        <!-- Mobile Trigger End-->
                        <div class="ui-decor-1 ui-decor-1_sm"></div>
                        <a class="navbar-brand scroll" href="home.html"><img class="normal-logo" src="assets/media/general/logo-dark.png" alt="logo" /><img class="scroll-logo hidden-xs" src="assets/media/general/logo-dark.png" alt="logo" /></a>
                        <ul class="social-links list-inline">
                            <li><a href="/" target="_blank"><i class="social_icons fa fa-twitter"></i></a></li>
                            <li><a href="/" target="_blank"><i class="social_icons fa fa-behance"></i></a></li>
                            <li class="li-last"><a href="/" target="_blank"><i class="social_icons fa fa-instagram"></i></a></li>
                        </ul>
                    </div>


                    <div class="header-navibox-2">
                        <ul class="yamm main-menu nav navbar-nav">
                            <li class="dropdown active"><a class="dropdown-toggle" href="#">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="home.html">Home ver 01</a></li>
                                    <li><a href="home-2.html">Home ver 02</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#">Works</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio.html">Works ver 01</a></li>
                                    <li><a href="portfolio.blade.php">Works ver 02</a></li>
                                    <li><a href="portfolio-3.html">Works ver 03</a></li>
                                    <li class="divider"></li>
                                    <li><a href="portfolio-details.html">Works details</a></li>
                                </ul>
                            </li>
                            <li><a href="../portfoilio.blade.php">About</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#">News</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-main.html">Blog main</a></li>
                                    <li><a href="blog-post.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="typography.html">Pages</a>

                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of use</a></li>
                                </ul>

                            </li>
                        </ul>
                        <ul class="btn-menu">
                            <li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
                            <li>
                                <button class="js-toggle-screen toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                            </li>
                        </ul>



                    </div>

                </nav>
            </div>
        </header>
        <!-- end .header-->
        <div class="section-title-page area-bg area-bg_dark area-bg_op_75 parallax" style="background-image: url(assets/media/components/b-title-page/bg-1.jpg)">
            <div class="area-bg__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="home.html">Home</a></li>
                                <li class="active">Works</li>
                            </ol>
                            <!-- end breadcrumb-->
                            <h1 class="b-title-page">portfolo</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .b-title-page-->
        <main class="l-main-content">
            <div class="section-default b-isotope">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-center">
                                <ul class="b-isotope-filter b-isotope-filter_center list-inline">
                                    <li class="current"><a href="" data-filter="*">all works</a><span class="b-isotope-filter__title">All Works</span></li>
                                    <li><a href="" data-filter=".design">web design</a><span class="b-isotope-filter__title">Web Design</span></li>
                                    <li><a href="" data-filter=".photography">photography</a><span class="b-isotope-filter__title">Photography</span></li>
                                    <li><a href="" data-filter=".video">video</a><span class="b-isotope-filter__title">Video</span></li>
                                    <li><a href="" data-filter=".illustration">illustration</a><span class="b-isotope-filter__title">Illustration</span></li>
                                    <li><a href="" data-filter=".mobile">mobile apps</a><span class="b-isotope-filter__title">Mobile Apps</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="b-isotope-grid grid list-unstyled js-zoom-gallery">
                    <li class="grid-sizer"></li>
                    <li class="b-isotope-grid__item grid-item design illustration">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_5.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item design">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/435x550_3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item photography video illustration">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_6.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item design mobile">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/435x550_4.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item photography video illustration">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_7.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item video">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item illustration mobile">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_8.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item grid-item_wx2 photography">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/895x260_1.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                    <li class="b-isotope-grid__item grid-item video design">
                        <a class="b-isotope-grid__inner" href="portfolio-details.html"><img src="assets/media/components/b-isotope/430x260_9.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                        </a>
                    </li>
                </ul>
                <!-- end .b-isotope-->
                <div class="text-center"><a class="btn btn-type-1" href="portfolio.html"><span class="btn-type-1__inner">load more items</span><i class="icon fa fa-long-arrow-right"></i></a></div>
            </div>
            <section class="b-info b-info_mrg-btm">
                <div class="b-info__inner border-l_prim border-r_prim">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="b-info__title">We always Work-Hard to produce the contents which offers the rich experiences for user.</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="b-info__link"><a class="b-info__btn text-primary_h" href="home.html">let’s get<span class="b-info__btn-emphasis">started</span></a>
                                    <div class="b-info__link-bg"><i class="icon pe-7s-pen"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-info-->
            <div class="section-social-net text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block">Stay Connected With Us !</h2>
                            <ul class="section-social-net__list list-inline">
                                <li class="section-social-net__item"><a class="section-social-net__link" href="facebook.com">facebook</a></li>
                                <li class="section-social-net__item"><a class="section-social-net__link" href="twitter.com">twitter</a></li>
                                <li class="section-social-net__item"><a class="section-social-net__link" href="plus.google.com">google +</a></li>
                                <li class="section-social-net__item"><a class="section-social-net__link" href="pinterest.com">pinterest</a></li>
                                <li class="section-social-net__item"><a class="section-social-net__link" href="behance.com">behance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .section-social-net-->
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__main">
                    <div class="row">
                        <div class="col-md-6 col-sm-4">
                            <div class="footer-section">
                                <div class="ui-decor-1 bg-primary"></div>
                                <a class="footer__logo" href="home.html"><img class="img-responsive" src="assets/media/general/logo.png" alt="Logo" /></a>
                                <div class="footer__info">38 Rose Merry Ave. FL 33038 USA
                                    <br> support@unitedagency.com
                                    <br> (+01) 234 567 8900</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <section class="footer-section footer-section_list">
                                <h3 class="footer-section__title">company</h3>
                                <ul class="footer-list list-unstyled">
                                    <li class="footer-list__item"><a class="footer-list__link" href="home.html">Home Page</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="../portfoilio.blade.php">About United</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="services.html">What We Offers</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="portfolio.html">The Latest Projects</a></li>
                                    <li class="footer-list__item"><a class="footer-list__link" href="contact.html">Contact us</a></li>
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
                        <div class="copyright">United (c) 2017. All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- .footer-->
    </div>
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

</html>