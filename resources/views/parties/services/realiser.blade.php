
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('common/newimg/p.jpg') }});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title mt-lg-5">{{ $type }}</h1>
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
                    <p>@lang('infos.s3.description') </p>
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
                                        <span>TBG Publishin</span>
                                        <i class="fas fa-angle-right"></i></a>
                                </li>
                                {{-- <li>
                                    <a href="#" class="gap-lg-3 gap-2" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab-2" type="button" role="tab" aria-controls="pensee"
                                        aria-selected="false">
                                        <span>Website Development</span>
                                        <i class="fas fa-angle-right"></i></a>
                                </li> --}}
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
                            <img src="{{ asset('common/images/logo-tbg publishing.png') }}" alt="img-logo"
                                class="img-logo">
                                <h3 class="mt-4">@lang("infos.more")</h3>
                                <p>@lang("infos.produits.tbgpub")</p>
                        </div>
                        <section class="projects-section-two pt-5" id="portfolio">
                            <div class="auto-container">
                                <div class="sec-title text-center">
                                    <span class="sub-title">@lang('infos.portfolio.p1')</span>
                                    <h2>@lang('infos.portfolio.p2')</h2>
                                </div>

                                @include("parties.slideService",['travails'=>$travails])
                            </div>
                        </section>
                    </div>
                    {{-- <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="home-tab">
                        <div class="services-details__content">
                            <img src="{{ asset('common/images/logo-master-class.png') }}" alt="img-logo"
                                class="img-logo">
                            <h3 class="mt-4">Service Overview</h3>
                            <p> </p>

                        </div>
                        <section class="projects-section-two pt-5" id="portfolio">
                            <div class="auto-container">
                                <div class="sec-title text-center">
                                    <span class="sub-title">@lang('infos.portfolio.p1')</span>
                                    <h2>@lang('infos.portfolio.p2')</h2>
                                </div>

                                @include("parties.slideService",['travails'=>$travails])
                            </div>
                        </section>
                    </div> --}}
                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->
