@extends('pages.welcome',['titre'=>"portfolio - detail"])


@section('content')
{{-- <div class="titlebar bg-transparent border-bottom border-black-10" id="titlebar"
    style="background-image: linear-gradient(180deg, #fdf2f4 0%, rgb(255, 255, 255) 100%);">
    <div class="titlebar-inner pt-120 pb-85">
        <div class="container py-0 px-15">
            <div class="row justify-center -mx-15">
                <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center py-0 px-15 text-gray-600">
                    <h1 class="leading-60 text-title">Titre projet</h1>
                    <p class="leading-28">unleashing our clients’ potential by maximising the innovation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="lqd-section marketing pt-60 pb-60 detail-project">
    <div class="container">
        <div class="row items-center">
            <div class="col col-xl-5 col-12 ca-initvalues-applied lqd-animations-done" data-custom-animations="true"
                data-ca-options="{&quot;animationTarget&quot;: &quot;img&quot;, &quot;duration&quot; : 2000, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;x&quot;: &quot;-60px&quot;, &quot;rotationY&quot; : 60, &quot;opacity&quot; : 0, &quot;transformOrigin&quot;: &quot;50% 50% 0px&quot;} , &quot;animations&quot;: {&quot;x&quot;: &quot;0px&quot;, &quot;rotationY&quot; : 0, &quot;opacity&quot; : 1, &quot;transformOrigin&quot;: &quot;50% 50% 120px&quot;}}">
                <div class="carousel-container relative carousel-nav-shaped carousel-dots-mobile-inside carousel-dots-mobile-center"
                    id="img-carousel">
                    <div class="carousel-items relative -mx-15 flickity-enabled is-draggable lqd-carousel-ready"
                        data-lqd-flickity="{&quot;cellAlign&quot;: &quot;left&quot;, &quot;groupCells&quot;: false, &quot;prevNextButtons&quot;: false, &quot;pageDots&quot;: false}"
                        tabindex="0">
                        <div class="flickity-viewport pos-rel w-100 h-100 overflow-hidden"
                            style="height: 501.167px; touch-action: pan-y;">
                            <div class="flickity-slider d-flex w-100 h-100 pos-rel"
                                style="transform: translateX(0%); will-change: auto;">
                                <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15 is-selected"
                                    style="position: absolute; left: 0px; transform: translateX(0%);">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <p class=""><img class="w-full lqd-unit-animation-done"
                                                    src="{{asset('assets/images/slides/slide4.jpg')}}"
                                                    alt="Mareting" width="1040" height="1108" style=""></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15"
                                    aria-hidden="true"
                                    style="position: absolute; left: 0px; transform: translateX(100%);">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <p class=""><img class="w-full lqd-unit-animation-done"
                                                    src="{{asset('assets/images/slides/slide4.jpg')}}"
                                                    alt="Mareting" width="896" height="982" style=""></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15"
                                    aria-hidden="true"
                                    style="position: absolute; left: 0px; transform: translateX(200%);">
                                    <div class="carousel-item-inner relative w-full">
                                        <div class="carousel-item-content relative w-full">
                                            <p class=""><img class="w-full lqd-unit-animation-done"
                                                    src="{{asset('assets/images/slides/slide4.jpg')}}"
                                                    alt="Mareting" width="721" height="812" style=""></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="carousel-dots carousel-dots-to-hide img-carousel carousel-dots-mobile-inside carousel-dots-mobile-center hidden-xs hidden-sm md:hidden">
                        <ol class="flickity-page-dots">
                            <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                            <li class="dot" aria-label="Page dot 2"></li>
                            <li class="dot" aria-label="Page dot 3"></li>
                        </ol>
                    </div>
                    <div
                        class="carousel-dots-mobile carousel-dots-style4 img-carousel carousel-dots-mobile-inside carousel-dots-mobile-center">
                        <ol class="flickity-page-dots">
                            <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                            <li class="dot" aria-label="Page dot 2"></li>
                            <li class="dot" aria-label="Page dot 3"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col col-xl-7 col-12 p-0">
                <div class="module-content">
                    <div
                        class="carousel-container relative carousel-dots-mobile-outside carousel-dots-mobile-left carousel-nav-appended">
                        <div class="carousel-items relative -mx-15 flickity-enabled is-draggable lqd-carousel-ready"
                            data-lqd-flickity="{&quot;prevNextButtons&quot;: true, &quot;wrapAround&quot;: true, &quot;navArrow&quot;: &quot;6&quot;, &quot;cellAlign&quot;: &quot;left&quot;, &quot;groupCells&quot;: false, &quot;buttonsAppendTo&quot;: &quot;self&quot;, &quot;addSlideNumbersToArrows&quot;: false, &quot;pageDots&quot;: false}"
                            tabindex="0">
                            <div class="flickity-viewport pos-rel w-100 h-100 overflow-hidden"
                                style="height: 426.7px; touch-action: pan-y;">
                                <div class="flickity-slider d-flex w-100 h-100 pos-rel"
                                    style="transform: translateX(-300%);">
                                    <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15 is-selected"
                                        style="position: absolute; left: 0px; transform: translateX(300%);">
                                        <div class="carousel-item-inner relative w-full">
                                            <div class="carousel-item-content relative w-full">
                                                <div class="flex items-start content-center flex-col mt-0 mb-40 md:mb-0 ca-initvalues-applied lqd-animations-done"
                                                    data-custom-animations="true"
                                                    data-ca-options="{&quot;animationTarget&quot;: &quot;h2, h6, p, .btn&quot;, &quot;startDelay&quot; : 200, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;x&quot;: &quot;-30px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;x&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                                                    <div
                                                        class="ld-fancy-heading fancy-heading-bg relative mb-10 py-10 px-20 rounded-100 bg-orange-100">
                                                        <h6 class="ld-fh-element inline-block relative m-0 text-12 font-bold uppercase lqd-unit-animation-done"
                                                            style="">Creative Solutions</h6>
                                                    </div>
                                                    <div class="ld-fancy-heading relative">
                                                        <h2 class="ld-fh-element inline-block relative mb-0/5em text-52 is-in-view lqd-unit-animation-done"
                                                            data-inview="true" data-transition-delay="true"
                                                            data-delay-options="{&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}"
                                                            style="">Marketing at<br><mark class="lqd-highlight"><span
                                                                    class="lqd-highlight-txt">Facebook</span> <span
                                                                    class="lqd-highlight-inner bg-green-200 bottom-0 left-0"
                                                                    style="transition-delay: 0ms;"></span></mark></h2>
                                                    </div>
                                                    <div class="ld-fancy-heading relative">
                                                        <p class="ld-fh-element inline-block relative mb-1/5em text-20 leading-1/7em lqd-unit-animation-done"
                                                            style="">As a leading digital agency in Paris, we look to
                                                            engage with our clients beyond the conventional design and
                                                            development agency relationship, becoming a partner to the
                                                            people and companies we work with.</p>
                                                    </div><a href="./page-company-what-we-do.html"
                                                        class="btn btn-naked btn-icon-right btn-hover-swp whitespace-nowrap font-bold uppercase tracking-1/5 leading-0/8em text-green-900 lqd-unit-animation-done"
                                                        style=""><span class="btn-txt"
                                                            data-text="Explore Advertisinng">Explore Advertisinng</span>
                                                        <span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                        </span><span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15"
                                        aria-hidden="true"
                                        style="position: absolute; left: 0px; transform: translateX(100%);">
                                        <div class="carousel-item-inner relative w-full">
                                            <div class="carousel-item-content relative w-full">
                                                <div class="flex items-start content-center flex-col mt-0 mb-40 md:mb-0 ca-initvalues-applied lqd-animations-done"
                                                    data-custom-animations="true"
                                                    data-ca-options="{&quot;animationTarget&quot;: &quot;.animation-element&quot;, &quot;startDelay&quot; : 200, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;x&quot;: &quot;-30px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;x&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                                                    <div class="ld-fancy-heading fancy-heading-bg relative mb-10 py-10 px-20 rounded-100 bg-orange-100 animation-element lqd-unit-animation-done"
                                                        style="">
                                                        <h6
                                                            class="ld-fh-element inline-block relative m-0 text-12 font-bold uppercase">
                                                            Creative Solutions</h6>
                                                    </div>
                                                    <div class="ld-fancy-heading relative animation-element lqd-unit-animation-done"
                                                        style="">
                                                        <h2 class="ld-fh-element inline-block relative mb-0/5em text-52"
                                                            data-inview="true" data-transition-delay="true"
                                                            data-delay-options="{&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">
                                                            Marketing at<br><mark class="lqd-highlight"><span
                                                                    class="lqd-highlight-txt">Facebook</span> <span
                                                                    class="lqd-highlight-inner bg-green-200 bottom-0 left-0"
                                                                    style="transition-delay: 0ms;"></span></mark></h2>
                                                    </div>
                                                    <div class="ld-fancy-heading relative animation-element lqd-unit-animation-done"
                                                        style="">
                                                        <p
                                                            class="ld-fh-element inline-block relative mb-1/5em text-20 leading-1/7em">
                                                            As a leading digital agency in Paris, we look to engage with
                                                            our clients beyond the conventional design and development
                                                            agency relationship, becoming a partner to the people and
                                                            companies we work with.</p>
                                                    </div><a href="./page-company-what-we-do.html"
                                                        class="btn btn-naked btn-icon-right btn-hover-swp whitespace-nowrap font-bold uppercase tracking-1/5 leading-0/8em text-green-900 animation-element lqd-unit-animation-done"
                                                        style=""><span class="btn-txt"
                                                            data-text="Explore Advertisinng">Explore Advertisinng</span>
                                                        <span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                        </span><span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item flex flex-col justify-center has-one-child w-full px-15"
                                        aria-hidden="true"
                                        style="position: absolute; left: 0px; transform: translateX(200%);">
                                        <div class="carousel-item-inner relative w-full">
                                            <div class="carousel-item-content relative w-full">
                                                <div class="flex items-start content-center flex-col mt-0 mb-40 md:mb-0"
                                                    data-custom-animations="true"
                                                    data-ca-options="{&quot;animationTarget&quot;: &quot;h2, h6, p, .btn&quot;, &quot;startDelay&quot; : 200, &quot;ease&quot;: &quot;power4.out&quot;, &quot;initValues&quot;: {&quot;x&quot;: &quot;-30px&quot;, &quot;opacity&quot; : 0} , &quot;animations&quot;: {&quot;x&quot;: &quot;0px&quot;, &quot;opacity&quot; : 1}}">
                                                    <div
                                                        class="ld-fancy-heading fancy-heading-bg relative mb-10 py-10 px-20 rounded-100 bg-orange-100">
                                                        <h6
                                                            class="ld-fh-element inline-block relative m-0 text-12 font-bold uppercase">
                                                            Creative Solutions</h6>
                                                    </div>
                                                    <div class="ld-fancy-heading relative">
                                                        <h2 class="ld-fh-element inline-block relative mb-0/5em text-52"
                                                            data-inview="true" data-transition-delay="true"
                                                            data-delay-options="{&quot;elements&quot;: &quot;.lqd-highlight-inner&quot;, &quot;delayType&quot;: &quot;transition&quot;}">
                                                            Marketing at<br><mark class="lqd-highlight"><span
                                                                    class="lqd-highlight-txt">Facebook</span> <span
                                                                    class="lqd-highlight-inner bg-green-200 bottom-0 left-0"
                                                                    style="transition-delay: 0ms;"></span></mark></h2>
                                                    </div>
                                                    <div class="ld-fancy-heading relative">
                                                        <p
                                                            class="ld-fh-element inline-block relative mb-1/5em text-20 leading-1/7em">
                                                            As a leading digital agency in Paris, we look to engage with
                                                            our clients beyond the conventional design and development
                                                            agency relationship, becoming a partner to the people and
                                                            companies we work with.</p>
                                                    </div><a href="#"
                                                        class="btn btn-naked btn-icon-right btn-hover-swp whitespace-nowrap font-bold uppercase tracking-1/5 leading-0/8em text-green-900"
                                                        target="_blank" rel="nofollow"><span class="btn-txt"
                                                            data-text="Explore Advertisinng">Explore Advertisinng</span>
                                                        <span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i>
                                                        </span><span class="btn-icon"><i aria-hidden="true"
                                                                class="lqd-icn-ess icon-md-arrow-forward"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-nav carousel-nav-appended hidden"><button
                                class="flickity-button flickity-prev-next-button previous" type="button"
                                aria-label="Previous"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="13.4"
                                    viewBox="0 0 16 13.4">
                                    <path d="M9.3,1.3,7.9,2.7,12.2,7H0V9H12.2L7.9,13.3l1.4,1.4L16,8Z"
                                        transform="translate(16 14.7) rotate(180)"></path>
                                </svg></button><button class="flickity-button flickity-prev-next-button next"
                                type="button" aria-label="Next"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="13.4" viewBox="0 0 16 13.4">
                                    <path d="M9.3,13.4,7.9,12l4.3-4.3H0v-2H12.2L7.9,1.4,9.3,0,16,6.7Z"></path>
                                </svg></button></div>
                        <div
                            class="carousel-dots carousel-dots-to-hide carousel-dots-mobile-outside carousel-dots-mobile-left hidden-xs hidden-sm md:hidden">
                            <ol class="flickity-page-dots">
                                <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                                <li class="dot" aria-label="Page dot 2"></li>
                                <li class="dot" aria-label="Page dot 3"></li>
                            </ol>
                        </div>
                        <div
                            class="carousel-dots-mobile carousel-dots-style4  carousel-dots-mobile-outside carousel-dots-mobile-left">
                            <ol class="flickity-page-dots">
                                <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                                <li class="dot" aria-label="Page dot 2"></li>
                                <li class="dot" aria-label="Page dot 3"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<!-- End portfolio --> --}}

