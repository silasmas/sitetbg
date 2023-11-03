@extends('pages.welcome',['titre'=>"Home"])


@section('content')
<!-- Start Banner -->
<section class="lqd-section banner min-h-100vh w-full flex flex-column items-center justify-center" id="banner">
    <div class="absolute w-full h-full">
        <div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex h-vh-100">
            <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner"
                data-particles="true"
                data-particles-options='{"particles": {"number": {"value" : 14, "density" : 1} , "color": {"value" : ["#F27E3F", "#0FBBB4", "#48BB0F", "#3FF292", "#899BFF"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 6, "random": true, "anim": {"enable": true, "size_min" : 1, "speed" : 1}} , "move": {"enable": true, "direction": "right", "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row items-center">
            <div class="col col-12 col-xl-5" data-custom-animations="true"
                data-ca-options='{"animationTarget": "h2, h6, p, .btn", "duration" : 1800, "delay" : 170, "ease": "power4.out", "initValues": {"y": "65px", "rotationY" : 65, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                <div class="ld-fancy-heading relative">
                </div>
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element inline-block relative text-rotator-activated mb-0/25em text-72 leading-1/05em tracking-0"
                        data-text-rotator="true"> At TBG, We <span class="txt-rotate-keywords">
                            <span class="txt-rotate-keyword lqd-keyword-slide-out is-next">equip your <br> people</span>
                            <span class="txt-rotate-keyword lqd-keyword-slide-out">shape your <br> events</span>
                            <span class="txt-rotate-keyword lqd-keyword-slide-in active">design your <br> dream</span>
                        </span>
                    </h2>
                </div>
                <div class="ld-fancy-heading relative">
                    <p class="ld-fh-element relative mb-2em text-20 leading-32">The Best Group Company Communication</p>
                </div>
                <div class="flex flex-row flex-wrap items-center justify-start">
                    <div class="fancy-button mr-15 module-btn sm:w-full">
                        <a href="#services"
                            class="btn btn-solid btn-xlg btn-icon-right btn-hover-reveal font-bold uppercase tracking-1/5 leading-1/4em whitespace-nowrap bg-transparent rounded-100 text-white"
                            data-lity="#contact-modal">
                            <span class="btn-txt" data-text="Get a Quote">Nos services</span>
                            <span class="btn-icon text-16">
                                <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-7 sm:order-first" data-custom-animations="true"
                data-ca-options='{"animationTarget": "svg, img", "startDelay" : 350, "ease": "power4.out", "initValues": {"opacity" : 0} , "animations": {"opacity" : 1}}'>
                <div class="image-container relative -mr-50 lg:m-0">
                    <div class="ld-masked-image" data-dynamic-shape="true">
                        <svg class="scene lqd-overlay flex" viewbox="140 140 140 140">
                            <defs>
                                <clippath id="banner-masked-svg" clippathunits="objectBoundingBox"
                                    transform="scale(0.00158)">
                                    <path vector-effect="non-scaling-stroke" fill="black"
                                        d="M212.625, 0.091 C319.112, -2.992 719.225, 71.583 615.507, 328.179 C511.789, 584.775 250.263, 624.292 112.94, 568.057 C-24.383, 511.822 -12.023, 229.89 23.583, 138.127 C59.189, 46.364 106.138, 3.174 212.625, 0.091 Z"
                                        pathdata:id="M362.5, 4 C487, 4 631, -44 631, 201.5 C631, 447 538, 623.5 310.5, 581.5 C83, 539.5 -29.917, 266.627 7, 156.5 C43.917, 46.373 238, 4 362.5, 4 Z;M370, 18 C494.5, 18 627, -56.5 627, 189 C627, 434.5 405.5, 573.5 155.5, 581 C-94.5, 588.5 23.083, 175.127 60, 65 C96.917, -45.127 245.5, 18 370, 18 Z">
                                    </path>
                                </clippath>
                            </defs>
                        </svg>
                        <figure class="clip-svg" data-responsive-bg="true">
                            <img width="1292" height="1196" src="{{asset('assets/newimg/3.JPG')}}"
                                class="w-full invisible" alt="Banner Image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner -->

<!-- About-->
<section class="lqd-section digital-experience py-100" id="about">
    <div class="container">
        <div class="row items-center">
            <div class="w-55percent relative flex items-center justify-center lg:w-full sm:hidden">
                <div class="absolute w-auto -bottom-20 module-img-1" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "50px"}' data-parallax-to='{"y": "0px"}'>
                    <div class="lqd-imggrp-single block relative">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img class="rounded-8" src="{{asset('assets/images/shape-dots.svg')}}"
                                    alt="digital experience">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="absolute w-260 -top-5percent module-img-2" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "110px"}' data-parallax-to='{"y": "-50px"}'>
                    <div class="lqd-imggrp-single block relative" data-shadow-style="4" data-inview="true"
                        data-animate-shadow="true">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img class="rounded-8" src="{{asset('assets/newimg/8.JPG')}}"
                                    alt="digital experience">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="absolute w-400 -top-5percent module-img-3" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "150px"}' data-parallax-to='{"y": "-120px"}'>
                    <div class="lqd-imggrp-single block relative" data-shadow-style="4" data-inview="true"
                        data-animate-shadow="true">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img class="rounded-8" src="{{asset('assets/newimg/6.JPG')}}"
                                    alt="digital experience">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="relative w-400 module-img-4" data-parallax="true"
                    data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                    data-parallax-from='{"y": "80px"}' data-parallax-to='{"y": "-70px"}'>
                    <div class="lqd-imggrp-single block relative mt-50percent" data-shadow-style="4" data-inview="true"
                        data-animate-shadow="true">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img class="rounded-8" width="393" src="{{asset('assets/newimg/2.JPG')}}"
                                    alt="digital experience">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-45percent flex flex-col items-start lg:w-full lg:items-center lg:text-center"
                data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
                    <h6 class="ld-fh-element relative lowercase m-0 py-10 px-20"> Qui Sommes-Nous ?</h6>
                </div>
                <div class="ld-fancy-heading relative">
                    <h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover h2"
                        data-inview="true" data-transition-delay="true"
                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                        {{-- <span> Connect people in</span> --}}
                        <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">Conseiller - Concevoir - Réaliser</span>
                            <span class="lqd-highlight-inner"></span>
                        </mark>
                    </h2>
                </div>
                {{-- <div class="ld-fancy-heading relative">
                    <p class="text-20 font-bold leading-1/5em mb-1/5em ld-fh-element relative">More than just an ad
                        agency, we harness the tools of traditional and digital.</p>
                </div> --}}
                <div class="ld-fancy-heading relative">
                    <p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">
                        Nous conseillons par la formation et le coaching, nous concevons des projets de développement d'entreprise et des plans de communication et nous réalisons les évènements internes ainsi qu'externes des entreprises et personnes de notoriétés.
                    </p>
                </div>
                {{-- <a href="#counter"
                    class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-solid btn-xl btn-hover-txt-switch btn-hover-txt-switch-x bg-primary text-white rounded-100 hover:bg-accent"
                    data-localscroll=" true">
                    <span class="btn-txt" data-text="More about us" data-split-text="true"
                        data-split-options='{"type":  "chars, words"}'>More about us</span>
                </a> --}}
            </div>
        </div>
    </div>
