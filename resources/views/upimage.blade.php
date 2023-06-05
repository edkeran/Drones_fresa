@extends('plataform')
@section('pageCurrent')
<link rel="stylesheet" href="stile6.css" type="text/css" media=screen>



<div class="wrapper">
<div class="card card--19">
Subida de imagenes
<div class="card__header card__header--19">

<div class="card__watermark" >



    <form enctype="multipart/form-data" id="frmUploadImages" action="/fileUpload" method="post" >

    <label  style="border: 0px;" class="form-control" for="inpNombreImage">Nombre archivo:</label>
        <br> <input style="width: 90%;margin-left: 10px;" class="form-control" id="inpNombreImage" type="text" name="nombreImage">
    
        
        <input style="margin: 10px" type="file" multiple="true" onchange="showPreviewImage(this)" class="btn btn-secondary" name="imageFileStore[]">
       
        <br><br>
        <input style="margin: 10px"  type="submit" value="Enviar">
    </form>
</div>

</div>
<div class="card__body">
          <img src="https://www5.djicdn.com/cms/uploads/2808f1b40ded0555f0378af97cd59a45.png"  class="card__image">
          
        </div>

        <h1 class="card__title ">Vista Previa</h1>


        <div class="zoom">
        <div id=alfa>
      
<div id=mk0></div><div id=mk1></div><div id=mk2></div>
<div id=mk3></div><div id=mk4></div><div id=mk5></div>
<div id=mk6></div><div id=mk7></div><div id=mk8></div>



  <div  id="previewImagesDiv"></div>
  </div>
  </div>
  </div>

      @csrf
@endsection