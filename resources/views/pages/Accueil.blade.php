@extends('pages.welcome', ['titre' => 'Home'])


@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-index="rs-1" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('common/newimg/03.jpg') }}" alt="" class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[10,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['900','800','600','500']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-15','-15','-30']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1><br>@lang("infos.slides.link_1")</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['105','90','90','70']"
                            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">The best group</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['190','185','180','150']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">@lang("infos.slides.btn1")</span></a>
                                <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">@lang("infos.slides.btn2")</span></a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    {{-- <li data-index="rs-2" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('common/slides/EVENT.jpeg') }}" alt="" class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[10,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['900','800','600','500']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-15','-15','-30']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1><br>@lang("infos.slides.link_2")</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['105','90','90','70']"
                            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">The best group</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['190','185','180','150']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">@lang("infos.slides.btn1")</span></a>
                                <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">@lang("infos.slides.btn2")</span></a>
                            </div>
                        </div>
                    </li> --}}
                    <li data-index="rs-2" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('common/newimg/07.jpeg') }}" alt="" class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[10,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['900','800','600','500']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-15','-15','-30']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1><br>@lang("infos.slides.link_2")</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['105','90','90','70']"
                            data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">The best group</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['190','185','180','150']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">@lang("infos.slides.btn1")</span></a>
                                <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">@lang("infos.slides.btn2")</span></a>
                            </div>
                        </div>
                    </li>
                    <!-- Slide 3 -->
                    <li data-index="rs-3" data-transition="zoomout">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('common/newimg/08.jpeg') }}" alt="" class="rev-slidebg">

                        <div class="tp-caption" data-paddingbottom="[10,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['900','800','600','500']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['-20','-15','-15','-30']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h1><br>@lang("infos.slides.link_3")</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['750','750','750','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['105','90','90','70']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="text">The best group</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','700','450']"
                            data-whitespace="normal" data-hoffset="['0','0','0','0']"
                            data-voffset="['190','185','180','150']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">@lang("infos.slides.btn1")</span></a>
                                <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">@lang("infos.slides.btn2")</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="social-links">
            <li><a target="_blank" href="https://youtube.com/channel/UC3lltuUYIdE-i_bfkLUB3UQ"><i class="fab fa-youtube"></i></a></li>
            <li><a target="_blank" href="https://www.facebook.com/TBGentreprise?mibextid=9R9pXO"><i class="fab fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://instagram.com/thebestgroupdrc?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram"></i></a></li>
        </ul>
    </section>
    <!-- End Main Slider-->
<!-- Features Section -->

