@extends('layout.master')
@section('assets')
    @endsection
@section('header')
    @endsection
@section('content')
<!-- end .header-->
<div class="section-title-page area-bg area-bg_dark area-bg_op_75 parallax" style="background-size:cover; background-image: url(assets/media/general/andrew-neel-178721.jpg") >
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
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
                            <li><a href="" data-filter=".photography">photography</a><span class="b-isotope-filter__title">Software Development</span></li>
                            <li><a href="" data-filter=".video">video</a><span class="b-isotope-filter__title">IT Technical Services</span></li>
                            {{--<li><a href="" data-filter=".illustration">illustration</a><span class="b-isotope-filter__title">Illustration</span></li>--}}
                            {{--<li><a href="" data-filter=".mobile">mobile apps</a><span class="b-isotope-filter__title">Mobile Apps</span></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="b-isotope-grid grid list-unstyled js-zoom-gallery">
            <li class="grid-sizer"></li>
            <li class="b-isotope-grid__item grid-item design illustration">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_5.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item design">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/435x550_3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item photography video illustration">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_6.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item design mobile">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/435x550_4.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item photography video illustration">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_7.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item video">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_3.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item illustration mobile">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_8.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item grid-item_wx2 photography">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/895x260_1.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
            <li class="b-isotope-grid__item grid-item video design">
                <a class="b-isotope-grid__inner" href="portfolio-details.blade.php"><img src="assets/media/components/b-isotope/430x260_9.jpg" alt="foto" /><span class="b-isotope-grid__wrap-info hvr-shutter-in-vertical"><span class="b-isotope-grid__info"><span class="b-isotope-grid__title">emma card</span><span class="b-isotope-grid__categorie">Branding</span></span>
                            </span>
                </a>
            </li>
        </ul>
        <!-- end .b-isotope-->
        {{--<div class="text-center"><a class="btn btn-type-1" href="portfolio.html"><span class="btn-type-1__inner">load more items</span><i class="icon fa fa-long-arrow-right"></i></a></div>--}}
    </div>
    <section class="b-info">
        <div class="b-info__inner border-l_prim border-r_prim">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="b-info__title">We always Work-Hard to produce the contents which offers the rich experiences for user.</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="b-info__link"><a class="b-info__btn text-primary_h" href="{{route('home')}}">let’s get<span class="b-info__btn-emphasis">started</span></a>
                            <div class="b-info__link-bg"><i class="icon pe-7s-pen"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end .b-info-->
</main>
@endsection
@section('footer')
    @endsection
@section('scripts')
    @endsection