<!-- Start main-content -->
<section class="page-title" style="background-image: url({{asset('common/newimg/p.jpg')}});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title mt-lg-5">Portfolio Details</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Portfolio</li>
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
                    <div class="project-details__img"> <img src="{{asset('common/newimg/p.jpg')}}" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="project-details__content-left">
                        <h3 class="mb-4">Here to Know About This Project</h3>
                        <p class="">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Asperiores, repellat aliquid. Est corrupti officiis dignissimos deserunt sunt minima iusto quia saepe tempora consectetur dolor deleniti voluptatum et, eos vitae pariatur molestiae odit quos enim voluptas nobis ullam voluptatem cum iste. Dolore modi, animi optio, dignissimos delectus pariatur similique harum eos. </p>
                        <p class="mb-5">Beyond more stoic this along goodness hey this this
                            wow manatee mongoose one as since a far flustered impressive manifest Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum illo ea ad, nam quisquam optio vel tempora, minus placeat, ut nisi quam quos laboriosam eos quibusdam cum atque suscipit quod dignissimos magni doloribus facere eius soluta possimus. Officiis, autem similique sequi labore aliquid corporis illo omnis voluptate optio possimus doloremque, error reiciendis delectus ex tempore, architecto eaque, inventore nihil pariatur quibusdam facere reprehenderit? Doloribus deleniti sapiente, dicta, dolorem unde deserunt quisquam. Dolore consequuntur reiciendis corporis perspiciatis quam fuga magnam molestiae minima culpa ab beatae vel itaque cumque et adipisci autem nisi qui esse in, deserunt numquam hic? Et, eligendi, assumen daEst corrupti officiis dignissimos.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="project-details__content-right">
                        <div class="project-details__details-box">
                            <div class="project-details__bg-shape"> </div>
                            <ul class="list-unstyled project-details__details-list">
                                <li>
                                    <p class="project-details__client">Date</p>
                                    <h4 class="project-details__name">10 January, 2023</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Client</p>
                                    <h4 class="project-details__name">Kodesolution Ltd</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Website</p>
                                    <h4 class="project-details__name">www.domain.com</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Location</p>
                                    <h4 class="project-details__name">New York, USA</h4>
                                </li>
                                <li>
                                    <p class="project-details__client">Value</p>
                                    <h4 class="project-details__name">$12,367</h4>
                                </li>
                                <li>
                                    <div class="project-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="features-section pb-0">
            <div class="row">

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="inner-box ">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('common/newimg/p.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-details__pagination-box">
                    <ul class="project-details__pagination list-unstyled clearfix">
                        <li class="next">
                            <div class="icon"> <a href="#" aria-label="Previous"><i class="lnr lnr-icon-arrow-left"></i></a> </div>
                            <div class="content">Previous</div>
                        </li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="count"><a href="#"></a></li>
                        <li class="previous">
                            <div class="content">Next</div>
                            <div class="icon"> <a href="#" aria-label="Previous"><i class="lnr lnr-icon-arrow-right"></i></a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->
 <!-- Projects Section Two-->
 <section class="projects-section-two pt-5" id="portfolio">
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
                                        src="{{asset('common/newimg/p.jpg')}}" alt=""></a>
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
@endsection
