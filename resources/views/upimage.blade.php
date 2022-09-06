@extends('plataform')
@section('pageCurrent')
<h2>Cargar Imagenes A Procesar</h2>
<div class="card" style="width: 80%">
    <form enctype="multipart/form-data" id="frmUploadImages" action="/upimage" method="post" >
        <label style="border: 0px;" class="form-control" for="inpNombreImage">Nombre archivo:</label>
        <input style="width: 60%;margin-left: 10px;" class="form-control" id="inpNombreImage" type="text" name="nombreImage">
        <br>
        <input style="margin: 10px" type="file" onchange="showPreviewImage(this)" class="btn btn-secondary">
        @csrf
        <br><br>
        <input style="margin: 10px" type="submit" value="Enviar" class="btn btn-primary" >
    </form>
</div>
<div id="previewImagesDiv"></div>
@endsection