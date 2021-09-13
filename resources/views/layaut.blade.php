<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <LINK REL=StyleSheet HREF="css1.css" TYPE="text/css" MEDIA=screen>
        <!-- Styles -->
        <style>
          @import url(https://fonts.googleapis.com/css?family=Montserrat);
      
          html, body, .container {
  width: 100%;
  height: 100%;
  margin: 0px;
  overflow: hidden;
  
}

.container {
  /padding:150px;/
  background: #2F2F31;
  
}

#navMenu {
  top: 150px;
  left: 100px;
  width: 140px;
  height: 140px;
  z-index: 100;
  background: linear-gradient(90deg,  #2db628, #008000,  #2db628);
  -webkit-background: linear-gradient(90deg,  #2db628, #008000,  #2db628);
  background-size: 400% 400%;
  -webkit-background-size: 400% 400%;
  animation: gradient 5s infinite;
  -webkit-animation: gradient 5s infinite;
  
}

#navMenu:hover, .nav:hover {
  background: #33FF33;
}

@keyframes gradient {
  50% {
    background-position: 100% 0;
  }
}
@-webkit-keyframes gradient {
  50% {
    background-position: 100% 0;
  }
}

.diamond {
  position: absolute;
  width: 67.5px;
  height: 67.5px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  background: #2db628;
  margin: 10px;
  cursor: pointer;
  box-shadow: 1px 4px 10px #2db628;
  
  
}

.diamond:active {
  background: #2db628;
  box-shadow: 0px 1px 2.5px  #2db628;
  transition: 0.1s;
  -webkit-transition: 0.1s;
}

.#nav1:hover + .popUp{
  width:100px;
}

.nav {
  transition: 0.5s;
  -webkit-transition: 0.5s;
}

.nav1 {
  top: 87px;
  left: 187px;
  
}

.nav2 {
  top: 137px;
  left: 237px;
}

.nav3 {
  top: 186px;
  left: 287px;
}

.nav4 {
  top: 236px;
  left: 237px;
}

.nav5 {
  top: 286px;
  left: 187px;
}

.small {
  top: 186px;
  left: 236px;
  z-index: 10;
  background: #643fc1;
  transition: 0.5s;
  -webkit-transition: 0.5s;
}

.rotCorrect {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  margin-left: 14px;
  margin-top: 8px;
}

#mainRotCorrect {
  margin-left: 26px;
  margin-top: 28px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  max-width: 90px;
}

i {
  color: #EEEEEE;
}


svg {
    display: block;
    font: 20em 'Montserrat';
    width: 200px;
    height: 200px;
    margin: 0 auto;
}

.text-copy {
    fill: none;
    stroke: rgb(9, 245, 40);
    stroke-dasharray: 6% 29%;
    stroke-width: 15px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 5.5s infinite linear;
}

.text-copy:nth-child(1){
	stroke: #2db628;
	animation-delay: -1;
}

.text-copy:nth-child(2){
	stroke: #0a0a0a;
	animation-delay: -2s;
}

.text-copy:nth-child(3){
	stroke: #0f6e2f;
	animation-delay: -3s;
}

.text-copy:nth-child(4){
	stroke: #5af588;
	animation-delay: -4s;
}

.text-copy:nth-child(5){
	stroke: #0f0f0e;
	animation-delay: -5s;
    
}

@keyframes stroke-offset{
	100% {stroke-dashoffset: -35%;}
}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

           

            .contentTitgulo {
                text-align: center;
            }

            .title {
                font-size: 16px;
            }

            

            .m-b-md {
              
                margin-bottom: 10px;
            }
            p {
  font-size: 100%;
  font-weight: bold;
  letter-spacing: 10px;
  text-align: center;
  text-shadow: gray 6px 0;
  text-transform: uppercase;
  
}
b {
  font-size: 70%;
  font-weight: bold;
  letter-spacing: 0px;
  text-align: center;
  text-shadow: gray 6px 0;
  text-transform: uppercase;
  
}
        </style>
        
        
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
                <div class="container">
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
    </body>
</html>