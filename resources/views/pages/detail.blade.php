@extends('pages.welcome',['titre'=>"portfolio - detail"])


@section('content')

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{asset('common/newimg/p.jpg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title mt-lg-5">Portfolio Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('accueil') }}">@lang("infos.main_menu.home")</a></li>
                {{-- <li><a href="#">Pages</a></li> --}}
                <li>@lang("infos.main_menu.portfolio")</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__top">
                    <div class="project-details__img"> <img src="{{asset('storage/'.$img->cover)}}" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="project-details__content-left">
                        <h3 class="mb-4">{{ $img->titre }}</h3>
                        <p class="">{{ $img->description }} </p>
                        <p class="mb-5"></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-5">
                    <div class="project-details__content-right">
                        <div class="project-details__details-box">
                            <div class="project-details__bg-shape"> </div>
                            <ul class="list-unstyled project-details__details-list">
                                <li>
                                    <p class="project-details__client">Date</p>
                                    <h4 class="project-details__name"> {{
                                        \Carbon\Carbon::parse($img->date)->isoFormat('LL') }}</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Client</p>
                                    <h4 class="project-details__name">Kodesolution Ltd</h4>
                                </li>
                                {{-- <li>
                                    <p class="project-details__client">Website</p>
                                    <h4 class="project-details__name">www.domain.com</h4>
                                </li> --}}
                                <li>
                                    <p class="project-details__client">Location</p>
                                    <h4 class="project-details__name">New York, USA</h4>
                                </li>
                                <li>
                                    <div class="project-details__social">

                                        <a target="blank" href="{{$img->twiter!=null?$img->twiter:""}}" {{
                                            $img->twiter!=null?"":"hidden"}}><i class="fab fa-twitter"></i></a>
                                        <a target="blank" href="{{$img->facebook!=null?$img->facebook:""}}" {{
                                            $img->facebook!=null?"":"hidden"}}><i class="fab fa-facebook"></i></a>
                                        <a target="blank" href="{{$img->instagram!=null?$img->instagram:""}}" {{
                                            $img->instagram!=null?"":"hidden"}}><i class="fab fa-instagram"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="projects-section" style="background: white !important" id="portfolio">
            <div class="upper-box">
                <div class="auto-container">
                    <div class="sec-title">
                        <span class="sub-title">@lang("infos.portfolio.voir")</span>
                        <h2>@lang("infos.portfolio.enImge") </h2>
                    </div>
                </div>
            </div>
            <div class="carousel-outer">
                <!--clients carousel-->
                <div class="projects-carousel owl-carousel owl-theme default-navs">
                    @forelse ($img->images as $im)
                    <div class="project-block">
                        <div class="image-box">
                            <figure class="image"><a href="{{asset('storage/'.$im->image)}}" class="lightbox-image"><img
                                        src="{{asset('storage/'.$im->image)}}" alt="" height="200" width="200"></a> </figure>
                            <div class="caption-box">
                                <h4 class="title"><a href="#"></a></h4>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </section>

        {{-- <div class="row">
            <div class="col-xl-12">
                <div class="project-details__pagination-box">
                    <ul class="project-details__pagination list-unstyled clearfix">
                        <li class="next">
                            <div class="icon"> <a href="#" aria-label="Previous"><i
                                        class="lnr lnr-icon-arrow-left"></i></a> </div>
                            <div class="content">Previous</div>
                        </li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="previous">
                            <div class="content">Next</div>
                            <div class="icon"> <a href="#" aria-label="Previous"><i
                                        class="lnr lnr-icon-arrow-right"></i></a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!--Project Details End-->
<!-- Projects Section Two-->
<section class="projects-section-two pt-5" id="portfolio">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">@lang("infos.portfolio.p1")</span>
            <h2>@lang("infos.portfolio.p2")</h2>
        </div>

        @include("parties.slideService")
    </div>
</section>
<!-- End Projects Section Two -->
@endsection
