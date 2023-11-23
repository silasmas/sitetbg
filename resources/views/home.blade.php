@extends('layouts.template',['titre'=>"Home"])
@section('autres_style')

<link href="{{asset('css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/datapicker/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-markdown/bootstrap-markdown.min.css')}}" rel="stylesheet">
<link href="{{asset('css/dropzone/basic.css')}}" rel="stylesheet">
<link href="{{asset('css/dropzone/dropzone.css')}}" rel="stylesheet">
<link href="{{ asset('css/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row wrapper wrapper-content animated fadeInRight">

    <div class='row'>
        @if (session()->has('message'))
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{session()->get('message')}}
            </div>
        </div>
        @endif
        @if (session()->has('erreur'))
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{session()->get('erreur')}}
            </div>
        </div>
        @endif
        <div class="col-lg-12">
            <div id="tab-all" class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#poto">Portofolio</a></li>
                    <li class=""><a data-toggle="tab" href="#temoignage">Témoignage</a></li>
                    <li class=""><a data-toggle="tab" href="#users">Utilisateur</a></li>
                    <li class=""><a data-toggle="tab" href="#team">Teams</a></li>
                    <li class=""><a data-toggle="tab" href="#event">Evenements</a></li>
                    <li class=""><a data-toggle="tab" href="#reservation">Réservation</a></li>
                    <li class=""><a data-toggle="tab" href="#messagetab">Messages</a></li>
                    <li class=""><a data-toggle="tab" href="#newsletter">Newsletter</a></li>
                </ul>
                <div class="tab-content">

                    <div id="poto" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="ibox">
                                        <div class="ibox-content">

                                            <h2> Liste des activités</h2>
                                            <p>
                                                vous trouverez ci-dessous les activités, clicker sur le titre
                                                pour voir en detail
                                            </p>

                                            <div class="clients-list">
                                                <ul class="nav nav-tabs">
                                                    <span class="pull-right small text-muted">{{count($portofolio)}}
                                                        activité(s)</span>
                                                    <li class="active"><a data-toggle="tab" href="#tab-1"><i
                                                                class="fa fa-user"></i> activités</a></li>
                                                    <li class=""><a data-toggle="tab" href="#tab-2"><i
                                                                class="fa fa-picture-o"></i> Gallery </a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-1" class="tab-pane active">
                                                        <div class="full-height-scroll">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>
                                                                        @forelse ($portofolio as $tem )
                                                                        <tr>
                                                                            <td class="client-avatar">
                                                                                <a data-toggle="tab"
                                                                                    href="#portofolio-{{$tem->id}}"
                                                                                    class="client-link">
                                                                                    <img alt="image"
                                                                                        src="{{asset('storage/'.$tem->cover)}}">

                                                                            </td>
                                                                            <td>{{$tem->formateur}}
                                                                                </a> </td>
                                                                            <td>{{$tem->profession_formateur}}
                                                                                </a> </td>
                                                                            <td> {{$tem->titre}}</td>
                                                                            <td class="contact-type"><i
                                                                                    class="fa fa-clock-o"> </i></td>
                                                                            <td>{{$tem->date}} </td>
                                                                            <td class="client-status">
                                                                                <a href="{{$tem->id}}"
                                                                                    id='deletePortofolio'><span
                                                                                        class="label label-danger"><i
                                                                                            class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                                                                        </tr>

                                                                        @empty

                                                                        @endforelse


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab-2" class="tab-pane ">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ibox ">
                                        <div class="ibox-content">
                                            <div class="tab-content">
                                                @forelse($portofolio as $se)
                                                <div id="portofolio-{{$se->id }}"
                                                    class="tab-pane {{ $loop->first?'active':'' }}">
                                                    <div class="row m-b-lg">
                                                        <div class="col-lg-12 text-center">
                                                            <h2>{{ $se->formateur.'('.$se->profession_formateur.')' }}
                                                            </h2>
                                                            <div class="m-b-sm">
                                                                <img alt="image" class=""
                                                                    src="{{asset('storage/'.$se->photo_formateur)}}"
                                                                    style="width: 100px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-detail">
                                                        <div class="full-height-scroll">
                                                            <strong>Detail</strong>
                                                            <div class="row m-b-lg">
                                                                {{-- {{ images::find($se->id)->each(function($city)
                                                                {
                                                                echo $city->image.'<br>';
                                                                });
                                                                }} --}}
                                                                <div class="col-lg-12 text-left">
                                                                    <div class="m-b-sm">
                                                                        {{-- <img alt="image" class=""
                                                                            src="{{asset('storage/'.$se->images->image)}}"
                                                                            style="width: 100px"> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class='wrapper-content  animated fadeInRight'>
                                                    <div class="row mt-5">
                                                        <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                            <p class="center small text-center  badge badge-danger">
                                                                Aucun detail disponible pour l'instant
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="temoignage" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="ibox">
                                        <div class="ibox-content">

                                            <h2> Liste des témoignages publier</h2>
                                            <p>
                                                vous trouverez ci-dessous les témoignage déjà publié, clicker sur le nom
                                                pour voir en detail
                                            </p>

                                            <div class="clients-list">
                                                <ul class="nav nav-tabs">
                                                    <span class="pull-right small text-muted">{{count($temoignage)}}
                                                        Témoignage(s)</span>
                                                    <li class="active"><a data-toggle="tab" href="#tab-1"><i
                                                                class="fa fa-user"></i> Témoignages</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-1" class="tab-pane active">
                                                        <div class="full-height-scroll">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>
                                                                        @forelse ($temoignage as $tem )
                                                                        <tr>
                                                                            <td class="client-avatar">
                                                                                <a data-toggle="tab"
                                                                                    href="#contact-{{ $tem->id }}"
                                                                                    class="client-link">
                                                                                    <img alt="image"
                                                                                        src="{{ asset('storage/'.$tem->photo) }}">

                                                                            </td>
                                                                            <td>{{$tem->prenom.'-'.$tem->nom}}
                                                                                </a> </td>
                                                                            <td> {{$tem->profession}}</td>
                                                                            <td class="contact-type"><i
                                                                                    class="fa fa-clock-o"> </i></td>
                                                                            <td>{{$tem->created_at}} </td>
                                                                            <td class="client-status">
                                                                                <a href="{{$tem->id}}"
                                                                                    id='deleteTemoignage'
                                                                                    class="btn_deleteTemoignage"><span
                                                                                        class="label label-danger"><i
                                                                                            class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                                                                        </tr>
                                                                        @empty

                                                                        @endforelse


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ibox ">

                                        <div class="ibox-content">
                                            <div class="tab-content">
                                                @forelse($temoignage as $se)
                                                <div id="contact-{{ $se->id }}"
                                                    class="tab-pane {{ $loop->first?'active':'' }}">
                                                    <div class="row m-b-lg">
                                                        <div class="col-lg-12 text-center">
                                                            <h2>{{ $se->prenom.'-'.$se->nom }}</h2>
                                                            <div class="m-b-sm">
                                                                <img alt="image" class=""
                                                                    src="{{ asset('storage/'.$se->photo) }}"
                                                                    style="width: 100px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-detail">
                                                        <div class="full-height-scroll">

                                                            <strong>Detail témoignage</strong>
                                                            <form role="form" id="formTemoignage" method="POST"
                                                                action="{{route('add.temoignage')}}" class='form-group'
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="col-md-12">
                                                                    <label>Nom</label>
                                                                    <input type="text" placeholder="Enter le nom"
                                                                        name='nom' value="{{ $se->nom }}"
                                                                        class="form-control">
                                                                    @if ($errors->has('nom'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nom')}}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class=" col-md-12 "><label>Prenom</label>
                                                                    <input type="text" name='prenom'
                                                                        placeholder="Prenom" value="{{ $se->prenom}}"
                                                                        class="form-control">
                                                                    @if ($errors->has('prenom'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('prenom') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Profession</label>
                                                                    <input type="text" name='profession'
                                                                        placeholder="Profession"
                                                                        value='{{ $se->profession}}'
                                                                        class="form-control">
                                                                    @if ($errors->has('profession'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('profession')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <label>Photo</label>
                                                                    <div class=" fileinput fileinput-new input-group"
                                                                        data-provides="fileinput">
                                                                        <div class="form-control"
                                                                            data-trigger="fileinput">
                                                                            <i
                                                                                class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                            <span class="fileinput-filename"></span>
                                                                        </div>
                                                                        <span
                                                                            class="input-group-addon btn btn-default btn-file"><span
                                                                                class="fileinput-new">Selectioner une
                                                                                photo</span>
                                                                            <span
                                                                                class="fileinput-exists">Changer</span><input
                                                                                type="file" value="{{$se->photo}}"
                                                                                name="photo"></span>
                                                                        <a href="#"
                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                    </div>
                                                                    @if ($errors->has('photo'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('photo')}}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label>Contenue du temoignage</label>
                                                                    <textarea name="description" data-provide="markdown"
                                                                        rows="10">
                                                                    {{ $se->description }}
                                                            </textarea>
                                                                    @if ($errors->has('description'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('description')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                                    <button
                                                                        class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                        type="submit">
                                                                        <strong>Publier</strong>
                                                                    </button>
                                                                </div>
                                                            </form>



                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class='wrapper-content  animated fadeInRight'>
                                                    <div class="row mt-5">
                                                        <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                            <p class="center small text-center  badge badge-danger">
                                                                Aucun information disponible pour l'instant
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="users" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="ibox">
                                        <div class="ibox-content">

                                            <h2> Liste des utilisateurs</h2>
                                            <p>
                                                vous trouverez ci-dessous les utilisateurs, clicker sur le nom
                                                pour voir en detail
                                            </p>

                                            <div class="clients-list">
                                                <ul class="nav nav-tabs">
                                                    <span class="pull-right small text-muted">{{count($user)}}
                                                        Utilisateur(s)</span>
                                                    <li class="active"><a data-toggle="tab" href="#tab-1"><i
                                                                class="fa fa-user"></i> Users</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-1" class="tab-pane active">
                                                        <div class="full-height-scroll">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>
                                                                        @forelse ($user as $tem )
                                                                        <tr>
                                                                            <td class="client-avatar">
                                                                                <a data-toggle="tab"
                                                                                    href="#user-{{ $tem->id }}"
                                                                                    class="client-link">
                                                                                    <img alt="image"
                                                                                        src="{{asset('img/default.png')}}">

                                                                            </td>
                                                                            <td>{{$tem->prenom.'-'.$tem->name}}
                                                                                </a> </td>
                                                                            <td> {{$tem->fonction}}</td>
                                                                            <td class="contact-type"><i
                                                                                    class="fa fa-clock-o"> </i></td>
                                                                            <td>{{$tem->created_at}} </td>
                                                                            <td class="client-status">
                                                                                <a href="{{$tem->id}}"
                                                                                    id='deleteUser'><span
                                                                                        class="label label-danger"><i
                                                                                            class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                                                                        </tr>

                                                                        @empty

                                                                        @endforelse


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ibox ">

                                        <div class="ibox-content">
                                            <div class="tab-content">
                                                @forelse($user as $se)
                                                <div id="user-{{ $se->id }}"
                                                    class="tab-pane {{ $loop->first?'active':'' }}">
                                                    <div class="row m-b-lg">
                                                        <div class="col-lg-12 text-center">
                                                            <h2>{{ $se->prenom.'-'.$se->name }}</h2>
                                                            <div class="m-b-sm">
                                                                <img alt="image" class=""
                                                                    src="{{asset('img/default.png')}}"
                                                                    style="width: 100px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-detail">
                                                        <div class="full-height-scroll">

                                                            <strong>Detail témoignage</strong>
                                                            <form role="form" id="formTemoignage" method="POST"
                                                                action="{{route('add.temoignage')}}" class='form-group'
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="col-md-12">
                                                                    <label>Nom</label>
                                                                    <input type="text" placeholder="Enter le nom"
                                                                        name='nom' value="{{ $se->name }}"
                                                                        class="form-control">
                                                                    @if ($errors->has('name'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('name')}}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class=" col-md-12 "><label>Prenom</label>
                                                                    <input type="text" name='prenom'
                                                                        placeholder="Prenom" value="{{ $se->prenom}}"
                                                                        class="form-control">
                                                                    @if ($errors->has('prenom'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('prenom') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>fonction</label>
                                                                    <input type="text" name='fonction'
                                                                        placeholder="Fonction"
                                                                        value='{{ $se->fonction}}' class="form-control">
                                                                    @if ($errors->has('fonction'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('fonction')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                                    <button
                                                                        class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                        type="submit">
                                                                        <strong>Publier</strong>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class='wrapper-content  animated fadeInRight'>
                                                    <div class="row mt-5">
                                                        <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                            <p class="center small text-center  badge badge-danger">
                                                                Aucun detail disponible pour l'instant
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="team" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="ibox">
                                        <div class="ibox-content">

                                            <h2> Liste de la team</h2>
                                            <p>
                                                vous trouverez ci-dessous les agens de l'équipe, clicker sur le nom
                                                pour voir en detail et modifier
                                            </p>

                                            <div class="clients-list">
                                                <ul class="nav nav-tabs">
                                                    <span class="pull-right small text-muted">{{count($team)}}
                                                        agen(s)</span>
                                                    <li class="active"><a data-toggle="tab" href="#tab-1"><i
                                                                class="fa fa-user"></i> Users</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-1" class="tab-pane active">
                                                        <div class="full-height-scroll">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>
                                                                        @forelse ($team as $tem )
                                                                        <tr>
                                                                            <td class="client-avatar">
                                                                                <a data-toggle="tab"
                                                                                    href="#team-{{ $tem->id }}"
                                                                                    class="client-link">
                                                                                    <img alt="image"
                                                                                        src="{{ asset('storage/'.$tem->photo) }}">

                                                                            </td>
                                                                            <td>{{$tem->prenom.'-'.$tem->nom}}
                                                                                </a> </td>
                                                                            <td> {{$tem->poste}}</td>
                                                                            <td class="contact-type"><i
                                                                                    class="fa fa-clock-o"> </i></td>
                                                                            <td>{{$tem->created_at}} </td>
                                                                            <td class="client-status">
                                                                                <a href="{{$tem->id}}"
                                                                                    id='deleteTeam'><span
                                                                                        class="label label-danger"><i
                                                                                            class="fa fa-trash-o"></i></span></a>
                                                                            </td>
                                                                        </tr>

                                                                        @empty

                                                                        @endforelse


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ibox ">

                                        <div class="ibox-content">
                                            <div class="tab-content">
                                                @forelse($team as $se)
                                                <div id="team-{{ $se->id }}"
                                                    class="tab-pane {{ $loop->first?'active':'' }}">
                                                    <div class="row m-b-lg">
                                                        <div class="col-lg-12 text-center">
                                                            <h2>{{ $se->prenom.'-'.$se->name }}</h2>
                                                            <div class="m-b-sm">
                                                                <img alt="image" class=""
                                                                    src="{{ asset('storage/'.$se->photo) }}"
                                                                    style="width: 100px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="client-detail">
                                                        <div class="full-height-scroll">

                                                            <strong>Detail de l'agent</strong>
                                                            <form role="form" id="updatTeam" method="POST"
                                                                action="{{route('teamUpdate')}}" class='form-group'
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="col-md-12">
                                                                    <label>Photo</label>
                                                                    <div class=" fileinput fileinput-new input-group"
                                                                        data-provides="fileinput">
                                                                        <div class="form-control"
                                                                            data-trigger="fileinput">
                                                                            <i
                                                                                class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                            <span class="fileinput-filename"></span>
                                                                        </div>
                                                                        <span
                                                                            class="input-group-addon btn btn-default btn-file"><span
                                                                                class="fileinput-new">Selectioner une
                                                                                photo</span>
                                                                            <span class="fileinput-exists">Changer</span>
                                                                            <input type="file" value="{{$se->photo}}"
                                                                                name="photoTeam"></span>
                                                                        <a href="{{$se->photo}}"
                                                                            class="input-group-addon btn btn-default fileinput-exists"
                                                                            data-dismiss="fileinput">Supprimer</a>
                                                                    </div>
                                                                    @if ($errors->has('photoTeam'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('photoTeam')}}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label>Nom</label>
                                                                    <input type="text" name='id' value="{{ $se->id }}"
                                                                        class="form-control hidden">
                                                                    <input type="text" placeholder="Enter le nom"
                                                                        name='nom' value="{{ $se->nom }}"
                                                                        class="form-control">
                                                                    @if ($errors->has('nom'))

                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nom')}}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class=" col-md-12 "><label>Prenom</label>
                                                                    <input type="text" name='prenom'
                                                                        placeholder="Prenom" value="{{ $se->prenom}}"
                                                                        class="form-control">
                                                                    @if ($errors->has('prenom'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('prenom') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Poste</label>
                                                                    <input type="text" name='poste' placeholder="poste"
                                                                        value='{{ $se->poste}}' class="form-control">
                                                                    @if ($errors->has('poste'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('poste') }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Facebook</label>
                                                                    <input type="text" name='facebook'
                                                                        placeholder="Facebook"
                                                                        value='{{ $se->facebook}}' class="form-control">
                                                                    @if ($errors->has('facebook'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('facebook')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Tweeter</label>
                                                                    <input type="text" name='tweeter'
                                                                        placeholder="tweeter" value='{{ $se->tweeter}}'
                                                                        class="form-control">
                                                                    @if ($errors->has('tweeter'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('tweeter') }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Instagram</label>
                                                                    <input type="text" name='instagram'
                                                                        placeholder="instagram"
                                                                        value='{{ $se->instagram}}'
                                                                        class="form-control">
                                                                    @if ($errors->has('instagram'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('instagram')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 ">
                                                                    <label>Linkedin</label>
                                                                    <input type="text" name='linkedin'
                                                                        placeholder="linkedin"
                                                                        value='{{ $se->linkedin}}' class="form-control">
                                                                    @if ($errors->has('linkedin'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('linkedin')
                                                                            }}</strong>
                                                                    </span>

                                                                    @endif
                                                                </div>

                                                                <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                                    <button id="btnUpdateTeam"
                                                                        class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                        type="submit">
                                                                        <strong>Modifiers</strong>
                                                                    </button>
                                                                </div>
                                                            </form>



                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class='wrapper-content  animated fadeInRight'>
                                                    <div class="row mt-5">
                                                        <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                            <p class="center small text-center  badge badge-danger">
                                                                Aucun detail disponible pour l'instant
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="event" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="ibox">
                                        <div class="ibox-content">

                                            <h2> Liste des évènements</h2>
                                            <p>
                                                vous trouverez ci-dessous les évènements, clicker sur la photo
                                                pour voir en detail
                                            </p>

                                            <div class="clients-list">
                                                <ul class="nav nav-tabs">
                                                    <span class="pull-right small text-muted">{{count($register)}}
                                                        activité(s)</span>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tabevent-1" class="tab-pane active">
                                                        <div class="full-height-scroll">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped  table-hover ">
                                                                    <tbody>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Bannière</th>
                                                                                <th>Type</th>
                                                                                <th>Titre</th>
                                                                                <th>Nbr Réservation</th>
                                                                                <th>Catégorie</th>
                                                                                <th>Quota</th>
                                                                                <th>Options</th>
                                                                            </tr>
                                                                        </thead>

                                                                    <tbody>
                                                                        @forelse ($register as $tem )
                                                                        <tr>
                                                                            <td class="client-avatar">
                                                                                <a data-toggle="tab"
                                                                                    href="#event-{{$tem->id}}"
                                                                                    class="client-link">
                                                                                    <img alt="image"
                                                                                        src="{{asset('storage/'.$tem->banniere)}}">

                                                                            </td>
                                                                            <td>{{$tem->titre}}
                                                                                </a> </td>
                                                                            <td>{{$tem->grandtitre}}
                                                                                </a> </td>
                                                                            <td> {{$tem->client()->count()}}</td>
                                                                            <td>
                                                                                {{$tem->categorie}}
                                                                            </td>
                                                                            <td>{{$tem->quota}} </td>
                                                                            <td class="client-status">

                                                                                <label
                                                                                    class='label label-{{ $tem->etat=="active"?"success":"danger" }}'>{{
                                                                                    $tem->etat }}</label>
                                                                            </td>
                                                                        </tr>

                                                                        @empty

                                                                        @endforelse


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ibox ">
                                        <div class="ibox-content">
                                            <div class="tab-content">
                                                @forelse($register as $se)
                                                <div id="event-{{$se->id }}" class="tab-pane">
                                                    <div class="row m-b-lg">
                                                        <div class="col-lg-12 text-center">
                                                            <h2>{{ $se->grandtitre.'('.$se->titre.')' }}
                                                            </h2>
                                                            <div class="m-b-sm">
                                                                <img alt="image" class=""
                                                                    src="{{asset('storage/'.$se->banniere)}}"
                                                                    style="width: 100px">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            @if ($se->etat==='active')
                                                            <form id="suspenduForme"
                                                                action="{{ route('switcheEvent') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="etat"
                                                                    value="cloturer" />
                                                                <input hidden type="text" name="id"
                                                                    value="{{ $se->id }}" />
                                                                <button type="submit" id='btnChangeSuspendre'
                                                                    class="btn btn-warning btn-sm btn-block"><i
                                                                        class="fa fa-lock"></i> Cloturer
                                                                </button>
                                                            </form>
                                                            @else
                                                            <form id="suspenduForme"
                                                                action="{{ route('switcheEvent') }}" method="POST">
                                                                @csrf
                                                                <input hidden type="text" name="etat" value="active" />
                                                                <input hidden type="text" name="id"
                                                                    value="{{ $se->id }}" />
                                                                <button type="submit" id='btnChangeSuspendre'
                                                                    class="btn btn-success btn-sm btn-block"><i
                                                                        class="fa fa-unlock"></i> Publier
                                                                </button>
                                                            </form>
                                                            @endif
                                                        </div><br>
                                                        <div class="col-lg-9 mt-5" style="margin-top: 10px">
                                                            <a href="{{$se->id}}" id='deleteEvent'>
                                                                <span class="btn btn-danger btn-sm btn-block">
                                                                    <i class="fa fa-trash-o"></i>Supprimer</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="client-detail">
                                                        <div class="full-height-scroll">
                                                            <strong>Detail</strong>
                                                            <div class="row m-b-lg">

                                                                <div class="col-lg-12 text-left">
                                                                    <div class="m-b-sm">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class='wrapper-content  animated fadeInRight'>
                                                    <div class="row mt-5">
                                                        <div class='col-lg-6 col-md-push-1 col-sm-12'>
                                                            <p class="center small text-center  badge badge-danger">
                                                                Aucun detail disponible pour l'instant
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="reservation" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h2> Liste des réservations</h2>
                                            <p>
                                                vous trouverez ci-dessous les personnes qui ce sont enregistrer pour au
                                                moin un évènement
                                            </p>
                                            <div class="clients-list">
                                                <div id="tabcleint-2" class="tab-pane ">
                                                    <div class="full-height-scroll">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-striped  table-hover dataTables-example">

                                                                <thead>
                                                                    <tr>
                                                                        <th>Nom</th>
                                                                        <th>Email</th>
                                                                        <th>Sexe</th>
                                                                        <th>Phone</th>
                                                                        <th>Pays</th>
                                                                        <th>Profession</th>
                                                                        <th>Secteur</th>
                                                                        <th>Event</th>
                                                                        <th>Options</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($client as $t )
                                                                    <tr class="gradeX">
                                                                        <td>{{$t->nom}}</td>
                                                                        <td>{{$t->email}} </td>
                                                                        <td>{{$t->sexe}}</td>
                                                                        <td> {{$t->phone}}</td>
                                                                        <td>
                                                                            {{$t->pays}}
                                                                        </td>
                                                                        <td>{{$t->profession}} </td>
                                                                        <td>{{$t->secteur}} </td>
                                                                        <td>{{$t->grandtitre.' ('.$t->titre.')'}}
                                                                        </td>
                                                                        <td class="client-status">
                                                                            <a href="{{$t->id}}" id='deleteClient'><span
                                                                                    class="label label-danger"><i
                                                                                        class="fa fa-trash-o"></i></span></a>

                                                                        </td>
                                                                    </tr>
                                                                    @empty
                                                                    <div class='wrapper-content  animated fadeInRight'>
                                                                        <div class="row mt-5">
                                                                            <div
                                                                                class='col-lg-6 col-md-push-1 col-sm-12'>
                                                                                <p
                                                                                    class="center small text-center  badge badge-danger">
                                                                                    Aucune information disponible
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforelse
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Nom</th>
                                                                        <th>Email</th>
                                                                        <th>Sexe</th>
                                                                        <th>Phone</th>
                                                                        <th>Pays</th>
                                                                        <th>Profession</th>
                                                                        <th>Secteur</th>
                                                                        <th>Event</th>
                                                                        <th>Options</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="messagetab" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h2> Liste des messages envoyé par les visiteurs sur le site</h2>
                                            <p>
                                                vous trouverez ci-dessous les messages envoyé et leurs dates d'envoie
                                            </p>
                                            <div class="clients-list">
                                                <div id="tabcleint-2" class="tab-pane ">
                                                    <div class="full-height-scroll">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-striped  table-hover dataTables-example">

                                                                <thead>
                                                                    <tr>
                                                                        <th>Nom</th>
                                                                        <th>Email</th>
                                                                        <th>Message</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($messages as $t )
                                                                    <tr class="gradeX">
                                                                        <td>{{$t->fullname}}</td>
                                                                        <td>{{$t->email}} </td>
                                                                        <td>{{$t->message}}</td>
                                                                        <td> {{\Carbon\Carbon::parse($t->created_at)->isoFormat('LLL')
                                                                            }}</td>
                                                                    </tr>
                                                                    @empty
                                                                    <div class='wrapper-content  animated fadeInRight'>
                                                                        <div class="row mt-5">
                                                                            <div
                                                                                class='col-lg-6 col-md-push-1 col-sm-12'>
                                                                                <p
                                                                                    class="center small text-center  badge badge-danger">
                                                                                    Aucune information disponible
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforelse
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Nom</th>
                                                                        <th>Email</th>
                                                                        <th>Message</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="newsletter" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h2> Liste des abonnements</h2>
                                            <p>
                                                vous trouverez ci-dessous les personnes qui ce sont enregistrer pour la
                                                newsletter
                                            </p>
                                            <div class="clients-list">
                                                <div id="tabcleint-2" class="tab-pane ">
                                                    <div class="full-height-scroll">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-striped  table-hover dataTables-example">

                                                                <thead>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($newsletters as $t )
                                                                    <tr class="gradeX">
                                                                        <td>{{$t->email}}</td>
                                                                        <td>{{\Carbon\Carbon::parse($t->created_at)->isoFormat('LLL')
                                                                            }} </td>

                                                                    </tr>
                                                                    @empty
                                                                    <div class='wrapper-content  animated fadeInRight'>
                                                                        <div class="row mt-5">
                                                                            <div
                                                                                class='col-lg-6 col-md-push-1 col-sm-12'>
                                                                                <p
                                                                                    class="center small text-center  badge badge-danger">
                                                                                    Aucune information disponible
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforelse
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('autres_script')
<script src="{{asset('js/jasny/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('js/jasny/jasny-bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
<script src="{{asset('js/bootstrap-markdown/markdown.js')}}"></script>
<script src="{{asset('js/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('js/contact.form.js') }}"></script>
<script>
    $(document).ready(function () {
        $(document).ready(function () {
            $('.dataTables-example').DataTable({
                language: {
                    processing: "Traitement en cours...",
                    search: "Rechercher&nbsp;:",
                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                },
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'reservation'
                    },
                    {
                        extend: 'pdf',
                        title: 'reservation'
                    },

                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            $(document).on("click", "#deleteCat", function (e) {
                e.preventDefault();
                var id = $(this).attr("href");
                deleteTeame(id, 'destroy_Cat');
            });
        });

        $(document).on("click", "#deleteTemoignage", function (e) {
            e.preventDefault();
            // load('#tab-role');
            var id = $(this).attr("href");
            // alert(id);
            deleteTemoignage(id, 'destroy_temoignage');
        });
        $(document).on("click", "#btnChange", function (e) {
            e.preventDefault();
            // load('#tab-role');
            var id = $(this).attr("title");
            var etat = $("#etat").val();
            // alert(id+'-'+etat);
             switcheEvent(id,etat, 'destroy_temoignage');
        });
        // $("#formChange").on("submit", function (e) {
        //         e.preventDefault();

        //         switcheEvent("#formChange", '#btnChange');
        //     });
        $(document).on("click", "#deleteEvent", function (e) {
            e.preventDefault();
            // load('#tab-role');
            var id = $(this).attr("href");
            // alert(id);
            deleteTemoignage(id, "destroy_event");
        });
        $(document).on("click", "#deleteClient", function (e) {
            e.preventDefault();
            // load('#tab-role');
            var id = $(this).attr("href");
            // alert(id);
            deleteTemoignage(id, "destroy_client");
        });
        $(document).on("click", "#deleteUser", function (e) {
            e.preventDefault();
            var id = $(this).attr("href");
            deleteTemoignage(id, 'destroy_url');
        });
        $(document).on("click", "#deleteTeam", function (e) {
            e.preventDefault();
            var id = $(this).attr("href");
            deleteTemoignage(id, 'destroy_team');
        });
        $(document).on("click", "#deletePortofolio", function (e) {
            e.preventDefault();
            var id = $(this).attr("href");
            deleteTemoignage(id, 'destroy_portofolio');
        });
    });

    function switcheEvent(id,etat, idLoad) {
        swal({
            title: "Attention Modification",
            text: "êtes vous sûre de vouloir changer l'etat de cet évènement "+etat+" ?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function (willDelete) {
            if (willDelete) {
                $(idLoad).addClass('disabled');
            $.ajax({
                url: "{{ route('switcheEvent') }}",
                method: "GET",
                data: {'id':id,'etat':etat},
                success: function (data) {
                    $(idLoad).removeClass('disabled');
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })

                        actualiser();
                    }

                },
            });
            } else {
                swal({
                    title: "Changement annuler",
                    icon: 'error'
                })
            }
        });
    }

    function deleteTemoignage(id, url) {
        swal({
            title: "Attention suppression",
            text: "êtes vous sûre de vouloir supprimer cet element ?",
            icon: 'warning',
            dangerMode: true,
            buttons: {
                cancel: 'Non',
                delete: 'OUI'
            }
        }).then(function (willDelete) {
            if (willDelete) {

                $.ajax({
                    url: url + "/" + id,
                    method: "GET",
                    data: "",
                    success: function (data) {
                        //  load('#tab-session');
                        if (!data.reponse) {
                            swal({
                                title: data.msg,
                                icon: 'error'
                            })

                        } else {
                            swal({
                                title: data.msg,
                                icon: 'success'
                            })
                            actualiser();
                        }
                    },
                });
            } else {
                swal({
                    title: "Suppression annuler",
                    icon: 'error'
                })
            }
        });
    }

    function actualiser() {
        location.reload();
    }

    function load(id) {
        $(id).children('.ibox-content').toggleClass('sk-loading');
    }

</script>


@endsection
