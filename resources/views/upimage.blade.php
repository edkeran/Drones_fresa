@extends('plataform')
@section('pageCurrent')

    <div>
        <form enctype="multipart/form-data" id="frmUploadImages" action="/fileUpload" method="post" >
            <input type="text" name="nombreImage">
            <br>
            <input type="file">
            @csrf
            <br>
            <input type="submit" value="Enviar" >
        </form>
    </div>
    
@endsection