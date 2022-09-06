@extends('importsElements')
@section('contenido')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <h1 class="fs-1" style="text-align: center">Registar usuario en el sistema</h1>
    <br>
    <div class="card" style="margin: 0 20%;background-color:#20c997;padding: 5% 0%">
        <form method="POST" id="msform" action="/registrarUsuario" style="min-height: 400px">
            <ul id="progressbar">
                <li class="active">Configuracion de la cuenta</li>
                <li>Confirmar contraseña</li>
                <li>Detalles personales</li>
            </ul>
            <fieldset>
                <h2 class="fs-title">crear una cuenta</h2>
                <h3 class="fs-subtitle">Crear Usuario </h3>
                <input id="mail" required="true" class="form-control" type="text" name="mail" placeholder="Email" type="email" />
                <br>
                <input id="password" required="true" class="form-control" type="password" name="password" placeholder="password" type="password" />
                <input type="button" name="Siguiente" class="next action-button" value="Siguiente"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Confirmar contraseña</h2>
                <input id="confirmPass" required="true" class="form-control" type="password" name="passwordConfirm" placeholder="password" type="Confirmar password" />
                <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
                <input type="button" name="Siguiente" class=" next action-button" value="Siguiente" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Datos Personales</h2>
                <h3 class="fs-subtitle">Horus</h3>
                <input id="nombre" required="true" class="form-control" type="text" name="nombre" placeholder="Nombres" />
                <br>
                <input id="apellido" required="true" class="form-control" type="text" name="apellido" placeholder="Apellidos" />
                <br>
                <input type="number" id="telefono" required="true" class="form-control" type="text" name="telefono" placeholder="Telefono" />
                <br>
                @csrf
                <textarea id="direccion" style="color: black;font-family:sans-serif;font-size: 16px" class="form-control" name="direccion" placeholder="Dirección"></textarea>
                <input type="button" name="Anterior" class="previous action-button" value="Anterior" />
                <input onclick="validarCampos()" type="submit" name="Siguiente" class="submit action-button" value="Enviar" />
            </fieldset>
        </form>
    </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

<script>
    function validarCampos(){
        if(document.querySelector('#mail').value == ''){
            toastr.error('El correo electronico es requerido', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#password').value == ''){
            toastr.error('La contraseña es requerida', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#confirmPass').value == ''){
            toastr.error('La confirmacion de contraseña es requerida', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#nombre').value == ''){
            toastr.error('El nombre del usuario es requerido', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#apellido').value == ''){
            toastr.error('El apellido del usuario es requerido', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#telefono').value == ''){
            toastr.error('El telefono es requerido', 'Campo Requerido');
            return false;
        }
        if(document.querySelector('#direccion').value == ''){
            toastr.error('La direccion es requerida', 'Campo Requerido');
            return false;
        }
        return true;
    }

</script>

@endsection