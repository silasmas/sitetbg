
<div class="carousel-outer">
    <div class="projects-carousel-two owl-carousel owl-theme default-navs">
        <!-- Project Block-->
        @forelse ($travail as $port)

        <div class="project-block-two">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image">
                        <a href="{{ route('showPortfolio',["id"=>$port->id]) }}">
                            <img
                                src="{{ asset('storage/'. $port->cover) }}" alt=""></a>
                        <img src="{{ asset('assets/images/'.$port->slogant) }}" alt="image logo porfolios" class="img-logo-portfolios">
                    </figure>
                    <a href="{{ route('showPortfolio',["id"=>$port->id]) }}" class="read-more"><i
                            class="fa fa-long-arrow-alt-right"></i></a>
                    <div class="info-box">
                        <h4 class="title"><a href="{{ route('showPortfolio',["id"=>$port->id]) }}">{{ $port->titre }}</a></h4>
                    </div>
                </div>
                <div class="overlay-content">
                    <div class="info-box">
                        <h4 class="title"><a href="{{ route('showPortfolio',["id"=>$port->id]) }}">{{ $port->titre }}</a></h4>
                        <div class="text">{{Str::limit($port->description, 100,'...')}}  </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h6>Pas des oeuvres pour le moment</h6>
        @endforelse

    </div>
</div>
