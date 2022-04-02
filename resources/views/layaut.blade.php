<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="IconoDrone.ico">
        <title>Drone Fresas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <LINK REL=StyleSheet HREF="css1.css" TYPE="text/css" MEDIA=screen>
        <link  rel="stylesheet" type="text/css" href="/css/layoutStyleMain.css" >

    </head>
    <body>
      <div class="contentTitgulo">
          <div class="title m-b-md">
              <svg viewBox="0 -300 1000 400">
                  <symbol id="s-text">
                      <text text-anchor="middle" x="50%" y="100%">Horus</text>
                  </symbol>
                  <g class = "g-ants">
                      <use xlink:href="#s-text" class="text-copy"></use>
                      <use xlink:href="#s-text" class="text-copy"></use>
                      <use xlink:href="#s-text" class="text-copy"></use>
                      <use xlink:href="#s-text" class="text-copy"></use>
                      <use xlink:href="#s-text" class="text-copy"></use>
                  </g>
              </svg>
          </div>
    <div id="navMenu" class="diamond">
      <div id="mainRotCorrect" class="rotCorrect"><i class="fa fa-cubes fa-4x" aria-hidden="true"></i></div>
      <p><br><a href="{{ route('home') }}" style="color:#000000 ">Home</a></br></p>
    </div>
    <div id="nav1"  class="nav nav1 diamond">
      <div class="rotCorrect"><i class="fa fa-home fa-2x" aria-hidden="true"></i></div>
      <b><br><a href="{{ route('login') }}" style="color:#000000 ">Ingresar</a></br></b>
    </div>
    
    <!--<div class="popUp">Home</div>-->
    <div id="nav2" class="nav nav2 diamond">
      <div class="rotCorrect"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></div>
      <b><br><a href="{{ route('mision') }}" style="color:#000000 ">Mision</a></br></b>
    </div>
    <div id="nav3" class="nav nav3 diamond">
      <div class="rotCorrect"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i></div>
      <b><br><a href="{{route('plataform')}}" style="color:#000000 ">plataforma</a></br></b>
    </div>
    <div id="nav4" class="nav nav4 diamond">
      <div class="rotCorrect"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i></div>
    </div>
    <div id="nav5" class="nav nav5 diamond">
      <div class="rotCorrect"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i></div>
    </div>
  </div>  

      <div>
        @yield('content')
      </div>    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
    
</html>