@extends('plataform')
@section('pageCurrent')

<h2>Cargar Imagenes A Procesar</h2>
<div class="card" style="width: 80%">
    <form enctype="multipart/form-data" id="frmUploadImages" action="/fileUpload" method="post" >
        <label style="border: 0px;" class="form-control" for="inpNombreImage">Nombre archivo:</label>
        <input style="width: 60%;margin-left: 10px;" class="form-control" id="inpNombreImage" type="text" name="nombreImage">
        <br>
        <input style="margin: 10px" type="file" multiple="true" onchange="showPreviewImage(this)" class="btn btn-secondary" name="imageFileStore[]">
        @csrf
        <br><br>
        <input style="margin: 10px"  type="submit" value="Enviar">
    </form>
</div>
<div id="previewImagesDiv"></div>
@endsection