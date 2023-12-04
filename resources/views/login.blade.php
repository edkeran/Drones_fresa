@extends('layaut')
@section('content')

<link rel="stylesheet" href="stile4.css" type="text/css" media=screen>

<div class="login-box">
    <h2>Ingreso Usuario Consultor</h2>
    <form class="frmBordered" method="POST" action="/ingresarUsuario">
<div class="user-box">
     <input type="email"  name="email" required="">
     <label>Correo Electronico:</label>
</div>
<div class="user-box">     
     <input type="password" name="password" required="">
     <label>Contraseña:</label>
</div>
            
          
   
      
      <input type="submit" value="Ingresar" class="btn-green">
        </div>
    </form>
    @csrf
@endsection
