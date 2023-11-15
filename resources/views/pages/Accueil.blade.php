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
                            <h1>At TBG<br> We shape your
                                events</h1>
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
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">Nos
                                        services</span></a>
                                <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">Qui
                                        sommes-nous</span></a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
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
                            <h1>At TBG <br>We design your
                                dream</h1>
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
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">Nos
                                    services</span></a>
                            <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">Qui
                                    sommes-nous</span></a>
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
                            <h1>At TBG<br>We equip your
                                people</h1>
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
                                <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">Nos
                                    services</span></a>
                            <a href="#about" class="theme-btn btn-style-one light-bg"><span class="btn-title">Qui
                                    sommes-nous</span></a>
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
                        <div class="text">There are many variations of passages of available but majority alteration in
                            some form, by humou or randomised words.</div>
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
                    <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
                        data-wow-delay="600ms">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="sub-title">get to know us</span>
                                <h2>Leading the best digital <br>agency in town</h2>
                                <h4>The professional approach to development.</h4>
                                <div class="text">There are many variations of simply free text passages of available but
                                    the majority have suffered alteration in some form, by injected hum randomised words
                                    which don't slightly.</div>
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
                                                    <div class="count-box"><span class="count-text" data-speed="3000"
                                                            data-stop="77">0</span>%</div>
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
                                <a href="page-about.html" class="theme-btn btn-style-one hvr-dark"><span
                                        class="btn-title">Discover More</span></a>

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
                                <figure class="image-1 overlay-anim wow fadeInUp"><img
                                        src="{{ asset('common/newimg/03.jpg') }}" alt=""></figure>
                                <figure class="image-2 overlay-anim wow fadeInRight"><img
                                        src="{{ asset('common/newimg/06.jpg') }}" alt="" class="rev-slidebg">
                                </figure>
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
    <section class="fun-fact-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg"></div>
                <div class="row">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <h3>Let’s Start Your Project with Digima</h3>
                            </div>
                        </div>
                    </div>

                    <div class="column col-lg-8 col-md-8 col-md-12 col-sm-12">
                        <div class="fact-counter">
                            <div class="row">
                                <!-- Counter block-->
                                <div class="counter-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="inner">
                                        <div class="content">
                                            <i class="icon flaticon-checking"></i>
                                            <div class="count-box counted"><span class="count-text" data-speed="3000"
                                                    data-stop="6420">6420</span></div>
                                            <h6 class="counter-title">Projects Completed</h6>
                                        </div>
                                    </div>
                                </div>

                                <!--Counter block-->
                                <div class="counter-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                    data-wow-delay="300ms"
                                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                    <div class="inner">
                                        <div class="content">
                                            <i class="icon flaticon-recommend"></i>
                                            <div class="count-box counted"><span class="count-text" data-speed="3000"
                                                    data-stop="9280">9280</span></div>
                                            <h6 class="counter-title">Satisfied Clients</h6>
                                        </div>
                                    </div>
                                </div>

                                <!--Counter block-->
                                <div class="counter-block col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                    data-wow-delay="600ms"
                                    style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                                    <div class="inner">
                                        <div class="content">
                                            <i class="icon flaticon-consulting"></i>
                                            <div class="count-box counted"><span class="count-text" data-speed="3000"
                                                    data-stop="380">380</span></div>
                                            <h6 class="counter-title">Expert Teams</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section Two-->
    <section class="projects-section-two pt-5">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">recent portfolio</span>
                <h2>Our Recent work</h2>
            </div>

            <div class="carousel-outer">
                <div class="projects-carousel-two owl-carousel owl-theme default-navs">
                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-5.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-6.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-7.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-8.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-5.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-6.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-7.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block-->
                    <div class="project-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="page-project-details.html"><img
                                            src="images/resource/project-8.jpg" alt=""></a>
                                </figure>
                                <a href="page-project-details.html" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="info-box">
                                    <h4 class="title"><a href="page-project-details.html">Marketing webdesign</a></h4>
                                    <div class="text">The Human Rights and Democracy Study Visa Programms</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                        <span class="sub-title">our feedbacks</span>
                        <h2>what they’re <br>talking?</h2>
                        <div class="text">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem
                            is simply free text quis bibendum.</div>
                    </div>
                </div>


                <!-- Testimonial Column -->
                <div class="testimonial-column col-xl-9 col-lg-12">
                    <div class="inner-column">
                        <!-- Testimonial Carousel -->
                        <div class="testimonial-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="thumb"><img src="images/resource/testi-thumb-2.png" alt="">
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">Lorem ipsum is simply free text dolor not sit amet, notted
                                            adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
                                    </div>
                                    <div class="info-box">
                                        <h6 class="name">Sarah Albert</h6>
                                        <span class="designation">Designer</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt="">
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">Lorem ipsum is simply free text dolor not sit amet, notted
                                            adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
                                    </div>
                                    <div class="info-box">
                                        <h6 class="name">david cooper</h6>
                                        <span class="designation">Designer</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="thumb"><img src="images/resource/testi-thumb-3.png" alt="">
                                        </div>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">Lorem ipsum is simply free text dolor not sit amet, notted
                                            adipisicing elit sed do eiusmod incididunt labore et dolore text.</div>
                                    </div>
                                    <div class="info-box">
                                        <h6 class="name">christine eve</h6>
                                        <span class="designation">Designer</span>
                                    </div>
                                </div>
                            </div>

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
				<span class="sub-title">our team members</span>
				<h2>Meet the experts</h2>
			</div>

			<div class="row">
				<!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/022.jpg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">Mike Hardson</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>

				<!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/028.jpg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">Aleesha brown</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>
                <!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/030.jpg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">michale smith</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>
                <!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/027.jpeg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">michale smith</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>
				<!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/024.jpeg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">michale smith</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>

                <!-- Team block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="2000ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="{{ asset('common/newimg/025.jpeg')}}" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-share-alt"></span>
						</div>
						<div class="info-box">
							<h5 class="name"><a href="page-team-details.html">michale smith</a></h5>
							<span class="designation">Designer</span>
						</div>
					</div>
				</div>
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
							<span class="sub-title">contact with us</span>
							<h2>let’s work together?</h2>
							<div class="text">Sed ut perspiciatis unde omnis natus error sit voluptatem accusa ntium doloremque laudantium totam rem.</div>
						</div>

						<!-- Contact block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-phone"></i>
								<h6 class="title">Have any question?</h6>
								<div class="text">Free <a href="tel:230009850">+23 (000)-9850</a></div>
							</div>
						</div>


						<!-- Contact Info block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-envelope"></i>
								<h6 class="title">Send email</h6>
								<div class="text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></div>
							</div>
						</div>

						<!-- Contact Info block -->
						<div class="contact-info-block">
							<div class="inner">
								<i class="icon fa fa-map-marker-alt"></i>
								<h6 class="title">Visit anytime</h6>
								<div class="text">30 broklyn golden street. New York</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Contact Form -->
						<div class="contact-form wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
							<h2 class="title">Contact us</h2>

							<!--Contact Form-->
							<form method="post" action="get" id="contact-form">
								<div class="row">
									<div class="form-group col-lg-12">
										<input type="text" name="full_name" placeholder="Your Name" required="">
									</div>

									<div class="form-group col-lg-12">
										<input type="email" name="Email" placeholder="Email Address" required="">
									</div>

									<div class="form-group col-lg-12">
										<textarea name="message" placeholder="Comment" required=""></textarea>
									</div>

									<div class="form-group col-lg-12">
										<button class="theme-btn btn-style-one hvr-dark" type="submit" name="submit-form"><span class="btn-title">Write a Message</span></button>
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
                            <img src="{{asset('common/images/logo-client/biy.png')}}" alt="">
                        </div>
                    </li>
					<li class="slide-item">
                        <div class="img">
                            <img src="{{asset('common/images/logo-client/gael.png')}}" alt="">
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
                            <img src="{{asset('common/images/logo-client/touchmydream.jpg')}}" alt="">
                        </div>
                    </li>

				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->
@endsection