</section>
<!-- End about -->

<!-- Start Digital Experience Counter -->
<section class="lqd-section digital-experience-counter py-100" id="counter">
    <div class="container">
        <div class="row algin-items-center">
            <div class="col col-12 col-xl-5">
                <div class="w-full flex flex-col items-start lg:text-center lg:items-center"
                    data-custom-animations="true"
                    data-ca-options='{"animationTarget": ".animation-element", "delay" : 100, "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                    <div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element">
                        <h6 class="ld-fh-element relative lowercase m-0 py-10 px-20"> Digital Experience</h6>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover"
                            data-inview="true" data-transition-delay="true"
                            data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'>
                            <span>The hundred of completed works still</span>
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">counting</span>
                                <span class="lqd-highlight-inner"></span>
                            </mark>
                        </h2>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <p class="text-20 leading-1/5em mb-2/5em ld-fh-element relative">Through strategy, design, and
                            planning we build brand identities that connect with your Nesi. We then fine-tune a
                            marketing plan that allows us to laser focus and target your audience through the right
                            channels.</p>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-6 offset-xl-1 p-0">
                <div class="px-10percent flex items-center align-content-center h-full relative module-counter">
                    <section
                        class="lqd-section counter-boxes bg-white text-center box-shadow-bottom transition-all rounded-16 z-2 relative w-full">
                        <div class="container-fluid p-0">
                            <div class="row m-0">
                                <div class="col col-12 col-md-6 p-0">
                                    <div
                                        class="flex flex-col w-full h-full align-contents-center justify-center border-right border-black-10 sm:border-right-0">
                                        <div class="counter-box text-title m-0 py-35 border-bottom border-black-10">
                                            <div class="lqd-counter relative center lqd-counter-default">
                                                <div class="text-48 font-bold mb-15 lqd-counter-element relative"
                                                    data-enable-counter="true"
                                                    data-counter-options='{"targetNumber": "19+"}'>
                                                    <span class="block">19+</span>
                                                </div>
                                                <span class="lqd-counter-text text-text">Total Top Services</span>
                                            </div>
                                        </div>
                                        <div class="counter-box text-title m-0 py-35">
                                            <div class="lqd-counter relative center lqd-counter-default">
                                                <div class="text-48 font-bold mb-15 lqd-counter-element relative "
                                                    data-enable-counter="true"
                                                    data-counter-options='{"targetNumber": "98%"}'>
                                                    <span class="block">98%</span>
                                                </div>
                                                <span class="lqd-counter-text text-text">Positive Feedback</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 p-0">
                                    <div class="flex flex-col w-full h-full align-contents-center justify-center">
                                        <div class="counter-box text-title m-0 py-35 border-bottom border-black-10">
                                            <div class="lqd-counter relative center lqd-counter-default">
                                                <div class="text-48 font-bold mb-15 lqd-counter-element relative "
                                                    data-enable-counter="true"
                                                    data-counter-options='{"targetNumber": "27+"}'>
                                                    <span class="block">27+</span>
                                                </div>
                                                <span class="lqd-counter-text text-text">Countries</span>
                                            </div>
                                        </div>
                                        <div class="counter-box text-title m-0 py-35">
                                            <div class="lqd-counter relative center lqd-counter-default">
                                                <div class="text-48 font-bold mb-15 lqd-counter-element relative "
                                                    data-enable-counter="true"
                                                    data-counter-options='{"targetNumber": "2,663"}'>
                                                    <span class="block">2,663</span>
                                                </div>
                                                <span class="lqd-counter-text text-text">Usual Users</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="absolute ltr-left-0 bottom-0 w-auto  z-1">
                        <div class="lqd-imggrp-single block relative">
                            <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                <figure class="w-full relative">
                                    <img src="{{asset('assets/images/shape-dots.svg')}}" alt="shape">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Digital Experience Counter -->

