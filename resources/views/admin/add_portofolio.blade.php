@extends('layouts.template',['titre'=>"portofolio"])
@section('autres_style')

<link href="{{asset('css/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/datapicker/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-markdown/bootstrap-markdown.min.css')}}" rel="stylesheet">
<link href="{{asset('css/select2/select2.min.css')}}" rel="stylesheet">
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
                     <div class="col-md-6" id="tab-porto">
                             <div class="ibox float-e-margins">
                                   <div class="ibox-title">
                                          <h5>Portofolio</h5>
                                          <div class="ibox-tools">
                                          <a class="collapse-link">
                                                 <i class="fa fa-chevron-up"></i>
                                          </a>
                                          </div>
                                   </div>
                                   <div class="ibox-content">
                                          <div class="sk-spinner sk-spinner-wandering-cubes">
                                            <div class="sk-cube1"></div>
                                            <div class="sk-cube2"></div>
                                        </div>
                                        <div class="row">
                                                 <form role="form" id="formPortofolio"  method="POST" action="{{route('add.porto')}}" class='form-group' enctype="multipart/form-data">
                                                        @csrf
                                                 <div class="col-md-12">
                                                        <label>Titre (FR)</label>
                                                        <input type="text" placeholder="Enter le titre" name='titre' class="form-control">
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Titre (EN)</label>
                                                        <input type="text" placeholder="Enter le titre" name='titre_en' class="form-control">
                                                 </div>
                                                 <div class=" col-md-12"><label>Service</label>
                                                        <select name='service' class="select2_demo_1 form-control">
                                                               <option value="Conseil">Conseil</option>
                                                               <option value="Concevoir">Concevoir</option>
                                                               <option value="Realiser">Realiser</option>
                                                        </select>
                                                 </div>
                                                 <div class=" col-md-12"><label>Produit</label>
                                                        <select name='slogant' class="select2_demo_1 form-control">
                                                               <option value="logo-book-session-web-ok.png">Book session</option>
                                                               <option value="logo-closer.web.png">Closer</option>
                                                               <option value="logo-crea-mind-web.png">Creative Mind</option>
                                                               <option value="logo-master-class.png">Master class</option>
                                                               <option value="logo-8-fing.web.png">we fink</option>
                                                               <option value="logo tbg grafik web.jpg">Grafik</option>
                                                        </select>
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Adresse</label>
                                                        <input type="text" name='adresse' placeholder="Lieu de l'evenement" class="form-control">
                                                 </div>
                                                 <div class="col-md-6">
                                                        <label>Client (Cible)</label>
                                                        <input type="text" name='cble' placeholder="Client (Cible)" class="form-control">
                                                 </div>
                                                 <div class="col-md-6 ">
                                                        <label>Nom animateur</label>
                                                        <input type="text" name='formateur' placeholder="Nom animateur" class="form-control">
                                                 </div>
                                                 <div class=" col-md-6 "><label>Fonction</label>
                                                        <input type="text" placeholder="Fonction" name='profession_formateur' class="form-control">
                                                 </div>
                                                 <div class="col-md-6" id="">
                                                        <label class="font-normal">Date de realisation</label>
                                                        <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i>
                                                        </span><input type="date" name="date" class="form-control" value="03/04/2014">
                                                        </div>
                                                 </div>
                                                 <div class="col-md-6 "><label>Lien de la video</label>
                                                        <input type="text" name="video" placeholder="Lien de la video" class="form-control">
                                                 </div>
                                                 <div class="col-md-6 "><label>Facebook</label>
                                                        <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                                 </div>
                                                 <div class="col-md-6 "><label>Instragram</label>
                                                        <input type="text" name="instagram" placeholder="Instragram" class="form-control">
                                                 </div>
                                                 <div class="col-md-6 "><label>Youtube</label>
                                                        <input type="text" name="youtube" placeholder="Youtube" class="form-control">
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Photo animateur</label>
                                                        <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                               class="fileinput-new">Selectioner une photo</span>
                                                               <span class="fileinput-exists">Changer</span><input type="file"
                                                               name="photo_formateur"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Cover</label>
                                                        <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                               class="fileinput-new">Selectioner une photo</span>
                                                               <span class="fileinput-exists">Changer</span>
                                                               <input type="file" name="cover"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Descriptions (FR)</label>
                                                        <textarea name="description" class="summernote" rows="10">
                                                        </textarea>
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Descriptions (EN)</label>
                                                        <textarea name="description_en" class="summernote" rows="10">
                                                        </textarea>
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
                      <div class="col-md-6">
                            <div class="ibox float-e-margins">
                                   <div class="ibox-title">
                                          <h5>Galerie portofolio</h5>
                                          <div class="ibox-tools">
                                          <a class="collapse-link">
                                                 <i class="fa fa-chevron-up"></i>
                                          </a>
                                          </div>
                                   </div>
                                   <div class="ibox-content">
                                   <form role="form" id=""  method="POST" action="{{route('add.galeri')}}"
                                   class='form-group' enctype="multipart/form-data">
                                      @csrf
                                          <div class="row">
                                                 <div class="col-md-12">
                                                        <label>Portofolio</label>
                                                        <select name='portofolio_id'class="select2_demo_1 form-control">
                                                               @forelse ($portofolio as $port)
                                                                     <option value="{{$port->id}}">{{$port->titre}}</option>
                                                               @empty
                                                                      <option class="disabled">Aucun portofolio disponible</option>
                                                               @endforelse

                                                        </select>
                                                        @if ($errors->has('portofolio_id'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('portofolio_id')}}</strong>
                                                                        </span>

                                                            @endif
                                                 </div>
                                                 <div class="col-md-12">
                                                        <label>Photo animateur</label>
                                                        <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                               class="fileinput-new">Selectioner une photo</span>
                                                               <span class="fileinput-exists">Changer</span>
                                                               <input type="file" name="img1"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                        @if ($errors->has('img1'))

                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('img1')}}</strong>
                                                                        </span>

                                                            @endif
                                                 </div>
                                                  <div class="col-md-12">
                                                        <label>Image 1</label>
                                                        <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                               class="fileinput-new">Image 2</span>
                                                               <span class="fileinput-exists">Changer</span>
                                                               <input type="file" name="img2"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                        @if ($errors->has('img2'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('img2')}}</strong>
                                                                        </span>

                                                            @endif
                                                 </div>
                                                  <div class="col-md-12">
                                                        <label>Photo animateur</label>
                                                        <div class=" fileinput fileinput-new input-group" data-provides="fileinput">
                                                        <div class="form-control" data-trigger="fileinput">
                                                               <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                               <span class="fileinput-filename"></span>
                                                        </div>
                                                        <span class="input-group-addon btn btn-default btn-file"><span
                                                               class="fileinput-new">Image 3</span>
                                                               <span class="fileinput-exists">Changer</span>
                                                               <input type="file" name="img3"></span>
                                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                               data-dismiss="fileinput">Supprimer</a>
                                                        </div>
                                                        @if ($errors->has('img3'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('img3')}}</strong>
                                                                        </span>

                                                            @endif
                                                 </div>
                                                  <div class="col-md-12 mt-10" style="margin-top: 30px;">
                                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                                        <strong>Publier</strong>
                                                        </button>
                                                 </div>
                                          </div>


                                   </form>
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
<script src="{{asset('js/datapicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('js/codemirror/codemirror.js')}}"></script>
<script src="{{asset('js/codemirror/mode/xml/xml.js')}}"></script>
<script>
        $(document).ready(function(){
              $(".select2_demo_1").select2();

       //        $("#formPortofolio").on("submit", function (e) {
       //      e.preventDefault();
       //      add(this, '#tab-porto', 'add.porto')
       //  });
var segments = location.href.split('_');
var action = segments[1];
// //alert(action)

// if (action == 'portofolio') {
//     var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
//     var fileList = new Array;
//     var i = 0;
//     var callForDzReset = false;
//     $("#dropzoneForme").dropzone({
//         url: "document_upload",
//         addRemoveLinks: true,
//         maxFiles: 4,
//         acceptedFiles: 'image/*',
//         maxFilesize: 5,
//         init: function () {
//             this.on("success", function (file, serverFileName) {
//                 file.serverFn = serverFileName;
//                 fileList[i] = {
//                     "serverFileName": serverFileName,
//                     "fileName": file.name,
//                     "fileId": i
//                 };
//                 i++;
//             });
//         }
//     });
// }
// if (action == 'portofolio') {
//         Dropzone.options.dropzoneForm = {

//             paramName: "file", // The name that will be used to transfer the file
//             maxFilesize: 5, // MB
//             maxFiles: 4,
//               renameFile:function(file){
//                      var dt=new Date();
//                      var time=dt.getTime();
//                      return time+file.name;
//               },
//               acceptedFiles:".jpeg,.jpg,.png,.gif",
//               addRemoveLinks:true,
//               timeout:50000,
//               removedfile:function(file){
//                      var name=file.upload.filename;
//                      $.ajax({
//                             headers:{
//                                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
//                             },
//                             type:'POST',
//                             url:'{{url("delete")}}',
//                             data:{filename:name},
//                             success:function(data){
//                                    console.log('Fichier enregistrer avec succes');
//                             },
//                             error:function(e){
//                                    console.log(e);
//                             }
//                      });
//                      var fileRef;
//                      return (fileRef=file.previewElement)!=null?
//                      fileRef.parentNode.removeChild(file.previewElement):void 0;
//               },
//               success:function(file,response){
//                      console.log(response);
//               },
//               error:function(file,response){
//                     return false;
//               },
//            // dictDefaultMessage: "<strong>Déposez les fichiers ici ou cliquez pour télécharger.</strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
//         };
// }
 });

 function load(id) {

        $(id).children('.ibox-content').toggleClass('sk-loading');
    }

    function add(form, idLoad, url) {
        var f = form;
        var loade = idLoad;
        var u = url;
        var formData= new FormData(f);
        load(loade);
        $.ajax({
            url: u,
            method: "POST",
            data: formData,
            success: function (data) {
                 load(loade);
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

                    $( f)[0].reset();
                }

            },
        });

    }
</script>
@endsection
