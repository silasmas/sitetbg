@extends('layouts.template',['titre'=>"FormRecervation"])
@section('autres_style')

<link href="{{asset('css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/datapicker/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-markdown/bootstrap-markdown.min.css')}}" rel="stylesheet">
<link href="{{asset('css/dropzone/basic.css')}}" rel="stylesheet">
<link href="{{asset('css/dropzone/dropzone.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="row wrapper wrapper-content animated fadeInRight">
    <div class="row">
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

        <div class="col-md-12" id="tab-porto">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Remplissez ce formulaire pour creé le formulair de réserveation</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" id="formTemoignage" method="POST" action="{{route('add.form')}}"
                                class='form-group' enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label>Grand titre</label>
                                    <input type="text" placeholder="Enter le grand titre" name='grandtitre'
                                        value="{{ old('grandtitre') }}" class="form-control">
                                    @if ($errors->has('grandtitre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('grandtitre')}}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class=" col-md-6"><label>Smal titre (Genre d'evenement)</label>
                                    <input type="text" name='titre' placeholder="Smallt Titre" class="form-control">
                                </div>
                                <div class=" col-md-6"><label>Quota des personnes (Si c'est requis)</label>
                                    <input type="number" name='quota' placeholder="Quota" class="form-control">
                                </div>
                                <div class=" col-md-6"><label>Catégorie</label>
                                    <select name='categorie' class="select2_demo_1 form-control">
                                        <option value="payant">Payant</option>
                                        <option value="free">Gratuit</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Date debut</label>
                                    <input type="date" name='date_debut' placeholder="Date debut" value='{{old('
                                        date_debut') }}' class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <label>Date fin</label>
                                    <input type="date" name='date_fin' placeholder="Date fin" value='{{old(' date_fin')
                                        }}' class="form-control">

                                </div>
                                <div class=" col-md-6"><label>Lien de paiement (Si l'event est paynt)</label>
                                    <input type="text" name='lienPaiement' placeholder="Smallt Titre"
                                        class="form-control">
                                </div>
                                <div class=" col-md-6"><label>Etat</label>
                                    <select name='etat' class="select2_demo_1 form-control">
                                        <option value="active">Publier</option>
                                        <option value="suspend">En attente</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Visuel de paiement (Si l'event est paynt)</label>
                                    <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                class="fileinput-new">Selectioner une photo</span>
                                            <span class="fileinput-exists">Changer</span><input type="file"
                                                name="visuelpaiement"></span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                            data-dismiss="fileinput">Supprimer</a>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <label>Image Banière</label>
                                    <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                class="fileinput-new">Selectioner une photo</span>
                                            <span class="fileinput-exists">Changer</span><input type="file"
                                                name="banniere"></span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                            data-dismiss="fileinput">Supprimer</a>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Description</label>
                                    <textarea name="description" class="summernote" rows="10">
                                                                {{ old('description') }}
                                                        </textarea>
                                </div>
                                <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                        <strong>Enregistrer</strong>
                                    </button>
                                </div>
                            </form>

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
<script src="{{asset('js/dropzone/dropzone.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote();

  });
</script>
@endsection