<!-- Start Services -->
<section class="lqd-section icon-box-colored pt-30 pb-60" id="services">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-xl-4 pt-110 px-30 lg:p-0" data-parallax="true"
                data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                data-parallax-from='{"y": "60px"}' data-parallax-to='{"y": "-150px"}'>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-pink-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62" height="62"
                                    viewbox="0 0 62 62">
                                    <path
                                        d="M5,41v8a2,2,0,0,0,2,2H9a2,2,0,0,0,2-2V41a2,2,0,0,0-2-2H7A2,2,0,0,0,5,41Zm2,0H9v8H7Zm52,0H57V39h2Zm0,10H57V43h2ZM15,59H53a2,2,0,0,0,2-2V33a2,2,0,0,0-2-2H15a2,2,0,0,0-2,2V57A2,2,0,0,0,15,59Zm0-26H53V57H15Zm23.553,2.1A18.023,18.023,0,0,1,30.528,37H29a5,5,0,0,0-1,9.9v5.687A2.417,2.417,0,0,0,30.414,55h3.172a2.414,2.414,0,0,0,1.707-4.121l-1.172-1.172A.417.417,0,0,1,34,49.414V47.349A17.973,17.973,0,0,1,38.553,48.9l.211.1H44V35H38.764ZM26,42a3,3,0,0,1,3-3h1.528A20.043,20.043,0,0,0,38,37.541v8.918A20.043,20.043,0,0,0,30.528,45H29A3,3,0,0,1,26,42Zm6.707,9.121,1.172,1.172a.414.414,0,0,1-.293.707H30.414A.415.415,0,0,1,30,52.586V47h.528c.491,0,.982.028,1.472.069v2.345a2.4,2.4,0,0,0,.707,1.707ZM42,47H40V37h2ZM54,15V14a1,1,0,0,0-1-1H51a3,3,0,0,1-3-3V7h3V5h2V7a3,3,0,0,1,3,3H54a1,1,0,0,0-1-1H50v1a1,1,0,0,0,1,1h2a3,3,0,0,1,3,3v3H53v2H51V17a3,3,0,0,1-3-3h2a1,1,0,0,0,1,1ZM37,13h4.051a11,11,0,1,0,0-2H37a3,3,0,0,0-3,3V27H30V26a3,3,0,0,0-3-3H16a1,1,0,0,1-1-1V21h8V18a9.01,9.01,0,0,0-5.623-8.337,5,5,0,1,0-6.754,0A9.01,9.01,0,0,0,5,18v3h8v1a3,3,0,0,0,3,3H27a1,1,0,0,1,1,1v1H6a5.006,5.006,0,0,0-5,5V58a5.006,5.006,0,0,0,5,5H58a5.006,5.006,0,0,0,5-5V32a5.006,5.006,0,0,0-5-5H36V14A1,1,0,0,1,37,13ZM52,3a9,9,0,1,1-9,9A9.011,9.011,0,0,1,52,3ZM11,6a3,3,0,1,1,3,3A3,3,0,0,1,11,6ZM7,18a7,7,0,1,1,14,0v1H7ZM61,32V58a3,3,0,0,1-3,3H6a3,3,0,0,1-3-3V32a3,3,0,0,1,3-3H58A3,3,0,0,1,61,32ZM17,43h2v2H17Zm0-4h2v2H17Zm0-4h2v2H17ZM49,49h2v2H49Zm0-4h2v2H49Zm0,8h2v2H49Z"
                                        transform="translate(-1 -1)" fill="#7e0a5d"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">
                            <span>Edition des livres</span>
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32"
                                viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Nous réalisons votre rêve en éditant vos livres, concevant couverture et mise en page, jusqu'à sa sortie officielle.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-purple-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62" height="62"
                                    viewbox="0 0 62 62">
                                    <path
                                        d="M60,1H10A3,3,0,0,0,7,4V19.586L6.414,19H6a5.006,5.006,0,0,0-5,5v.414l5.178,5.178a5.783,5.783,0,0,0,.794,4.633,3.116,3.116,0,0,0-1.058,5.1l9.758,9.758a3.117,3.117,0,0,0,5.056-.944l8.749,8.749,7.055,2.016L41.649,63H42a3,3,0,0,0,3-3v-.351l-4.094-5.118L38.89,47.476,38.415,47H60a3,3,0,0,0,3-3V4a3,3,0,0,0-3-3ZM10,3H60a1,1,0,0,1,1,1V9H9V4A1,1,0,0,1,10,3ZM3.025,23.611a3.008,3.008,0,0,1,2.586-2.586l4.041,4.041a5.768,5.768,0,0,0-.773.641L7.707,26.879a5.868,5.868,0,0,0-.643.771ZM30,54.586,28.414,53,35,46.414,36.586,48Zm-3-3-6.913-6.913h0l-9.758-9.758L9.121,33.707a3.829,3.829,0,0,1,0-5.414l1.172-1.172a3.829,3.829,0,0,1,5.414,0L33.586,45ZM17.879,48a1.133,1.133,0,0,1-.793-.328L7.328,37.914A1.121,1.121,0,0,1,8.121,36a1.133,1.133,0,0,1,.793.328l9.758,9.758A1.121,1.121,0,0,1,17.879,48Zm22.038,8.5,3.038,3.8a1,1,0,0,1-.66.66l-3.8-3.039Zm-3.208.38-4.8-1.371,5.6-5.6,1.372,4.8ZM60,45H36.414L17.121,25.707A5.761,5.761,0,0,0,11.6,24.181L9,21.586V11H61V44A1,1,0,0,1,60,45ZM17,7H15V5h2ZM13,7H11V5h2Zm8,0H19V5h2ZM31,33H59V13H31Zm2-2V29h6.293a7.482,7.482,0,0,0,5.328-2.208l2.172-2.171a5.536,5.536,0,0,1,7.372-.408L57,26.481V31ZM57,15v8.919l-1.585-1.268A7.558,7.558,0,0,0,50.707,21a7.482,7.482,0,0,0-5.328,2.208l-2.172,2.171A5.5,5.5,0,0,1,39.293,27H33V15ZM38,23a3,3,0,1,0-3-3A3,3,0,0,0,38,23Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,38,19ZM13,15H11V13h2Zm2-2H29v2H15Zm-4,4H29v2H11Zm0,4H29v2H11ZM37,35H59v2H37Zm20,4h2v2H57ZM37,39H55v2H37Z"
                                        transform="translate(-1 -1)"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">
                            <span>Conception et Management des projets</span>
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32"
                                viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Nous concevons et mettons à exécution les projets, nous les faisons naître et nous les voyons grandir. Les projets non conçus par notre équipe ne sont pas un frein, nous nous identifions à cela comme s'ils portaient déjà notre ADN.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-4 p-30 lg:p-0" data-parallax="true"
                data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                data-parallax-from='{"y": "-50px"}' data-parallax-to='{"y": "80px"}'>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-red-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="55.605" height="55.605"
                                    viewbox="0 0 55.605 55.605">
                                    <path
                                        d="M7.175,44.843H8.969v1.794H7.175ZM3.587,46.637H5.381V44.843H3.587Zm7.175,0h1.794V44.843H10.762Zm44.843-29.6v28.7a4.49,4.49,0,0,1-4.484,4.484H39.462v3.587h3.587v1.794H12.556V53.812h3.587V50.224H4.484A4.49,4.49,0,0,1,0,45.74V17.04a4.49,4.49,0,0,1,4.484-4.484H7.175V37.668H48.431V16.144h1.794V39.462H5.381V14.35h-.9A2.694,2.694,0,0,0,1.794,17.04V41.256H14.561l3.587,1.794H53.812V17.04a2.694,2.694,0,0,0-2.691-2.691H48.431V8.969H7.175v1.794H5.381V0H50.224V12.556h.9A4.49,4.49,0,0,1,55.605,17.04ZM48.431,7.175V1.794H7.175V7.175ZM37.668,50.224H17.937v3.587H37.668ZM53.812,45.74v-.9H17.726l-3.587-1.794H1.794V45.74a2.694,2.694,0,0,0,2.691,2.691H51.121A2.694,2.694,0,0,0,53.812,45.74ZM8.969,5.381h1.794V3.587H8.969Zm3.587,0H14.35V3.587H12.556Zm3.587-1.794V5.381h1.794V3.587ZM14.35,35.874V24.267a4.335,4.335,0,0,1-1.794-3.5v-.474a4.338,4.338,0,0,1,.223-1.375L15.5,10.762H40.108l2.717,8.153a4.314,4.314,0,0,1,.224,1.375v.474a4.333,4.333,0,0,1-1.794,3.5V35.874ZM29.6,28.7H26.009v5.381H29.6Zm9.865-3.665A4.226,4.226,0,0,1,35.123,23.2,4.34,4.34,0,0,1,27.8,23a4.34,4.34,0,0,1-7.32.2,4.226,4.226,0,0,1-4.339,1.831v9.046h8.072V26.906H31.39v7.175h8.072ZM34.3,12.556l1.562,7.175h.01v.043l.324,1.492a2.553,2.553,0,0,0,5.057-.5v-.474a2.535,2.535,0,0,0-.131-.807l-2.31-6.927Zm-1.838,0H28.7v7.086l.324,1.623a2.553,2.553,0,0,0,5.057-.5v-.937Zm-9.324,0-1.616,7.411v.8a2.553,2.553,0,0,0,5.057.5l.325-1.624V12.556ZM14.35,20.765a2.553,2.553,0,0,0,5.057.5l.342-1.711,1.554-7H16.79l-2.31,6.927a2.535,2.535,0,0,0-.131.807Zm0,0"
                                        fill="#9500ff"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">
                            <span>Evénementiel</span>
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32"
                                viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Une fois votre event conçu, nous passons à l'action en mettant à exécution, le projet dans son entièreté.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-slate-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="81.895" height="81.895"
                                    viewbox="0 0 81.895 81.895">
                                    <defs>
                                        <lineargradient id="a" x1="0.5" x2="0.5" y2="1"
                                            gradientunits="objectBoundingBox">
                                            <stop offset="0" stop-color="#fb9e44"></stop>
                                            <stop offset="1" stop-color="#f57452"></stop>
                                        </lineargradient>
                                    </defs>
                                    <path
                                        d="M53.276,43.748,54.4,46.14q-1.339.626-2.708,1.18l-.988-2.45q1.3-.527,2.576-1.121ZM37.826,48.177l.317,2.623a53.68,53.68,0,0,0,10.834-2.475l-.852-2.5a50.88,50.88,0,0,1-10.3,2.353ZM82.9,12.888V57.8a6.612,6.612,0,0,1-6.6,6.6H64.4v5.284H57.456l-.3-.166c-1.09-.6-2.207-1.31-3.286-1.992a40.646,40.646,0,0,0-5.546-3.119A3.971,3.971,0,0,1,46.7,66.421a3.911,3.911,0,0,1,.531,1.944,3.954,3.954,0,0,1-1.851,3.341,3.9,3.9,0,0,1-1.321,5.284,3.919,3.919,0,0,1,.53,1.943A3.968,3.968,0,0,1,40.627,82.9H21.454a9.187,9.187,0,0,1-6.538-2.709l-1.254-1.254H11.567V82.9H1V53.836H11.567V57.8h2.2l.44-.33V7.6a6.612,6.612,0,0,1,6.6-6.6H33.154a6.563,6.563,0,0,1,4.671,1.935l3.348,3.348H76.291A6.612,6.612,0,0,1,82.9,12.888ZM16.851,7.6v3.963H80.01a3.957,3.957,0,0,0-3.72-2.642H40.08L35.957,4.8a3.942,3.942,0,0,0-2.8-1.161H20.813A3.968,3.968,0,0,0,16.851,7.6ZM8.925,56.477H3.642V80.253H8.925ZM41.948,78.932a1.321,1.321,0,0,0-1.321-1.321h-6.6V74.97h7.925a1.321,1.321,0,1,0,0-2.642H34.022V69.686h9.246a1.321,1.321,0,1,0,0-2.642H34.022V64.4H44.589a1.321,1.321,0,1,0,0-2.642H31.38a9.25,9.25,0,0,1-8.341-5.284h-.9A6.635,6.635,0,0,0,18.173,57.8L14.649,60.44H11.567V76.291h3.189l2.028,2.028a6.563,6.563,0,0,0,4.671,1.935H40.627A1.321,1.321,0,0,0,41.948,78.932ZM32.7,59.119V45.871c-.361.009-.717.04-1.078.04H31.38a6.6,6.6,0,0,0,0,13.209Zm22.581,6.175c.408.258.8.5,1.2.749V39.023a48.287,48.287,0,0,1-21.134,6.739V59.119h9.246a3.97,3.97,0,0,1,3.654,2.426,35.614,35.614,0,0,1,7.039,3.749Zm.594-29c.395-.247.8-.472,1.189-.732l.333-.221h1.721v-12.7L73.961,30.06,63.394,35.343H64.4v5.284A10.576,10.576,0,1,0,55.876,36.3ZM68.054,30.06l-6.293-3.146v6.293Zm-6.293,7.925H59.119v29.06h2.642ZM80.253,57.8V14.209h-63.4V55.52a9.274,9.274,0,0,1,5.284-1.684h.106A9.177,9.177,0,0,1,31.38,43.268h.243A45.693,45.693,0,0,0,53.6,37.641a13.2,13.2,0,1,1,10.8,5.627V61.761H76.291A3.968,3.968,0,0,0,80.253,57.8ZM27.418,6.284H24.776V8.925h2.642Zm-5.284,0H19.492V8.925h2.642Zm10.567,0H30.06V8.925H32.7ZM67.044,59.119H77.612V56.477H67.044Zm0-5.284H77.612V51.194H67.044Zm0-5.284H77.612V45.91H67.044Zm-47.552-31.7h29.06V32.7H19.492ZM22.134,30.06H45.91V19.492H22.134Zm-2.642,7.925h2.642V35.343H19.492Zm5.284,0H48.552V35.343H24.776Z"
                                        transform="translate(-1 -1)" fill="url(#a)"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">
                            <span>Formation indoor et outdoor du personnel</span>
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32"
                                viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Nous apportons notre expertise auprès de vous et dans le soucis de vous mettre dans les meilleures conditions, nous choisissons un cadre meilleur ou mieux, nous venons dans vos bureaux.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-4 pt-160 px-30 lg:p-0" data-parallax="true"
                data-parallax-options='{"ease": "linear", "start": "top bottom", "end": "bottom+=0px top"}'
                data-parallax-from='{"y": "110px"}' data-parallax-to='{"y": "-110px"}'>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-yellow-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62" height="62"
                                    viewbox="0 0 62 62">
                                    <path
                                        d="M60,1H16a3,3,0,0,0-3,3V21.082A8,8,0,0,0,9,28a11.95,11.95,0,0,0,4.054,8.969A9.011,9.011,0,0,0,18,44.051v2.158l-6.978,1.642A12.948,12.948,0,0,0,1,60.5V63H43V60.5A12.943,12.943,0,0,0,36.065,49H49v9a5,5,0,0,0,10,0V49h1a3,3,0,0,0,3-3V4A3,3,0,0,0,60,1ZM16,3H60a1,1,0,0,1,1,1V9H15V4A1,1,0,0,1,16,3ZM11,28a6.006,6.006,0,0,1,6-6h3.544a8.034,8.034,0,0,0,5-1.753l2.192-1.754A8.789,8.789,0,0,1,29,22c0,1.491-1.717,3-5,3v2c3.912,0,6.091-1.715,6.768-3.651A6.023,6.023,0,0,1,33,28a9.958,9.958,0,0,1-2,5.987V31.515a3.517,3.517,0,0,0-4.822-3.264,11.2,11.2,0,0,1-8.358,0A3.515,3.515,0,0,0,13,31.516v2.472A9.963,9.963,0,0,1,11,28Zm4,8V31.516a1.517,1.517,0,0,1,2.079-1.408,13.186,13.186,0,0,0,9.843,0A1.516,1.516,0,0,1,29,31.516V36a7,7,0,0,1-14,0ZM25.482,48.141l.376.088-.622,5.593-1.977-1.977ZM22,45a8.971,8.971,0,0,0,2-.232v1.955l-2,3.333-2-3.333V44.768A8.971,8.971,0,0,0,22,45Zm-3.482,3.141,2.223,3.705-1.977,1.977-.622-5.593ZM41,60.5V61H35V57H33v4H11V57H9v4H3v-.5A10.958,10.958,0,0,1,11.48,49.8l4.7-1.106,1.054,9.488L22,53.414l4.764,4.764,1.054-9.488,4.7,1.106A10.959,10.959,0,0,1,41,60.5ZM57,37V53H55V37Zm-5.132-2L54,31.8,56.132,35ZM51,37h2V53H51Zm3,24a3,3,0,0,1-3-3V55h6v3A3,3,0,0,1,54,61Zm6-14H59V35.7l-5-7.5-5,7.5V47H29.366L26,46.208V44.05a9.013,9.013,0,0,0,4.946-7.082A11.946,11.946,0,0,0,35,28a8.027,8.027,0,0,0-4.1-6.965,15.056,15.056,0,0,0-2.063-4.589l-.6-.908-3.934,3.148A6.027,6.027,0,0,1,20.544,20H17a7.953,7.953,0,0,0-2,.263V11H61V46a1,1,0,0,1-1,1ZM21,57h2v2H21ZM19,7H17V5h2Zm4,0H21V5h2Zm4,0H25V5h2Zm-6,6h2v2H21Zm4,0h2v2H25Zm-8,0h2v2H17ZM37,27H59V13H37Zm2-12H57V25H39Zm2,2H55v2H41Zm0,4H55v2H41Zm-4,8H47v2H37Zm0,4H47v2H37Zm-4,4H47v2H33Zm0,4H43v2H33Zm12,0h2v2H45Z"
                                        transform="translate(-1 -1)" fill="#F55C6D"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">
                            <span>Stratégie et plan de communication</span>
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="12" height="32"
                                viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Nous mettons en place, tous les moyens possibles pour atteindre notre cible en élaborant un plan de communication sur mesure, et la stratégie adéquate.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="relative mb-30 pt-45 pr-35 pb-35 pl-40 rounded-10 icon-box-bg-color transition-all bg-blue-100">
                    <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default iconbox-heading-arrow-onhover iconbox-contents-show-onhover"
                        data-slideelement-onhover="true"
                        data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3" ,  "hiddenElement":  ".btn" ,  "alignMid":  true, "triggerElement":  ".icon-box-bg-color" }'>
                        <div class="iconbox-icon-wrap">
                            <div class="mb-20 text-65 iconbox-icon-container inline-flex">
                                <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="62" height="62"
                                    viewbox="0 0 62 62">
                                    <path
                                        d="M49.3,32.5l-1.73-1,5.224-9.023,1.73,1Zm-2.316,4,1.156-2-1.73-1-1.156,2ZM16,11a5,5,0,1,1-5-5A5.006,5.006,0,0,1,16,11Zm-2,0a3,3,0,1,0-3,3A3,3,0,0,0,14,11Zm37,3v1H61a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2h-.424l-1.158,2H60a3,3,0,0,1,3,3V60a3,3,0,0,1-3,3H4a3,3,0,0,1-3-3V26a3,3,0,0,1,3-3H32.582l-1.158-2H31a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H41V13a1,1,0,0,0-1-1H21v1.716l-1.617.551c-.046.117-.095.233-.146.35l.755,1.534-3.84,3.841-1.535-.755c-.116.052-.232.1-.35.146L13.716,21H8.284l-.551-1.617c-.117-.046-.233-.095-.35-.146l-1.535.755-3.84-3.841.755-1.534c-.052-.116-.1-.233-.146-.35L1,13.716V8.284l1.617-.551c.046-.116.1-.233.147-.349L2.009,5.85l3.84-3.841,1.535.755c.116-.052.232-.1.349-.147L8.284,1h5.432l.551,1.617c.117.046.233.1.35.146l1.535-.755,3.84,3.841-.755,1.534c.052.116.1.233.146.35L21,8.284V10H40a3,3,0,0,1,3,3v2h2V6.816a3,3,0,1,1,2,0V15h2V14a3,3,0,0,1,3-3h6a1,1,0,0,0,1-1V8.816a3,3,0,1,1,2,0V10a3,3,0,0,1-3,3H52a1,1,0,0,0-1,1Zm8-8a1,1,0,1,0,1-1A1,1,0,0,0,59,6ZM45,4a1,1,0,1,0,1-1A1,1,0,0,0,45,4ZM19,9.716l-1.19-.4-.155-.476a7.039,7.039,0,0,0-.419-1.006l-.228-.446.558-1.133L15.75,4.434l-1.133.558-.447-.228a7.044,7.044,0,0,0-1-.42l-.477-.154L12.284,3H9.716l-.4,1.19-.476.155a6.93,6.93,0,0,0-1,.42l-.447.228L6.251,4.435,4.435,6.251l.558,1.133-.228.446a6.98,6.98,0,0,0-.419,1l-.156.476L3,9.716v2.568l1.19.4.155.476a7.039,7.039,0,0,0,.419,1.006l.228.446L4.434,15.75,6.25,17.566l1.133-.558.447.228a7.043,7.043,0,0,0,1,.42l.476.155L9.716,19h2.568l.4-1.19.476-.155a6.93,6.93,0,0,0,1-.42l.447-.228,1.133.558,1.816-1.816-.558-1.133.228-.446a6.991,6.991,0,0,0,.419-1.006l.155-.476,1.191-.4ZM3,26v5H37.213l-3.474-6H4a1,1,0,0,0-1,1ZM61,60V33H53.629L50,39.269v5.409L44.192,47H42V39.269L38.371,33H3V60a1,1,0,0,0,1,1H60A1,1,0,0,0,61,60ZM44,40v4.923l4-1.6V40ZM58.261,25l-3.474,6H61V26a1,1,0,0,0-1-1Zm.005-4H33.734l9.842,17h4.847ZM61,17H31v2H61ZM7,27H5v2H7Zm4,0H9v2h2Zm4,0H13v2h2ZM5,35H33V51H5ZM7,49H31V37H7ZM5,53h8v6H5Zm2,4h4V55H7Zm8-4h8v6H15Zm2,4h4V55H17Zm8-4h8v6H25Zm2,4h4V55H27Zm10-8H35v2h2Zm2,2H59V49H39Zm-4,4H59V53H35Zm0,4H59V57H35Z"
                                        transform="translate(-1 -1)" fill="#0056be"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="lqd-iconbox-heading mb-0/7em text-24">Campagne médiatique <svg class="inline-block"
                                xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewbox="0 0 12 32">
                                <path fill="currentColor"
                                    d="M8.375 16L.437 8.062C-.125 7.5-.125 6.5.438 5.938s1.563-.563 2.126 0l9 9c.562.562.624 1.5.062 2.062l-9.063 9.063c-.312.312-.687.437-1.062.437s-.75-.125-1.063-.438c-.562-.562-.562-1.562 0-2.125z">
                                </path>
                            </svg>
                        </h3>
                        <div class="contents">
                            <p class="text-16">
                                Le monde d'aujourd'hui étant devenu très médiatique, nous assurons selon le profil du client, une communication médiatique et utilisant tous les supports possibles afin d'assurer une présence digitale du client mais aussi hors médias.
                            </p>
                            <a href="./page-company-services.html"
                                class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-hover-txt-liquid-x-alt btn-icon-right btn-hover-swp btn-has-label">
                                <span class="btn-txt" data-text="Explore Landing" data-transition-delay="true"
                                    data-delay-options='{"elements":  ".lqd-chars" ,  "delayType":  "animation" ,  "startDelay":  0, "delayBetween":  32.5, "reverse":  true}'
                                    data-split-text="true" data-split-options='{"type":  "chars, words"}'>Explore
                                    Landing</span>
                                <span class="btn-icon">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                                <span class="btn-icon mr-10">
                                    <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!--Portfolios -->
