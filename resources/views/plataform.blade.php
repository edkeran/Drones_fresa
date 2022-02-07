<!DOCTYPE html>
<html lang="es">

<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <LINK REL=StyleSheet HREF="stile1.css" TYPE="text/css" MEDIA=screen>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <nav class="sidebar-navigation">
        <ul class="customUlMenu">
            <li class="active">
                <i class="fa fa-user-circle"></i>
                <span class="tooltip">Perfil</span>
            </li>
            <li>
                <i class="fa fa-search"></i>
                <span class="tooltip">consultas</span>
            </li>
            <li>
                <i class="fa fa-print"></i>
                <span class="tooltip">Imagen</span>
                <b><br><a href="{{route('upimage')}}" style="color:#000000;text-decoration:none!important">Subir imagen</a></br></b>
            </li>
            <li>
                <i class="fa fa-window-close"></i>
                <span class="tooltip">Close</span>
                <b><br><a href="{{route('home')}}" style="color:#000000;text-decoration:none!important">salir</a></br></b>
                
            </li>
        </ul>
    </nav>
    </li>
    </ul>
    </nav>

    <div>
        @yield('pageCurrent')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>