@extends('layouts.template',['titre'=>"temoignage"])
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
                  @if(session()->has('message'))
                     <div class="col-md-6 col-md-offset-3" >
                            <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{session()->get('message')}}
                            </div>
                     </div>
                  @endif

                    <div class="col-md-12" id="tab-porto">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Remplissez ce formulaire </h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                            <form  role="form" id="formTemoignage"  method="POST" action="{{route('add.temoignage')}}" class='form-group' enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-md-6 ">
                                                            <label>Nom</label>
                                                            <input type="text" placeholder="Enter le nom" name='nom' value="{{ old('nom') }}" class="form-control">
                                                            @if ($errors->has('nom'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nom')}}</strong>
                                                                        </span>

                                                            @endif
                                                    </div>
                                                    <div class=" col-md-6 "><label>Prenom</label>
                                                            <input type="text" name='prenom' placeholder="Prenom" value="{{ old('prenom') }}" class="form-control">
                                                           @if ($errors->has('prenom'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('prenom') }}</strong>
                                                                        </span>
                                                            @endif
                                                    </div>
                                                    <div class="col-md-6 ">
                                                            <label>Profession</label>
                                                            <input type="text" name='profession' placeholder="Profession" value='{{ old('profession') }}' class="form-control">
                                                             @if ($errors->has('profession'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('profession') }}</strong>
                                                                        </span>

                                                            @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                            <label>Photo</label>
                                                            <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                            <div class="form-control" data-trigger="fileinput">
                                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                                <span class="fileinput-filename"></span>
                                                            </div>
                                                            <span class="input-group-addon btn btn-default btn-file"><span
                                                                class="fileinput-new">Selectioner une photo</span>
                                                                <span class="fileinput-exists">Changer</span><input type="file" name="photo"></span>
                                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                                data-dismiss="fileinput">Supprimer</a>
                                                            </div>
                                                             @if ($errors->has('photo'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('photo')}}</strong>
                                                                        </span>

                                                            @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                            <label>Contenue du temoignage (FR)</label>
                                                            <textarea name="description" data-provide="markdown"  rows="10">
                                                                    {{ old('description') }}
                                                            </textarea>
                                                             @if ($errors->has('description'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('description') }}</strong>
                                                                        </span>

                                                            @endif
                                                    </div>
                                                    <div class="col-md-12">
                                                            <label>Contenue du temoignage (EN)</label>
                                                            <textarea name="description_en" data-provide="markdown"  rows="10">
                                                                    {{ old('description_en') }}
                                                            </textarea>
                                                             @if ($errors->has('description'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('description') }}</strong>
                                                                        </span>

                                                            @endif
                                                    </div>
                                                    <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                                            <strong>Publier</strong>
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

</script>
@endsection