<section class="lqd-section case-studies py-100" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-xl-6">
                <div class="w-full flex flex-col items-start lg:items-center lg:text-center ca-initvalues-applied lqd-animations-done" data-custom-animations="true" data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;delay&quot; : 100, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;35px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                    <div class="ld-fancy-heading relative w-auto mb-0/65em bg-orange-100 rounded-100 animation-element lqd-unit-animation-done" style="">
                        <h6 class="ld-fh-element relative lowercase m-0 py-10 px-20">Projets</h6>
                    </div>
                    <div class="ld-fancy-heading relative">
                        <h2 class="mb-0/75em ld-fh-element relative lqd-highlight-classic lqd-highlight-grow-left lqd-highlight-reset-onhover is-in-view" data-inview="true" data-transition-delay="true" data-delay-options="{&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">
                            <span>Projets</span>
                            <mark class="lqd-highlight">
                                <span class="lqd-highlight-txt">recents</span>
                                <span class="lqd-highlight-inner" style="transition-delay: 0ms;"></span>
                            </mark>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col col-12 ca-initvalues-applied lqd-animations-done" data-custom-animations="true" data-ca-options="{&quot;animationTarget&quot;: &quot;.lqd-pf-grid&quot;, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;y&quot;: &quot;-55px&quot;, &quot;rotationX&quot; : 25} , &quot;animations&quot;: {&quot;y&quot;: &quot;0px&quot;, &quot;rotationX&quot; : 0}}">
                <div class="lqd-pf-grid lqd-unit-animation-done" style="">
                    <div class="liquid-filter-items items-center justify-between mb-50">
                        <div class="liquid-filter-items-inner flex-grow-1">
                            <span class="liquid-filter-items-label">Filter</span>
                            <ul class="filter-list filter-list-inline items-center text-0/8em md:hidden" id="lqd-pf-filter-case-studies">
                                <li class="active" data-filter="*"><span>All</span></li>
                                <li data-filter=".branding" class=""><span>Branding</span></li>
                                <li data-filter=".custom-print" class=""><span>Custom Print</span></li>
                                <li data-filter=".digital-design" class=""><span>Digital Design</span></li>
                                <li data-filter=".ecommerce" class=""><span>Ecommerce</span></li>
                                <li data-filter=".masonry" class=""><span>Masonry</span></li>
                                <li data-filter=".portfolio-single" class=""><span>Portfolio Single</span></li>
                            </ul>
                            <div class="lqd-filter-dropdown hidden md:block" data-form-options="{ &quot;dropdownAppendTo&quot;:  &quot;self&quot; }">
                                <select name="lqd-filter-dropdown-lqd-pf-filter-case-studies" id="lqd-filter-dropdown-lqd-pf-filter-case-studies" style="display: none;">
                                    <option selected="" data-filter="*" value="*">All</option>
                                    <option data-filter=".branding" value=".branding">Branding</option>
                                    <option data-filter=".custom-print" value=".custom-print">Custom Print</option>
                                    <option data-filter=".digital-design" value=".digital-design">Digital Design</option>
                                    <option data-filter=".ecommerce" value=".ecommerce">Ecommerce</option>
                                    <option data-filter=".masonry" value=".masonry">Masonry</option>
                                    <option data-filter=".portfolio-single" value=".portfolio-single">Portfolio Single</option>
                                </select><div class="lqd-select-dropdown"><div class="ui-selectmenu-menu ui-front"><ul aria-hidden="true" aria-labelledby="lqd-filter-dropdown-lqd-pf-filter-case-studies-button" id="lqd-filter-dropdown-lqd-pf-filter-case-studies-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul></div></div><span tabindex="0" id="lqd-filter-dropdown-lqd-pf-filter-case-studies-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="lqd-filter-dropdown-lqd-pf-filter-case-studies-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">All</span></span>
                            </div>
                            <a href="./page-modern-agency-projects.html" class="btn font-bold text-14 uppercase tracking-0/5 whitespace-nowrap btn-naked text-primary hover:text-primary btn-icon-shaped btn-has-label" target="_blank">
                                <span class="btn-txt" data-text="See More">See More</span>
                            </a>
                        </div>
                    </div>
                    <div class="lqd-pf-row row flex flex-wrap -mx-25" data-liquid-masonry="true" data-masonry-options="{&quot;filtersID&quot;: &quot;#lqd-pf-filter-case-studies&quot;}" style="position: relative; height: 892.784px;">
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item digital-design ecommerce portfolio-single" style="position: absolute; left: 0px; top: 0px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-digital-design liquid-portfolio-category-ecommerce liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="460" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">Nexa Mobile</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Digital Design</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item ecommerce masonry portfolio-single" style="position: absolute; left: 390px; top: 0px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="1000" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">Aliens do 3D Automobile</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Ecommerce</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item branding custom-print masonry portfolio-single" style="position: absolute; left: 780px; top: 0px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="460" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">Photo Retouching</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Branding</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item branding digital-design masonry portfolio-single" style="position: absolute; left: 0px; top: 318px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-branding liquid-portfolio-category-digital-design liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="1000" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">Kontrast</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Branding</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item custom-print ecommerce masonry portfolio-single" style="position: absolute; left: 780px; top: 318px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-ecommerce liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="1000" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">The Portraits</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Custom Print</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                        <div class="px-25 py-0 lqd-pf-column col-lg-4 col-sm-6 col-12 masonry-item custom-print masonry portfolio-single" style="position: absolute; left: 390px; top: 573px;">
                            <article class="lqd-pf-item lqd-pf-item-style-2 lqd-pf-overlay-bg-scale lqd-pf-text-custom pf-details-h-str liquid-portfolio type-liquid-portfolio status-publish format-standard has-post-thumbnail hentry liquid-portfolio-category-custom-print liquid-portfolio-category-masonry liquid-portfolio-category-portfolio-single">
                                <div class="lqd-pf-item-inner">
                                    <div class="lqd-pf-img mb-1em relative rounded-6 overflow-hidden">
                                        <figure>
                                            <figure class="w-full">
                                                <img width="720" height="462" src="{{ asset('assets/images/slides/slide4.jpg') }}" class="w-full" alt="portfilio">
                                            </figure>
                                        </figure>
                                        <span class="lqd-pf-overlay-bg lqd-overlay flex items-center justify-center text-white bg-transparent" style="background-image: linear-gradient(130deg, rgba(51, 106, 234, 0.87) 0%, rgb(255, 85, 56) 100%);">
                                            <i class="lqd-icn-ess icon-md-arrow-forward"></i>
                                        </span>
                                    </div>
                                    <div class="lqd-pf-details">
                                        <h5 class="lqd-pf-title mt-0 mb-0/2em">Artboard Studio</h5>
                                        <ul class="reset-ul inline-nav lqd-pf-cat inline-flex relative z-2">
                                            <li>
                                                <a href="#">Custom Print</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./page-modern-agency-projects.html" class="lqd-overlay flex lqd-pf-overlay-link lqd-cc-label-trigger" target="_blank"></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End portfolio -->

