@extends('plataform')
@section('pageCurrent')
    <h1>Carga archivo a analizar</h1>
    <div class="card centeredCard">
        <form enctype="multipart/form-data" id="frmUploadImages" action="/fileUpload" method="post" >
            <div class="mb-3">
                <label class="form-label" id="lblNombreImage" for="txtNombImage">Nombre Imagen:</label>
                <input class="form-control" type="text" name="nombreImage" id="txtNombImage">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" onchange="showPreviewImage(this)" multiple>
            </div>
            <div id="previewImagesDiv" class="mb-3"></div>
            @csrf
            <input class="btn btn-primary" type="submit" value="Enviar" >
        </form>
    </div>
    <script src="fileUpload.js" ></script>
@endsection