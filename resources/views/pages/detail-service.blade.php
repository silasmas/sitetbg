@extends('pages.welcome',['titre'=>"portfolio - detail"])


@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{asset('common/newimg/p.jpg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title mt-lg-5">Concevoir</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('accueil') }}">@lang("infos.main_menu.home")</a></li>
                {{-- <li><a href="#">Pages</a></li> --}}
                <li>@lang("infos.main_menu.portfolio")</li>
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
                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit  </p>
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->
<!--Start Services Details-->
<section class="services-details">
    <div class="container pt-lg-5 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="service-sidebar" style="max-width: 100%">
                    <div class="sidebar-widget service-sidebar-single">

                        <div class="sidebar-service-list">
                            <ul class="d-flex align-items-center gap-3 flex-wrap">
                                <li class="current mt-0"><a href="page-service-details.html" class="current gap-lg-3 gap-2"><span>Website Development</span><i class="fas fa-angle-right"></i></a></li>
                                <li class="mt-0"><a href="page-service-details.html" class="gap-lg-3 gap-2"><span>Graphic Designing</span><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Start Services Details Content-->
            <div class="col-12">
                <div class="services-details__content">
                    <h3 class="mt-4">Service Overview</h3>
                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit  </p>
                    <div class="content mt-40">
                        <div class="text">
                            <h3>Service Center</h3>
                            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur</blockquote>
                        </div>
                        <div class="feature-list mt-4">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/service-d1.jpg" alt="images" />
                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <img class="mb-3" src="images/resource/service-d2.jpg" alt="images" />
                                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mt-25">
                        <h3>Frequently Asked Question</h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Is my technology allowed on tech?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">How to soft launch your business?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">How to turn visitors into contributors
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">How can i find my solutions?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->
<!-- Projects Section Two-->
<section class="projects-section-two pt-5" id="portfolio">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">@lang("infos.portfolio.p1")</span>
            <h2>@lang("infos.portfolio.p2")</h2>
        </div>

        <div class="carousel-outer">
            <div class="projects-carousel-two owl-carousel owl-theme default-navs">
                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="#">
                                    <img
                                        src="{{asset('')}}" alt=""></a>
                            </figure>
                            <a href="#" class="read-more"><i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                            <div class="info-box">
                                <h4 class="title">
                                    <a href="#">Lorem</a></h4>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="info-box">
                                <h4 class="title"><a href="#">lorem</a></h4>
                                <div class="text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis assumenda omnis qui.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Projects Section Two -->
@endsection