<!-- Start Team -->
<section class="lqd-section team pt-30 pb-130" id="team" data-custom-animations="true"
    data-ca-options='{"animationTarget": ".animation-element, h2, .btn", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 45, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
    <div class="container">
        <div class="row items-center justify-between">
            <div class="col col-12 col-md-12 module-title sm:py-0">
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element inline-block relative lqd-highlight-grow-bottom m-0" data-inview="true"
                        data-transition-delay="true" data-delay-options='{"delayType": "transition"}'> Expert <mark
                            class="lqd-highlight">
                            <span class="lqd-highlight-txt">Team</span>
                            <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                        </mark>
                    </h2>
                </div>
            </div>
            {{-- <div class="col col-12 col-md-6 text-end sm:text-start module-btn">
                <a href="#"
                    class="btn btn-naked btn-icon-right btn-hover-swp tracking-1/5 whitespace-nowrap leading-0/8em font-bold uppercase text-green-900"
                    target="_blank" rel="nofollow">
                    <span class="btn-txt" data-text="Explore Advertising">Explore Advertising</span>
                    <span class="btn-icon">
                        <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward"></i>
                    </span>
                    <span class="btn-icon mr-10">
                        <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward"></i>
                    </span>
                </a>
            </div> --}}
            <div class="col col-12 col-xl-3 animation-element">
                <div class="lqd-tm relative lqd-tm-style-2 module-1">
                    <div class="lqd-tm-img">
                        <figure class="m-0">
                            <img class="w-full" width="564" height="712"
                                src="{{ asset('assets/newimg/22.jpg') }}" alt="Erik Genie">
                        </figure>
                    </div>
                    <div class="lqd-tm-details pb-1em relative" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":  "inview" ,  "animationTarget":  "h3, p" ,  "duration":  1200,  "delay":  120,   "startDelay":  450,  "initValues":  { "translateY":  30,  "opacity":  0 } ,  "animations":  { "translateY":  0,  "opacity":  1 }}'>
                        <svg width="240.72" height="219.539" viewBox="0 0 240.72 219.539">
                            <defs>
                                <linearGradient id="grandient-path-1" x1="0%" x2="100%" y1="6.867%" y2="100%">
                                    <stop offset="0%" stop-color="#F8F9FFE6"></stop>
                                    <stop offset="100%" stop-color="#F8F9FF"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#grandient-path-1)"
                                d="M246.434, 215.222c-34.945, 52.734-119.407, 86.81-177.044, 55.4S1.026, 143.131, 42.221, 94.4C117.052, 5.887, 306.8, 124.134, 246.434, 215.222Z"
                                transform="translate(-17.385 -63.129)"></path>
                        </svg>
                        <h3 class="mt-0 mb-0/35em text-blue-700">Claudia Aria</h3>
                        <p class="mt-0 mb-0  text-blue-200">Senior Designer</p>
                    </div>
                    <a class="lqd-overlay flex leading-1/4em fresco" href="{{ asset('assets/newimg/22.jpg') }}"
                        data-fresco-group="team"></a>
                </div>
            </div>
            <div class="col col-12 col-xl-3 offset-xl-1 animation-element">
                <div class="lqd-tm relative lqd-tm-style-2 module-2">
                    <div class="lqd-tm-img">
                        <figure class="m-0">
                            <img class="w-full" width="564" height="712"
                                src="{{ asset('assets/newimg/23.jpg') }}" alt="Lena Meki">
                        </figure>
                    </div>
                    <div class="lqd-tm-details pb-1em relative" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":  "inview" ,  "animationTarget":  "h3, p" ,  "duration":  1200,  "delay":  120,   "startDelay":  450,  "initValues":  { "translateY":  30,  "opacity":  0 } ,  "animations":  { "translateY":  0,  "opacity":  1 }}'>
                        <svg width="240.72" height="219.539" viewBox="0 0 240.72 219.539">
                            <defs>
                                <linearGradient id="grandient-path-2" x1="0%" x2="100%" y1="6.867%" y2="100%">
                                    <stop offset="0%" stop-color="#F8F9FFE6"></stop>
                                    <stop offset="100%" stop-color="#F8F9FF"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#grandient-path-2)"
                                d="M246.434, 215.222c-34.945, 52.734-119.407, 86.81-177.044, 55.4S1.026, 143.131, 42.221, 94.4C117.052, 5.887, 306.8, 124.134, 246.434, 215.222Z"
                                transform="translate(-17.385 -63.129)"></path>
                        </svg>
                        <h3 class="mt-0 mb-0/35em text-blue-700">Lena Meki</h3>
                        <p class="mt-0 mb-0 text-blue-200">Consultation</p>
                    </div>
                    <a class="lqd-overlay flex leading-1/4em fresco" href="{{ asset('assets/newimg/23.jpg') }}"
                        data-fresco-group="team"></a>
                </div>
            </div>
            <div class="col col-12 col-xl-3 offset-xl-1 animation-element">
                <div class="lqd-tm relative lqd-tm-style-2 module-3">
                    <div class="lqd-tm-img">
                        <figure class="m-0">
                            <img class="w-full" width="560" height="712"
                                src="{{ asset('assets/newimg/30.jpg') }}" alt="Claudia Aria">
                        </figure>
                    </div>
                    <div class="lqd-tm-details pb-1em relative" data-custom-animations="true"
                        data-ca-options='{"triggerHandler":  "inview" ,  "animationTarget":  "h3, p" ,  "duration":  1200,  "delay":  120,   "startDelay":  450,  "initValues":  { "translateY":  30,  "opacity":  0 } ,  "animations":  { "translateY":  0,  "opacity":  1 }}'>
                        <svg width="240.72" height="219.539" viewBox="0 0 240.72 219.539">
                            <defs>
                                <linearGradient id="grandient-path-3" x1="0%" x2="100%" y1="6.867%" y2="100%">
                                    <stop offset="0%" stop-color="#F8F9FFE6"></stop>
                                    <stop offset="100%" stop-color="#F8F9FF"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#grandient-path-3)"
                                d="M246.434, 215.222c-34.945, 52.734-119.407, 86.81-177.044, 55.4S1.026, 143.131, 42.221, 94.4C117.052, 5.887, 306.8, 124.134, 246.434, 215.222Z"
                                transform="translate(-17.385 -63.129)"></path>
                        </svg>
                        <h3 class="mt-0 mb-0/35em text-blue-700">Erik Genie</h3>
                        <p class="mt-0 mb-0 text-blue-200">Senior Developer</p>
                    </div>
                    <a class="lqd-overlay flex leading-1/4em fresco" href="{{ asset('assets/images/slides/slide4.jpg') }}"
                        data-fresco-group="team"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team -->

