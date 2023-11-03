@extends('pages.welcome',['titre'=>"portfolio - detail"])


@section('content')
<!-- SLIDER -->
<div class="banner-detail" id="banner">
    <img src="{{ asset('storage/'. $img->cover) }}" alt="img-portfolio" class="img-portfolio">
    <div class="container">
        <div class="text-center">
            <h1 class="title-portfolio">{{ $img->titre }}</h1>
        </div>
    </div>
    <div class="img-logo">
        <img src="{{ asset('assets/images/'.$img->slogant) }}" alt="" class="img-logo-portfolio">
    </div>
</div>
<!-- FIN -->
<div class="detail-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="text-left">
                    <h2 class="sub-title-portfolio">{{ $img->titre }}</h2>
                    <div class="date">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                            <path fill-rule="evenodd"
                                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        {{ $img->date }}
                    </div>
                    <p>{{ $img->description }}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('storage/'.$img->photo_formateur??'bg2.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="name-chef">{{ $img->formateur }}</h3>
                            <span class="function">{{ $img->profession_formateur }}</span>
                            <div class="chef-network">
                                <a href="{{ $img->facebook }}"><i class="{{ $img->facebook==null?'':'fab fa-facebook-f' }}"></i></a>
                                <a href="{{ $img->instagram }}"><i class="{{ $img->instagram==null?'':'fab fa-instagram' }}"></i></a>
                                <a href="{{ $img->twiter }}"><i class="{{ $img->twiter==null?'':'fab fa-twitter' }}"></i></a>
                                <a href="{{ $img->in }}"><i class="{{ $img->in==null?'':'fab fa-linkedin-in' }}"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div class="portfolios" id="">
    <div class="container">
        <div class="text-left">
            <h6>Revivez cela en imgage</h6>
        </div>
    </div>
    <div class="partenaire">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme carousels" id="slider-carousels">
                    @forelse($img->images as $port)                            
                            <div class="item"style="width: 200px;height: 250px;">                            
                                <a href="#" data-lity data-lity-target="{{ asset('storage/'. $port->image) }}">
                                <img src="{{ asset('storage/'. $port->image) }}"alt="photo partenaire"
                                class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;" >
                                </a>
                            </div>
                        @empty
                             <div class="text-left" >
                            <i class="fas fa-folder-open" style="font-size: 100px;"></i>
                            <h6>Pas d'images disponible</h6>
                        </div>
                        @endforelse
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="portfolios" id="portfolios-det">
    <div class="container">
        <div class="text-left">
            <h6>Projets similaire</h6>
            <h1>Recent Case Studies</h1>
        </div>
    </div>
    <div class="container-fluid animate__animated animate__fadeInUp wow">
        <div class="row mt-4 wow row-part">

            <div class="customNavigation mb-4">
                <a class="btn gray prev"></a>
                <a class="btn gray next"></a>
            </div>


            <div id="slider-carousel" class="owl-carousel">
                @forelse($sim as $port)
                    <a href="{{ $port->id }}">
                      <div class="item">
                          <div class="img-logo">
                              <img src="{{ asset('assets/images/'. $port->slogant) }}" alt="img-logo-portfolio" class="img-logo-portfolio">
                          </div>
                          <div class="content text-left">
                              <span>{{ $port->slogant }}</span>
                              <h5>{{ $port->titre }}</h5>
                          </div>
                        <img src="{{ asset('storage/'. $port->cover) }}" alt="" class="img-fluid img-portfolio">
                      </div>
                    </a>
                    @empty
                        <p><q>Pas des oeuvres réaliser pour le moment</q></p>
                    @endforelse
            </div>

        </div>
    </div>
</div>
<!-- FIN -->


@endsection
