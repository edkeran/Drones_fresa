@extends('layaut')
@section('content')
    <h1>Ingreso Usuario Consultor</h1>
    <form class="frmBordered" method="POST" action="/ingresarUsuario">
        <div class="row">
            <label>Correo Electronico:</label>
            <input type="email" placeholder="ejemplo@gmail.com" name="email">
            <br><br>
            <label>Contraseña:</label>
            <input type="password" name="password">
            @csrf
            <br><br>
            <input type="submit" value="Ingresar" class="btn-green">
        </div>
    </form>
@endsection