<!-- Start Testimonial -->
<section class="lqd-section testimonial pt-170 pb-85 bg-slate-100 transition-all" id="testimonial">
    <div class="lqd-shape lqd-shape-top" data-negative="false">
        <svg class="lqd-custom-shape left-0 rotate-180" preserveaspectratio="none" viewbox="0 0 1440 150">
            <path class="lqd-shape-fill"
                d="M 0 26.1978 C 275.76 83.8152 430.707 65.0509 716.279 25.6386 C 930.422 -3.86123 1210.32 -3.98357 1439 9.18045 C 2072.34 45.9691 2201.93 62.4429 2560 26.198 V 172.199 L 0 172.199 V 26.1978 Z"
                fill="#fff">
                <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s"
                    values="M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z; M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z; M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z; M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z">
                </animate>
            </path>
        </svg>
    </div>
    <div class="container">
        <div class="row items-center content-center">
            <div class="col col-12 col-xl-6 p-15">
                <div class="image-container flex justify-center items-center">
                    <div class="lqd-imggrp-single text-center block relative perspective m-auto w-65percent lg:w-full"
                        data-hover3d="true">
                        <div class="lqd-imggrp-img-container inline-flex relative transform-style-3d">
                            <figure class="w-full relative" data-stacking-factor="1">
                                <img width="750" height="750"
                                    src="{{asset('assets/newimg/21.JPG')}}" alt="Testimonial">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-6 p-15">
                <div class="title-container">
                    <div class="ld-fancy-heading relative">
                        <h6
                            class="ld-fh-element mb-0/5em inline-block relative text-15 uppercase font-bold tracking-2/5 text-green-900">
                            Real stories</h6>
                    </div>
                </div>
                <div
                    class="carousel-container relative carousel-nav-left carousel-nav-lg carousel-nav-shaped carousel-nav-solid carousel-nav-circle carousel-nav-left carousel-dots-mobile-outside carousel-dots-mobile-left">
                    <div class="carousel-items relative -mx-30 lg:mx-0"
                        data-lqd-flickity='{"prevNextButtons": true, "groupCells": true, "navArrow": "6", "cellAlign": "left", "buttonsAppendTo": "self", "addSlideNumbersToArrows": false, "pageDots": false}'>
                        <div class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <h5 class="mt-1em">
                                        <span class="text-22 font-normal text-nightblue leading-35">“I think Hub is the
                                            best theme I ever seen this year. Amazing design, easy to customize and a
                                            design quality superlative.”</span>
                                    </h5>
                                    <h3 class="mb-0 mt-1em">
                                        <span class="text-14 text-nightblue">FELICIA MARCI</span>
                                    </h3>
                                    <h6 class="mt-1em">
                                        <span class="text-12 text-blue-200 m-0">TWITTER CEO</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <h5 class="mt-1em">
                                        <span class="text-22 font-normal text-nightblue leading-35">“I think Hub is the
                                            best theme I ever seen this year. Amazing design, easy to customize and a
                                            design quality superlative.”</span>
                                    </h5>
                                    <h3 class="mb-0 mt-1em">
                                        <span class="text-14 text-nightblue">FELICIA MARCI</span>
                                    </h3>
                                    <h6 class="mt-1em">
                                        <span class="text-12 text-blue-200 m-0">TWITTER CEO</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item flex flex-col justify-center w-full px-30 lg:px-0">
                            <div class="carousel-item-inner relative w-full">
                                <div class="carousel-item-content relative w-full">
                                    <h5 class="mt-1em">
                                        <span class="text-22 font-normal text-nightblue leading-35">“I think Hub is the
                                            best theme I ever seen this year. Amazing design, easy to customize and a
                                            design quality superlative.”</span>
                                    </h5>
                                    <h3 class="mb-0 mt-1em">
                                        <span class="text-14 text-nightblue">FELICIA MARCI</span>
                                    </h3>
                                    <h6 class="mt-1em">
                                        <span class="text-12 text-blue-200 m-0">TWITTER CEO</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial -->

