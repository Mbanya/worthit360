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
        <main class="l-main-content"></main>
        <section class="b-works-details">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-subtitle-block">work title</h2>
                        <div class="ui-title-block">Working-Hard to produce the contents that offers rich experience.</div>
                        <div class="ui-decor-1"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <dl class="b-works-details__description dl-horizontal">
                            <dt>client</dt>
                            <dd>Earth Sky Startup Business</dd>
                            <dt>launch</dt>
                            <dd>22 February 2017 at 10:00 am</dd>
                            <dt>services</dt>
                            <dd>Photoshop, Wordpress, Video Anim</dd>
                            <dt>share</dt>
                            <dd>Facebook, Google+, Pinterest, Behance</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <h3 class="ui-title-inner">description</h3>
                        <p>Sit amet lorem ipsum dolor sit amet lorem ipsum dolor temp amet consectetur elit do eiusmod tempor elit dore ncididuntut labore eturs dolore magna aliqua minim ve quis nostrud exercitation. Lorem ipsum dolor labore amet consectetur elit do eiusmod tempor tae sed ipsum enimad ipsum.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="b-works-details__slider owl-carousel owl-theme enable-owl-carousel" data-min480="1" data-min768="2" data-min992="2" data-min1200="2" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true"><img src="assets/media/components/b-works/555x362_1.jpg" alt="foto" /><img src="assets/media/components/b-works/555x362_2.jpg" alt="foto" /><img src="assets/media/components/b-works/555x362_1.jpg" alt="foto" /><img src="assets/media/components/b-works/555x362_2.jpg" alt="foto" /><img src="assets/media/components/b-works/555x362_1.jpg" alt="foto" /><img src="assets/media/components/b-works/555x362_2.jpg" alt="foto" /></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12"><a class="b-works-details__nav btn btn-type-1 btn-type-1_left-arr pull-left" href="portfolio-details.blade.php"><i class="icon fa fa-long-arrow-left"></i><span class="btn-type-1__inner">prev item</span></a><a class="b-works-details__nav btn btn-type-1 pull-right" href="portfolio-details.blade.php"><span class="btn-type-1__inner">next item</span><i class="icon fa fa-long-arrow-right"></i></a></div>
                </div>
            </div>
        </section>

@endsection


@section('footer')
@endsection
@section('scripts')
@endsection
