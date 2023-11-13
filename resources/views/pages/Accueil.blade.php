@extends('pages.welcome',['titre'=>"Home"])


@section('content')
 <!--Main Slider-->
 <section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <!-- Slide 1 -->
                <li data-index="rs-1" data-transition="zoomout">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('common/newimg/03.jpg')}}" alt="" class="rev-slidebg">

                    <div class="tp-caption"
                    data-paddingbottom="[10,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['900','800','600','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-15','-15','-30']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1>digital agency <br>for your business</h1>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['105','90','90','70']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">You have better things to do than worry about your business</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['700','750','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','185','180','150']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="btn-box">
                            <a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">get a qoute</span></a>
                            <a href="page-about.html" class="theme-btn btn-style-one light-bg"><span class="btn-title">Explore Now</span></a>
                        </div>
                    </div>
                </li>

                <!-- Slide 2 -->
                <li data-index="rs-2" data-transition="zoomout">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('common/newimg/07.jpeg')}}" alt="" class="rev-slidebg">

                    <div class="tp-caption"
                    data-paddingbottom="[10,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['900','800','600','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-15','-15','-30']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1>digital agency <br>for your business</h1>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['105','90','90','70']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">You have better things to do than worry about your business</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['700','750','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','185','180','150']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="btn-box">
                            <a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">get a qoute</span></a>
                            <a href="page-about.html" class="theme-btn btn-style-one light-bg"><span class="btn-title">Explore Now</span></a>
                        </div>
                    </div>
                </li>
                <!-- Slide 3 -->
                <li data-index="rs-3" data-transition="zoomout">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('common/newimg/08.jpeg')}}" alt="" class="rev-slidebg">

                    <div class="tp-caption"
                    data-paddingbottom="[10,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['900','800','600','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-15','-15','-30']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1>digital agency <br>for your business</h1>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['105','90','90','70']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="text">You have better things to do than worry about your business</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['700','750','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['190','185','180','150']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <div class="btn-box">
                            <a href="page-contact.html" class="theme-btn btn-style-one"><span class="btn-title">get a qoute</span></a>
                            <a href="page-about.html" class="theme-btn btn-style-one light-bg"><span class="btn-title">Explore Now</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="social-links">
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
</section>
<!-- End Main Slider-->

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">
        <div class="sec-title light">
            <div class="row">
                <div class="col-lg-7">
                    <span class="sub-title">our services</span>
                    <h2>Services we offer</h2>
                </div>
                <div class="col-lg-5">
                    <div class="text">There are many variations of passages of available but majority alteration in some form, by humou or randomised words.</div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <span class="count">01</span>
                    <h6 class="title"><a href="page-service-details.html">Website <br>Development</a></h6>
                    <i class="icon flaticon-digital-services"></i>
                    <div class="text">Digital agency is an high end test for business, website work</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <span class="count">02</span>
                    <h6 class="title"><a href="page-service-details.html">Graphic <br>designing</a></h6>
                    <i class="icon flaticon-graphic-design"></i>
                    <div class="text">Digital agency is an high end test for business, website work</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <span class="count">03</span>
                    <h6 class="title"><a href="page-service-details.html">Digital <br>marketing</a></h6>
                    <i class="icon flaticon-technology"></i>
                    <div class="text">Digital agency is an high end test for business, website work</div>
                </div>
            </div>


            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                <div class="inner-box">
                    <span class="count">04</span>
                    <h6 class="title"><a href="page-service-details.html">Apps <br>development</a></h6>
                    <i class="icon flaticon-mobile-app"></i>
                    <div class="text">Digital agency is an high end test for business, website work</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->
<!-- About Section -->
<section id="about" class="about-section">
    <div class="auto-container">
        <div class="outer-box">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">get to know us</span>
                            <h2>Leading the best digital <br>agency in town</h2>
                            <h4>The professional approach to development.</h4>
                            <div class="text">There are many variations of simply free text passages of available but the majority have suffered alteration in some form, by injected hum randomised words which don't slightly.</div>
                        </div>

                        <!--Skills-->
                        <div class="skills">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Website Designing</h6>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="77">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="77">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-style-one">
                            <li><i class="fa fa-check-circle"></i> Maecenas id amet libero rutrum</li>
                            <li><i class="fa fa-check-circle"></i> Nolam vel suffered sit form</li>
                            <li><i class="fa fa-check-circle"></i> Proin mattis noted purus</li>
                        </ul>

                        <div class="bottom-box">
                            <a href="page-about.html" class="theme-btn btn-style-one hvr-dark"><span class="btn-title">Discover More</span></a>

                            <!-- Founder Info -->
                            <div class="exp-box">
                                <h2 class="count"><i class="icon flaticon-experience"></i> +30</h2>
                                <span class="txt">Years of Experience</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="image-box">
                            <span class="icon icon-dots-one bounce-x"></span>
                            <figure class="image-1 overlay-anim wow fadeInUp"><img src="{{asset('common/newimg/03.jpg')}}" alt=""></figure>
                            <figure class="image-2 overlay-anim wow fadeInRight"><img src="{{asset('common/newimg/06.jpg')}}" alt="" class="rev-slidebg"></figure>
                            <span class="icon-box icon-one"><i class="flaticon-innovation"></i></span>
                            <span class="icon-box icon-two"><i class="flaticon-rocket"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Emd About Section -->
@endsection