<!-- End Features Section -->
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
            <div class="sec-title light">
                <div class="row">
                    <div class="col-lg-7">
                        <span class="sub-title">@lang("infos.slides.btn1")</span>
                        <h2>@lang("infos.services.subtitle")</h2>
                    </div>
                    {{-- <div class="col-lg-5">
                        <div class="text">@lang("infos.services.description")</div>
                    </div> --}}
                </div>
            </div>


            <div class="row">
                <section class="features-section pt-0">
                    <div class="auto-container">
                        <div class="row">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box ">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('detail-service',['id'=>"conseiller"]) }}"><img src="{{ asset('assets/images/services/feature-1.jpg') }}" alt=""></a></figure>
                                        <i class="icon flaticon-consulting"></i>
                                    </div>
                                    <div class="content-box">
                                        <h5 class="title"><a href="{{ route('detail-service',['id'=>"conseiller"]) }}">@lang("infos.s1.titre")</a></h5>
                                        <a href="{{ route('detail-service',['id'=>"conseiller"]) }}" class="read-more"><i class="lnr-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                                <div class="inner-box ">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('detail-service',['id'=>"concevoir"]) }}"><img src="{{ asset('assets/images/services/feature-2.jpg') }}" alt=""></a></figure>
                                        <i class="icon flaticon-graphic-design">

                                            {{-- <img src="{{ asset('common/images/concevoir.png') }}" width="50" alt="{{ __('') }}"> --}}
                                        </i>
                                    </div>
                                    <div class="content-box">
                                        <h5 class="title"><a href="{{ route('detail-service',['id'=>"concevoir"]) }}">@lang("infos.s2.titre")</a></h5>
                                        <a href="{{ route('detail-service',['id'=>"concevoir"]) }}" class="read-more"><i class="lnr-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                                <div class="inner-box ">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ route('detail-service',['id'=>'realiser']) }}"><img src="{{ asset('assets/images/services/feature-3.jpg') }}" alt=""></a></figure>
                                        <i class="icon flaticon-innovation"></i>
                                    </div>
                                    <div class="content-box">
                                        <h5 class="title"><a href="{{ route('detail-service',['id'=>'realiser']) }}">@lang("infos.s3.titre")</a></h5>
                                        <a href="{{ route('detail-service',['id'=>'realiser']) }}" class="read-more"><i class="lnr-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- About Section -->
    <section id="about" class="why-choose-us-three pt-0 mt-5 mb-5">
        <div class="auto-container">
            <div class="row">
				<div class="content-column col-xl-5 col-lg-5 col-md-12 col-sm-12 order-2 wow fadeInLeft" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<span class="sub-title">@lang("infos.main_menu.about")?</span>
							<h2>@lang("infos.idea")</h2>
							<div class="text"></div>
						</div>

						<!-- Work Block -->
						<div class="work-block">
							<div class="inner-box">
								<span class="icon fa fa-check"></span>
								<h6 class="title"></h6>
								<div class="text">@lang("infos.descAbout")</div>
							</div>
						</div>
						{{-- <a href="page-about.html" class="theme-btn btn-style-one hvr-dark" ><span class="btn-title">Explore Now</span></a> --}}
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-7 col-lg-7 col-md-12 col-sm-12">
					<div class="image-box wow fadeInRight">
						<figure class="image overlay-anim"><img src="{{ asset('common/images/services/about.jpg') }}" alt=""></figure>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--Emd About Section -->
    <section class="fun-fact-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg"></div>
                <div class="row">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="sec-title text-center">
                            <h2>@lang('infos.projetRessent')</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section Two-->
    <section class="projects-section-two pt-5" id="portfolio">
        <div class="auto-container">
            @include('parties.slideService')
        </div>
    </section>
    <!-- End Projects Section Two -->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="bg bg-pattern-2"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-3 col-lg-12">
                    <div class="sec-title">
                        <span class="sub-title">@lang('infos.review')</span>
                        <h2>@lang('infos.temoignage')</h2>
                        <div class="text"></div>
                    </div>
                </div>


                <!-- Testimonial Column -->
                <div class="testimonial-column col-xl-9 col-lg-12">
                    <div class="inner-column">
                        <!-- Testimonial Carousel -->
                        <div class="testimonial-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            @forelse($temoin as $tem)

                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="thumb"><img src="{{ asset('storage/'.$tem->photo) }}" alt="" width="100">
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">{{ Str::limit($tem->description, 200, '...') }}</div>
                                    </div>
                                    <div class="info-box">
                                        <h6 class="name">{{ $tem->prenom.' - '.$tem->nom }}</h6>
                                        <span class="designation">{{ $tem->profession }}</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p><q>Aucun témoignage pour l'instant</q></p>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    <!-- Team Section -->
	<section class="team-section" id="team">
		<div class="auto-container">
			<div class="sec-title text-center">
				{{-- <span class="sub-title">Management Team</span> --}}
				<h2>@lang("infos.team")</h2>
			</div>

			<div class="row">
				<!-- Team block -->
                @forelse  ($t1 as $t)
                    <div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="#"><img src="{{ asset('storage/'.$t->photo) }}" alt=""></a></figure>
							<div class="social-links">
                                @empty(!$t->facebook)
                                        <a target="_blank" href="{{$t->facebook}}">
                                        <i class="fab fa-facebook-f"></i></a>
                                    @endempty
                                    @empty(!$t->instagram)
                                          <a target="_blank" href="{{$t->instagram}}">
                                        <i class="fab fa-instagram"></i></a>
                                    @endempty
                                    @empty(!$t->tweeter)
                                        <a target="_blank" href="{{$t->tweeter}}">
                                        <i class="fa-brands fa-x-twitter"></i></a>
                                    @endempty
                                    @empty(!$t->linkedin)
                                        <a target="_blank" href="{{$t->linkedin}}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                    @endempty
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="#">{{$t->prenom.' '.$t->nom}}</a></h5>
							<span class="designation">{{$t->poste}}</span>
						</div>
					</div>
				</div>
                @empty

                @endforelse


			</div>
		</div>
	</section>
	<!-- End Team Section -->
    <section id="contact" class="contact-section">
		<div class="bg bg-pattern-6"></div>
		<div class="bg-image"><img src="images/resource/girl.png" alt=""></div>
		<div class="auto-container">
			<div class="row">
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12">
					<div class="inner-column">
						<div class="sec-title">
							{{-- <span class="sub-title"></span> --}}
							<h2>@lang("infos.txtContact")</h2>
						</div>

						<!-- Contact block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-phone"></i>
								<h6 class="title">@lang("infos.allquestion")</h6>
								<div class="text"><a href="tel:+243824859415">(+243) 824859415</a></div>
							</div>
						</div>


						<!-- Contact Info block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-envelope"></i>
								<h6 class="title">@lang("infos.writeus")</h6>
								<div class="text"><a href="mailto: Contact@thebestgroup.org"> Contact@thebestgroup.org</a></div>
							</div>
						</div>

						<!-- Contact Info block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-map-marker-alt"></i>
								<h6 class="title">@lang("infos.add")    </h6>
								<div class="text">16, avenue de la paix, Kinshasa-Gombe, <br> @lang("infos.ref") : Pressing 5 à sec.</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Form -->
						<div class="contact-form wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                            {{-- <img src="{{ asset('common/images/Jocelyne.png') }}" class="image-superposee" alt="Image superposée"> --}}
                            <h2 class="title">@lang("infos.contact")</h2>

							<!--Contact Form-->
							<form method="post" action="{{ route('sendMsg') }}" id="contact-form">
                                @csrf
								<div class="row">
									<div class="form-group col-lg-12">
										<input type="text" name="full_name" placeholder="@lang("infos.contactform.name")" required="">
									</div>

									<div class="form-group col-lg-12">
										<input type="email" name="email" placeholder="@lang("infos.contactform.email")" required="">
									</div>

									<div class="form-group col-lg-12">
										<textarea name="message" placeholder="@lang("infos.contactform.msg")" required=""></textarea>
									</div>

									<div class="form-group col-lg-12">
										<button class="theme-btn btn-style-one hvr-dark" id="btnmsg" type="submit" name="submit-form"><span class="btn-title">@lang("infos.contactform.btn")</span></button>
									</div>
								</div>
							</form>
						</div>
						<!--End Contact Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Clients Section   -->
	<section class="clients-section alternate">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel owl-carousel owl-theme">
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('assets/images/partenaire/fonarev_rdc_logo.jpg')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/noel.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/fdnt.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/airtel.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/pcn.jpg')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/phila.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/sep.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/logo.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/touchmydream.jpg')}}" alt="">
                        </div>
                    </li>

				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->
@endsection
