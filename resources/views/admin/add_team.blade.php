@extends('layouts.template',['titre'=>"Team"])
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
                                            <form  role="form" id="formTemoignage"  method="POST" action="{{route('add.team')}}" class='form-group' enctype="multipart/form-data">                            
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
                                                            <label>Poste</label>
                                                            <input type="text" name='poste' placeholder="Poste" value='{{ old('poste') }}' class="form-control">
                                                             @if ($errors->has('poste'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('poste') }}</strong>
                                                                        </span>
                                                            
                                                            @endif
                                                    </div>
                                                    <div class="col-md-6 ">
                                                            <label>Facebook</label>
                                                            <input type="text" name='facebook' placeholder="Facebook" value='{{ old('facebook') }}' class="form-control">
                                                         </div>
                                                    <div class="col-md-6 ">
                                                            <label>Instagram</label>
                                                            <input type="text" name='instagram' placeholder="Instagram" value='{{ old('instagram') }}' class="form-control">
                                                       </div>
                                                    <div class="col-md-6 ">
                                                            <label>Twitter</label>
                                                            <input type="text" name='tweeter' placeholder="Twitter" value='{{ old('tweeter') }}' class="form-control">
                                                    </div>
                                                    <div class="col-md-6 ">
                                                            <label>linkedIn</label>
                                                            <input type="text" name='linkedin' placeholder="linkedIn" value='{{ old('poste') }}' class="form-control">
                                                     </div>
                                                     <div class=" col-md-6"><label>Niveau</label>
                                                        <select name='niveau' class="select2_demo_1 form-control">
                                                               <option value="1">Niveau 1</option>
                                                               <option value="2">Niveau 2</option>
                                                               <option value="3">Niveau 3</option>
                                                        </select>
                                                 </div>
                                                    
                                                    <div class="col-md-12">
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