<!-- Start Clients -->
<section class="lqd-section clients py-45 bg-slate-100 border-top border-bottom border-black-10 transition-all"
    data-custom-animations="true"
    data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"scaleX" : 0.2, "scaleY" : 0.2, "opacity" : 0} , "animations": {"scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
    <div class="container">
        <div class="row items-center text-center">
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-dropcam.svg" alt="Dropcam">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-amazon.svg" alt="Amazon">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-cisco.svg" alt="Cisco">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-amd-logo.svg" alt="AMD">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div
                    class="lqd-imggrp-single inline-flex relative items-center justify-center module-img animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-logitech.svg" alt="Logitech">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2 p-0">
                <div class="lqd-imggrp-single inline-flex relative items-center justify-center animation-element">
                    <figure class="w-full relative">
                        <img src="./assets/images/demo/digital-hub/client-Spotify.svg" alt="Spotify">
                        <a href="#" target="_blank" rel="nofollow"
                            class="lqd-overlay flex lqd-fi-overlay-link leading-1/4em"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients -->

<!-- Start Contact -->
<section class="lqd-section contact pt-75 pb-100 bg-slate-100 transition-all" id="contact">
    <div class="lqd-shape lqd-shape-bottom" data-negative="true">
        <svg class="h-80 left-0" viewbox="0 0 1000 100" preserveaspectratio="none">
            <path class="lqd-shape-fill"
                d="M790.5, 93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2, 1.1-22.6, 1.4-50.1, 7.4c-27.2, 6.3-58.2, 16.6-79.4, 24.7c-41.3, 15.9-94.9, 21.9-134, 22.6C72, 58.2, 0, 25.8, 0, 25.8V100h1000V65.3 c0, 0-51.5, 19.4-106.2, 25.7C839.5, 97, 814.1, 95.2, 790.5, 93.1z"
                fill="#fff"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row items-center">
            <div class="col col-12 col-xl-6 p-0" data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element,  .animation-element .split-inner", "ease": "power4.out", "initValues": {"y": "50px"} , "animations": {"y": "0px"}}'>
                <div class="w-full flex items-center">
                    <div class="w-70percent flex flex-col items-start p-10 lg:w-full lg:text-center">
                        <div class="ld-fancy-heading relative mask-text lg:w-full animation-element">
                            <h2 class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-46"
                                data-inview="true" data-transition-delay="true"
                                data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                data-split-text="false" data-split-options='{"type": "lines"}'>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">Any questions à </span>
                                    <span class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"></span>
                                </mark>
                                <mark class="lqd-highlight">
                                    <span class="lqd-highlight-txt">Projects?</span>
                                    <span class="lqd-highlight-inner bg-slate-200 bottom-5 left-0"></span>
                                </mark>
                            </h2>
                        </div>
                        <div class="ld-fancy-heading relative mask-text lg:w-full animation-element">
                            <p class="ld-fh-element inline-block relative lqd-split-lines mb-0/5em text-blue-700"
                                data-split-text="true" data-split-options='{"type": "lines"}'> Digital experiences, and
                                print materials that communicate marketing goals.</p>
                        </div>
                    </div>
                    <div class="w-30percent flex items-center p-10 lg:hidden" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "startDelay" : 350, "ease": "power4.out", "initValues": {"x": "-30px", "opacity" : 0} , "animations": {"x": "0px", "opacity" : 1}}'>
                        <div class="-mr-15percent -mb-40percent -ml-15percent animation-element">
                            <div class="lqd-imggrp-single block relative perspective" data-hover3d="true"
                                data-float="ease">
                                <div
                                    class="lqd-imggrp-img-container inline-flex relative items-center justify-center transform-style-3d">
                                    <figure class="w-full relative" data-stacking-factor="1">
                                        <img width="308" height="552"
                                            src="./assets/images/demo/digital-hub/shape-person.png" alt="consultaition">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-6 p-10" data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element,  p,  h4", "startDelay" : 700, "ease": "power4.out", "initValues": {"y": "30px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
                <div class="w-full flex flex-wrap bg-white shadow-md transition-all">
                    <div
                        class="w-50percent flex flex-col border-right border-black-10 py-30 pr-30 pl-60 sm:w-full module-white animation-element">
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative m-0 text-blue-200">Project Offers</p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <h4 class="ld-fh-element inline-block relative m-0 text-20 text-blue-700">info.liquid.com
                            </h4>
                        </div>
                    </div>
                    <div class="w-50percent flex flex-col py-30 pr-30 pl-60 sm:w-full module-white animation-element">
                        <div class="ld-fancy-heading relative">
                            <p class="ld-fh-element inline-block relative m-0 text-blue-200">Consultation</p>
                        </div>
                        <div class="ld-fancy-heading relative">
                            <h4 class="ld-fh-element inline-block relative m-0 text-20 text-blue-700">+ 1 223 38 87</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->
@endsection
