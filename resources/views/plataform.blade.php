<!DOCTYPE html>
<html lang="es">

<head>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <LINK REL=StyleSheet HREF="stile1.css" TYPE="text/css" MEDIA=screen>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma</title>

</head>

<body>

    <nav class="sidebar-navigation">
    
        <ul>
        <li class="enable">
                <i class="fa fa-user-circle"></i>
                <span class="tooltip">Perfil</span>
                <b><br><a href="{{route('perfil')}}" style="color:#FFFFFF ">perfil</a></br></b>
                
            </li>
          
            <li>
                <i class="fa fa-search"></i>
                <span class="tooltip">consultas</span>
            </li>
           
            <li>
                <i class="fa fa-leaf"></i>
                <span class="tooltip">Subir Archivo</span>
                <b><br><a href="{{route('upimage')}}" style="color:#FFFFFF ">Subir Archivo</a></br></b>
            </li>
            <li>
                <i class="fa fa-window-close"></i>
                <span class="tooltip">Close</span>
                <b><br><a href="{{route('home')}}" style="color:#FFFFFF ">salir</a></br></b>
                
            </li>
        </ul>
    </nav>
    </li>
    </ul>
    </nav>

    <div>
        @yield('pageCurrent')
    </div>

</body>

</html>