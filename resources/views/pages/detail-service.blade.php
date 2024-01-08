@extends('pages.welcome', ['titre' => 'portfolio - detail'])


@section('content')

    @switch($type)
        @case('conseiller')
            @include('parties.services.conseil')
            @break
        @case("concevoir")
        @include('parties.services.concevoir')
            @break
        @case('realiser')
        @include('parties.services.realiser')
            @break

        @default

    @endswitch
@endsection
