@extends('pages.welcome', ['titre' => 'portfolio - detail'])


@section('content')
    <!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('common/newimg/p.jpg') }});">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title mt-lg-5">Concevoir</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('accueil') }}">@lang('infos.main_menu.home')</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li>@lang('infos.main_menu.portfolio')</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end main-content -->
    <!--Start Services Details-->
    <section class="services-details">
        <div class="container py-lg-5 py-4">
            <div class="row">

                <!--Start Services Details Content-->
                <div class="col-12">
                    <div class="services-details__content">
                        <h3 class="mt-4">Description</h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                            quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes
                            port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make </p>
                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                            has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit </p>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->
    <!--Start Services Details-->
    <section class="services-details">
        <div class="container py-lg-5 py-4">
            <div class="row">
                <div class="col-12">
                    <div class="service-sidebar" style="max-width: 100%">
                        <div class="sidebar-widget service-sidebar-single">

                            <div class="sidebar-service-list">
                                <ul class="nav nav-tabs mb-0 nav-folder block-tool-post gap-3" id="myTab" role="tablist"
                                    style="flex-wrap: nowrap;border: none;">
                                    <li>
                                        <a href="#" class="gap-lg-3 gap-2 active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1"
                                            aria-selected="true">
                                            <span>Website Development</span>
                                            <i class="fas fa-angle-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="gap-lg-3 gap-2" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#tab-2" type="button" role="tab" aria-controls="pensee"
                                            aria-selected="false">
                                            <span>Website Development</span>
                                            <i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Services Details Content-->
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="services-details__content">
                                <img src="{{ asset('common/images/logo-book-session-web-ok.png') }}" alt="img-logo"
                                    class="img-logo">
                                <h3 class="mt-4">Service Overview</h3>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum
                                    quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Aelltes
                                    port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                    Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    ndustry
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                    and
                                    scrambled it to make </p>
                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining
                                    essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit </p>
                            </div>
                            <section class="projects-section-two pt-5" id="portfolio">
                                <div class="auto-container">
                                    <div class="sec-title text-center">
                                        <span class="sub-title">@lang('infos.portfolio.p1')</span>
                                        <h2>@lang('infos.portfolio.p2')</h2>
                                    </div>

                                    <div class="carousel-outer">
                                        <div class="projects-carousel-two owl-carousel owl-theme default-navs">
                                            <div class="project-block-two">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image">
                                                            <a href="#">
                                                                <img src="{{ asset('') }}" alt=""></a>
                                                            <img src="{{ asset('common/images/logo-book-session-web-ok.png') }}"
                                                                alt="image logo porfolios" class="img-logo-portfolios">
                                                        </figure>
                                                        <a href="#" class="read-more"><i
                                                                class="fa fa-long-arrow-alt-right"></i></a>
                                                        <div class="info-box">
                                                            <h4 class="title">
                                                                <a href="#">Lorem</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="info-box">
                                                            <h4 class="title"><a href="#">lorem</a></h4>
                                                            <div class="text">
                                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                                Veritatis assumenda omnis
                                                                qui.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="home-tab">
                            <div class="services-details__content">
                                <img src="{{ asset('common/images/logo-master-class.png') }}" alt="img-logo"
                                    class="img-logo">
                                <h3 class="mt-4">Service Overview</h3>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                    dolorem ipsum
                                    quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Aelltes
                                    port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                    Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    ndustry
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                    and
                                    scrambled it to make </p>
                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It
                                    has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining
                                    essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit </p>
                            </div>
                            <section class="projects-section-two pt-5" id="portfolio">
                                <div class="auto-container">
                                    <div class="sec-title text-center">
                                        <span class="sub-title">@lang('infos.portfolio.p1')</span>
                                        <h2>@lang('infos.portfolio.p2')</h2>
                                    </div>

                                    <div class="carousel-outer">
                                        <div class="projects-carousel-two owl-carousel owl-theme default-navs">
                                            <div class="project-block-two">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image">
                                                            <a href="#">
                                                                <img src="{{ asset('') }}" alt=""></a>
                                                            <img src="{{ asset('common/images/logo-book-session-web-ok.png') }}"
                                                                alt="image logo porfolios" class="img-logo-portfolios">
                                                        </figure>
                                                        <a href="#" class="read-more"><i
                                                                class="fa fa-long-arrow-alt-right"></i></a>
                                                        <div class="info-box">
                                                            <h4 class="title">
                                                                <a href="#">Lorem</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="info-box">
                                                            <h4 class="title"><a href="#">lorem</a></h4>
                                                            <div class="text">
                                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                                                Veritatis assumenda omnis
                                                                qui.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
    <!--End Services Details-->
@endsection
