<!-- NAVBAR -->
<header class="header">
    <div class="header-div">
        <div class="toolbar">
            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contacts-toolbar">
                            <ul class="d-flex ul-left">
                                <li>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                    </svg>
                                    Contact@thebestgroup.org
                                </li>
                                <li>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                    (+243) 824859415
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="adresse-toolbar d-flex justify-content-end">
                            <ul class="d-flex ul-right">
                                <li>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                                        <path fill-rule="evenodd"
                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                    Lun - Ven: 8:00 - 16:00 / Fermé le weekend
                                </li>
                            </ul>
                            <div class="network">
                                <a href="https://web.facebook.com/TBGentreprise/" target="_blank" class="mr-3">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://instagram.com/thebestgroupdrc?igshid=q9yqj3mr3bn5" class="mr-3" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://youtube.com/channel/UC3lltuUYIdE-i_bfkLUB3UQ" class="mr-3" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg" id="navbar-example3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('accueil') }}">
                    <img src="{{ asset('assets/images/TBG-White.png') }}" alt="" width="150" class="img1">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" width="150" class="img2">
                </a>
                <div class="menu">
                    <span class="bar"></span>
                </div>
                <div class="menu_back">
                    <a href="{{ route('accueil') }}">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link  mr-4 scrollTop" id="linkbanner" href="#banner">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4 scrollTop" id="linkabout" href="#about">Qui sommes-nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4 scrollTop" id="linkservice" href="#service">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4 scrollTop" id="linkportfolio" href="#portfolios">Portfolios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mr-4 scrollTop" id="linkteam" href="#team">Team</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mr-4 scrollTop invisible" id="linkretour"
                                href="{{ route('accueil') }}">Retour à l'accueil</a>
                        </li>
                        @if($titre=='Home')
                        @if(!$event->isEmpty())
                        <div class="dropdown show">
                            <a class="btn btn-secondary nav-link mr-4 scrollTop"
                                style='border:none; background:transparent; ' href="#">
                                S'enregistrer pour
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach ($event as $e)
                                <li class="list-item">
                                    <a class="dropdown-item mr-4" href="enregistrer/{{$e->id}}">{{$e->grandtitre}}</a>
                                </li>
                                @endforeach
                            </div>
                        </div>
                    @else
                    @endif
                         @endif
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>
<!-- FIN -->
