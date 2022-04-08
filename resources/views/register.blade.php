<!DOCTYPE html>
<html lang ='en'>
    <head>
        <meta charset="UTF=8">
        <title>Registro</title>
<link Rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="stile.css">
</head>
<body>
    <form method="POST" id="msform" action="registrar.php">
        <ul id="progressbar">
            <li class="active">Configuracion de la cuenta</li>
            <li>Redes Sociales</li>
            <li>detalles personales</li>
</ul>
<fieldset>
    <h2 class="fs-title">crear una cuenta</h2>
    <h3 class="fs-subtitle">Crear Usuario </h3>
    <input type="text" name="username" placeholder="Email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="button" name="next" class=" next action-button" value="Next"/>
</fieldset>
<fieldset>
    <h2 class="fs-title">Redes Sociales</h2>
    <h3 class="fs-subtitule">Redes sociales disponibles</h3>
    <input type="text" name="twitter" placeholder="twitter"/>
    <input type="text" name="facebook" placeholder="facebook"/>
    <input type="text" name="google" placeholder="Google Plus"/>
    <input type="button" name="previous" class="previous action-button" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>
</fieldset>
<fieldset>
    <h2 class="fs-title">Datos Personales</h2>
    <h3 class="fs-subtitle">Horus</h3>
    <input type="text" name="nombre" placeholder="primer nombre"/>
    <input type="text" name="apellido" placeholder="apellido"/>
    <input type="text" name="telefono" placeholder="telefono"/>
    <textarea name="direccion" placeholder="direccion"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous"/>
    <input tipe="submit" name="sumbit" class=" submit action-button" value="Submit"/>
</fieldset>
</form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="script.js"></script>

</Body>
</html>

