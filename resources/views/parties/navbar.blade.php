{{-- <header id="site-header" class="main-header main-header-overlay" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile": true}'>
    <section class="lqd-section desktop-header md:hidden">
        <div class="container-fluid p-0">
            <div class="flex flex-wrap w-full justify-between">
                <div class="navbar-brand-plain w-15percent py-30 flex">
                    <a href="./index-digital-hub.html" class="navbar-brand flex relative p-0 leading-1/4em">
                        <span class="navbar-brand-inner post-rel">
                            <img class="logo-default" src="{{asset('assets/images/logo.png')}}" alt="Digital Hub">
                        </span>
                    </a>
                </div>
                <div class="module-primary-nav w-60percent flex justify-end lg:w-85percent">
                    <div class="navbar-collapse inline-flex lqd-submenu-cover p-0" id="main-header-collapse" aria-expanded="false" role="navigation">
                        <ul id="primary-nav" class="main-nav flex justify-center reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-default lqd-submenu-toggle-hover" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector" : ">li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                            <li class="is-active">
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#banner">
                                    Accueil
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#about">
                                    Qui sommes-nous
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#portfolio">
                                    Portfolios
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#team">
                                    Team
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="{{ route('accueil') }}#contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-25percent flex items-center justify-end lg:hidden">
                    <div class="widget-text-editor mr-15">
                        <h6 class="whitespace-nowrap mt-1em text-end">
                            <span class="text-12 opacity-70 text-blue-700 leading-1/15em tracking-0">Contact</span>
                            <br>
                            <strong>
                                <span class="text-15 text-orange-500 leading-1/15em tracking-1">(+243) 824859415</span>
                            </strong>
                        </h6>
                    </div>
                    <div class="module-btn px-0/5em">
                        <a href="#contact-modal" class="btn btn-solid btn-md text-13 font-bold tracking-1/5 leading-1/4em bg-white rounded-100 shadow-md text-blue-700 hover:text-white" data-lity="#contact-modal">
                            <span class="btn-txt" data-text="Start a project">Nos avoir</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lqd-mobile-sec relative">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
            <div class="lqd-mobile-modules-container empty"></div>
            <button type="button" class="bg-transparent border-none navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end p-0" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-toggle-options='{ "changeClassnames":  {"html":  "mobile-nav-activated"} }'>
                <span class="sr-only">Menu</span>
                <span class="bars inline-block relative z-1">
                    <span class="bars-inner flex flex-col w-full h-full">
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand flex relative leading-1/4em" href="./index-digital-hub.html">
                <span class="navbar-brand-inner">
                    <img class="logo-default" src="{{ asset('assets/images/logo.png') }}" alt="The best group">
                </span>
            </a>
        </div>
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav lqd-submenu-toggle-hover">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                        <a href="#banner" class="leading-1/4em">Accueil</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#about" class="leading-1/4em">
                           Qui somme-nous
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#services" class="leading-1/4em">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="leading-1/4em">
                            Portfolios
                        </a>
                    </li>
                    <li>
                        <a href="#team" class="leading-1/4em">
                            Team
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="leading-1/4em">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="lqd-section lqd-stickybar-wrap lqd-stickybar-left link-black link-medium pt-100 pb-25 bg-transparent pointer-events-none md:hidden">
        <div class="static w-full h-full flex items-center justify-between flex-grow-1 vertical-lr">
            <div class="w-full flex items-center flex-grow-1 justify-start p-10">
                <div class="lqd-fancy-menu lqd-menu-td-none static w-full header-module header-module-rotate pb-10 flex items-center -rotate-180">
                    <ul class="reset-ul inline-nav flex pointer-events-auto" data-lqd-interactive-color="true">
                        <li class="mb-20"><a href="#" target="_blank">EN.</a></li>
                        <li class="mb-20"><a href="#" target="_blank">FR.</a></li>
                        <li><a href="#" target="_blank">ge.</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full flex items-center justify-center flex-grow-1 p-10">
                <span class="-rotate-180 pointer-events-auto pt-70 pb-10 text-black font-medium" data-lqd-interactive-color="true">Contact@thebestgroup.org</span></div>
                <div class="w-full flex items-center flex-grow-1 justify-center p-10">
                    <div class="lqd-scrl-indc header-module header-module-rotate flex -rotate-180 pointer-events-auto" data-lqd-scroll-indicator="true">
                    <a href="#wrap" data-localscroll="true" data-lqd-interactive-color="true"><span class="lqd-scrl-indc-inner flex items-center text-inherit">
                    <span class="lqd-scrl-indc-txt">scroll</span> <span class="lqd-scrl-indc-line w-1 h-60 relative text-inherit bg-black-30"><span class="lqd-scrl-indc-el absolute -top-5 -left-5 rounded-8 inline-block w-10 h-10 bg-current-color" style="transform: translate(0px);"></span></span></span></a></div></div></div></section>
</header> --}}
<!-- Main Header-->
<header id="home" class="main-header header-style-one">
    <!-- Main box -->
    <div class="main-box">
        <div class="logo-box">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('common/newimg/logoWhite.png') }}" alt="The best group" title="The best group">
                </a>
            </div>
            <button class="ui-btn ui-btn search-btn">
                <span class="icon lnr lnr-icon-search"></span>
            </button>
        </div>

        <!--Nav Box-->
        <div class="nav-outer">
            <nav class="nav main-menu">
                <ul class="navigation">
                    <li class="current"><a href="#home">@lang("infos.main_menu.home")</a></li>
                    <li><a href="#about">@lang("infos.main_menu.about")</a></li>
                    <li><a href="#services">@lang("infos.main_menu.services")</a></li>
                    <li><a href="#portfolio">@lang("infos.main_menu.portfolio")</a></li>
                    <li><a href="#team">@lang("infos.main_menu.team")</a></li>
                    <li><a href="#contact">@lang("infos.main_menu.contact")</a></li>
                </ul>
            </nav>
        </div>
        <!-- Main Menu End-->

        <div class="outer-box">
            <a href="tel:+243824859415" class="info-btn">
                <i class="icon fa fa-phone"></i>
                <strong class="text">(+243) 824859415</strong>
            </a>

            <!-- Mobile Nav toggler -->
            <div class="mobile-nav-toggler order-2"><span class="icon lnr-icon-bars"></span></div>
            <div class="dropdown order-1">
                <button class="btn btn-secondary btn-language dropdown-toggle ms-lg-4 ms-3" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>{{  $current_locale }}</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach ($available_locales as $locale_name => $available_locale)
                    @if ($available_locale === $current_locale)
                    <li>
                        <a class="dropdown-item disabled d-flex align-items-center"
                            href="#">
                            @switch($available_locale)
                            @case('en')
                            <span class="fi fi-us me-2 align-middle"></span>
                            @break
                            @case('fr')
                            <span class="fi fi-cd me-2 align-middle"></span>
                            @break
                            @default
                            <span class="fi fi-be me-2 align-middle"></span>

                            @endswitch
                            {{ $locale_name }}
                        </a>
                    </li>
                    @else
                    <li>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ route('change_language', ['locale' => $available_locale]) }}">
                            @switch($available_locale)
                            @case('en')
                            <span class="fi fi-us me-2 align-middle"></span>
                            @break

                            @case('fr')
                            <span class="fi fi-cd me-2 align-middle"></span>
                            @break

                            @default
                            <span class="fi fi-be me-2 align-middle"></span>

                            @endswitch

                            {{ $locale_name }}
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
                {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="active"><a class="dropdown-item" href="#">Français</a></li>
                    <li><a class="dropdown-item" href="#">Anglais</a></li>
                </ul> --}}
            </div>
        </div>
    </div>


    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="index.html">
                        <img src="{{ asset('common/newimg/logoWhite.png') }}" alt="The best group"
                            title="The best group">
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Applez-nous</span>
                        <a href="tel:+243824859415">(+243) 824859415</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Ecrivez-nous</span>
                        <a href="mailto:Contact@thebestgroup.org">Contact@thebestgroup.org</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Notre horaire</span>
                        Lun - Ven: 8:00 - 16:00 / Fermé le weekend
                    </div>
                </li>
            </ul>


            <ul class="social-links">
                <li><a href="https://web.facebook.com/TBGentreprise/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://youtube.com/channel/UC3lltuUYIdE-i_bfkLUB3UQ"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://instagram.com/thebestgroupdrc?igshid=q9yqj3mr3bn5"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="index.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="{{ asset('common/newimg/logo.png') }}" alt="The best group" title="The best group">

                    </a>
                </div>

                <!--Right Col-->
                <div class="nav-outer ms-auto d-flex align-items-center">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="dropdown order-1">
                        <button class="btn btn-secondary btn-language dropdown-toggle ms-lg-5 ms-3" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>{{  $current_locale }}</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @foreach ($available_locales as $locale_name => $available_locale)
                            @if ($available_locale === $current_locale)
                            <li>
                                <a class="dropdown-item disabled d-flex align-items-center"
                                    href="#">
                                    @switch($available_locale)
                                    @case('en')
                                    <span class="fi fi-us me-2 align-middle"></span>
                                    @break
                                    @case('fr')
                                    <span class="fi fi-cd me-2 align-middle"></span>
                                    @break
                                    @default
                                    <span class="fi fi-be me-2 align-middle"></span>

                                    @endswitch
                                    {{ $locale_name }}
                                </a>
                            </li>
                            @else
                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                    @switch($available_locale)
                                    @case('en')
                                    <span class="fi fi-us me-2 align-middle"></span>
                                    @break

                                    @case('fr')
                                    <span class="fi fi-cd me-2 align-middle"></span>
                                    @break

                                    @default
                                    <span class="fi fi-be me-2 align-middle"></span>

                                    @endswitch

                                    {{ $locale_name }}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="mobile-nav-toggler order-2"><span class="icon lnr-icon-bars"></span></div>

                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->
