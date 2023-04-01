@extends('pages.welcome',['titre'=>"Home"])


@section('content')
<div data-spy="scroll" data-target="#navbar-example3" data-offset="0" class="" tabindex="0">
    <!-- SLIDER -->
    <div class="banner" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active animate__animated animate__flipInX">
                    <div class="container">
                        <div class="text-left">
                            <div class="text-sm">
                                <h5 class="animate__animated animate__fadeInDown animate__delay-1s">The Best Group
                                    <small style="font-size: 14px;">Company</small> <small
                                        style="font-size: 14px;">Communication</small></h5>
                            </div>
                            <div class="text-lg">
                                <h3 class="animate__animated animate__lightSpeedInLeft animate__delay-2s">We equip your
                                </h3>
                                <h1 class="animate__animated animate__zoomInLeft animate__delay-3s">People</h1>
                            </div>
                            <a href="#service"
                                class="btn btn-lg animate__animated animate__fadeInUp animate__delay-4s scrollTop btn-contact">Nos
                                services</a>
                        </div>
                    </div>
                    <img src="{{asset('assets/images/slides/slide3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item animate__animated animate__flipInX">
                    <div class="container">
                        <div class="text-left">
                            <div class="text-sm">
                                <h5 class="animate__animated animate__fadeInDown animate__delay-1s">The Best Group
                                    <small style="font-size: 14px;">Company</small> <small
                                        style="font-size: 14px;">Communication</small></h5>
                            </div>
                            <div class="text-lg">
                                <h3 class="animate__animated animate__lightSpeedInLeft animate__delay-2s">We shape your
                                </h3>
                                <h1 class="animate__animated animate__zoomInLeft animate__delay-3s">Events</h1>
                            </div>
                            <a href="#service"
                                class="btn btn-lg animate__animated animate__fadeInUp animate__delay-4s scrollTop btn-contact">Nos
                                services</a>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/slides/slide5.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item animate__animated animate__flipInX">
                    <div class="container">
                        <div class="text-left">
                            <div class="text-sm">
                                <h5 class="animate__animated animate__fadeInDown animate__delay-1s">The Best Group
                                    <small style="font-size: 14px;">Company</small> <small
                                        style="font-size: 14px;">Communication</small></h5>
                            </div>
                            <div class="text-lg">
                                <h3 class="animate__animated animate__lightSpeedInLeft animate__delay-2s">We design your
                                </h3>
                                <h1 class="animate__animated animate__zoomInLeft animate__delay-3s">Dreams</h1>
                            </div>
                            <a href="#service"
                                class="btn btn-lg animate__animated animate__fadeInUp animate__delay-4s scrollTop btn-contact">Nos
                                services</a>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/slides/slide8.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>
    <!-- FIN -->

    <!-- QUI SOMME-NOUS -->
    <div class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-about">
                        <img src="{{ asset('assets/images/slides/slide4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 content">
                    <div class="text-left animate__animated animate__fadeInRight wow">
                        <h1>Qui Sommes-Nous ?</h1>
                        <h4>Conseiller - Concevoir - Réaliser</h4>
                        <p>Nous conseillons par la formation et le coaching, nous concevons des projets de développement
                            d'entreprise et des plans de communication et nous réalisons les évènements internes ainsi
                            qu'externes des entreprises et personnes de notoriétés.</p>
                        <h4><q>At TBG, We <span class="typed-text"></span><span class="cursor typing">&nbsp;</span></q>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN -->

    <!-- PORTFOLIOS -->
    <div class="portfolios " id="portfolios">
        <div class="container">
            <div class="text-left">

                <h6>Projets</h6>
                <h1>Recent Case Studies</h1>
            </div>

            <div class="container-fluid animate__animated animate__fadeInUp wow">
                <div class="row mt-4 wow row-part">
                    @forelse($travail as $port)
                    <div class="customNavigation mb-4">
                        <a class="btn gray prev"></a>
                        <a class="btn gray next"></a>
                    </div>
                    @empty
                    <p></p>
                    @endforelse
                    <div id="slider-carousel" class="owl-carousel">
                        @forelse($travail as $port)
                        <a href="detail.portfolio/{{ $port->id }}" id='detail'>
                            <div class="item">
                                <div class="img-logo">
                                    <img src="{{ asset('assets/images/'. $port->slogant) }}" alt="img-logo-portfolio"
                                        class="img-logo-portfolio">
                                </div>
                                <div class="content text-left">
                                    
                                    <h5>{{ $port->titre }}</h5>
                                </div>
                                <img src="{{ asset('storage/'. $port->cover) }}" alt=""
                                    class="img-fluid img-portfolio">
                            </div>
                        </a>
                        @empty
                        <div class="text-left" style="margin-top: -50px;">
                            <i class="fas fa-folder-open" style="font-size: 100px;"></i>
                            <h6>Pas des oeuvres pour le moment</h6>
                        </div>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN -->

    <!-- SERVICES -->
    <div class="service" id="service">
        <div class="container">
            <div class="text-left mb-5">
                <h6>Nos services</h6>
                <h1>Le professionnalisme dans nos <br> services est de rigueur</h1>
            </div>
            <div class="row">

                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            1
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Edition des livres</h4>
                                <p> Nous réalisons votre rêve en éditant vos livres, concevant couverture et mise en
                                    page, jusqu'à sa sortie officielle.</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            2
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Conception et Management des projets</h4>
                                <p>Nous concevons et mettons à exécution les projets, nous les faisons naître et nous
                                    les voyons grandir.
                                    Les projets non conçus par notre équipe ne sont pas un frein, nous nous identifions à
                                    cela comme s'ils portaient déjà notre ADN.</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            3
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Evénementiel</h4>
                                <p>Une fois votre event conçu, nous passons à l'action en mettant à exécution, le projet
                                    dans son entièreté.
                                </p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            4
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Formation indoor et outdoor du personnel</h4>
                                <p> Nous apportons notre expertise auprès de vous et dans le soucis de vous mettre dans
                                    les meilleures conditions, nous choisissons un cadre meilleur ou mieux, nous venons
                                    dans vos bureaux.</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            5
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Stratégie et plan de communication</h4>
                                <p>
                                    Nous mettons en place, tous les moyens possibles pour atteindre notre cible en
                                    élaborant un plan de communication sur mesure, et la stratégie adéquate.
                                </p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card animate__animated animate__fadeInRight wow">
                        <div class="img-logo">
                            6
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Campagne médiatique</h4>
                                <p>Le monde d'aujourd'hui étant devenu très médiatique, nous assurons selon le profil
                                    du client, une communication médiatique et utilisant tous les supports possibles afin
                                    d'assurer une présence digitale du client mais aussi hors médias.</p>

                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

        </div>
    </div>
    <!-- FIN -->

    <!-- TEAMS -->
    <div class="team" id="team">
        <div class="container">
            <div class="text-left">
                <h6>Expert Team</h6>
                <h1>Get Advice From Expert</h1>
            </div>
            <div class="text-center mb-5">
                <h6>Leadership Team</h6>
            </div>
            <div class="row justify-content-center mb-5">
                @forelse ($t3 as $t)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card animate__animated animate__fadeInUp wow">
                        <div class="card-img">
                            <img src="{{ asset('storage/'.$t->photo) }}" alt="img_team" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="team-name">{{$t->prenom.' '.$t->nom}}</h3>
                                <span class="team-function">{{$t->poste}}</span>
                                <div class="team-network">
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
                                        <i class="fab fa-twitter"></i></a>
                                    @endempty
                                    @empty(!$t->likedin)
                                        <a target="_blank" href="{{$t->likedin}}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                    @endempty       
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-1"></div>
                @empty
                    
                @endforelse
            </div>
            <div class="text-center mb-5">
                <h6>Management Team</h6>
            </div>
            <div class="row justify-content-center mb-5">
                @forelse ($t2 as $t)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card animate__animated animate__fadeInUp wow">
                        <div class="card-img">
                            <img src="{{ asset('storage/'.$t->photo) }}" alt="img_team" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="team-name">{{$t->prenom.' '.$t->nom}}</h3>
                                <span class="team-function">{{$t->poste}}</span>
                                <div class="team-network">
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
                                        <i class="fab fa-twitter"></i></a>
                                    @endempty
                                    @empty(!$t->likedin)
                                        <a target="_blank" href="{{$t->likedin}}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                    @endempty       
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-1"></div>
                @empty
                    
                @endforelse
            </div>
            <div class="text-center mb-5">
                <h6>Execution Team</h6>
            </div>
            <div class="row justify-content-center">
                @forelse ($t1 as $t)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="card animate__animated animate__fadeInUp wow">
                        <div class="card-img">
                            <img src="{{ asset('storage/'.$t->photo) }}" alt="img_team" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="team-name">{{$t->prenom.' '.$t->nom}}</h3>
                                <span class="team-function">{{$t->poste}}</span>
                                <div class="team-network">
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
                                        <i class="fab fa-twitter"></i></a>
                                    @endempty
                                    @empty(!$t->likedin)
                                        <a target="_blank" href="{{$t->likedin}}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                    @endempty       
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-lg-1"></div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
    <!-- FIN -->
    <!-- PARTENAIRES -->
    <div class="partenaire">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme carousels" id="slider-carousels">
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/biy.png') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/gael.png') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/pcn.jpg') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/phila.png') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/sep.png') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/logo-client/touchmydream.jpg') }}" alt="photo partenaire"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN -->

    <!-- TEMOIGNAGE -->
    <div class="temoignage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-img">
                        <img src="{{ asset('assets/images/portfolio/img-tem.jpg') }}" alt="img_tem" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-left mt-5" style="padding: 40px 0 0 40px;">
                        <h6>Reviews</h6>
                        <h1>Clients Testimonials</h1>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
                        style="height: 100vh;">

                        <div class="carousel-inner">

                            @forelse($temoin as $tem)
                            <div class="carousel-item {{ $loop->first?"active":"" }}">
                                <div class="text-left content-temoignage">
                                    <p><q>{{ $tem->description}}</q> </p>
                                </div>
                                <div class="text-left temoin">
                                    <div class="avatar">
                                        <img src="{{ asset('storage/'.$tem->photo) }}" alt="img_temoin">
                                    </div>
                                    <h5 class="name-temoin">{{ $tem->prenom.' - '.$tem->nom }}</h5>
                                    <span class="function-temoin">{{ $tem->profession }}</span>
                                </div>
                            </div>
                            @empty
                            <p><q>Aucun témoignage pour l'instant</q></p>
                            @endforelse
                        </div>
                        
                        <ol class="carousel-indicators">
                            @for($i = 0; $i <$temoin->count(); $i++)
                                <li data-target="#carouselExampleControls" data-slide-to="{{ $i }}"
                                    class="{{ $i==0?"active":"" }}">
                                </li>
                                @endfor
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN -->
</div>
@endsection
