@extends('plataform')
@section('pageCurrent')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stile5.css" type="text/css" media=screen>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d37c5443c6.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>
<style>
   .l {
  font-size: 100%;
  font-weight: bold;
  letter-spacing: 10px;
  text-align: center;
  text-shadow: rgb(171, 235, 198) 5px 0;
  text-transform: uppercase;
   }
    </style>
<body>
    <div class="l"><h1>perfil</h1>
</div>
<div class="container centered">
    <header class="perfil">
      <img src="https://www5.djicdn.com/cms/uploads/2808f1b40ded0555f0378af97cd59a45.png" alt="">
      <div class="title">
        <h1>Nombre</h1>
        <h3>Cargo</h3>
        <p>#Drones #Agricultura</p>

        <!-- Icons -->
        <a title="Codepen" class="link-icon" target="_blank" href="">
          <i class="fab fa-codepen"></i>
        </a>

        <a title="GitHub" class="link-icon" target="_blank" href="">
          <i class="fab fa-github-square"></i>
        </a>

        <a title="Linkedin" class="link-icon" target="_blank" href="">
          <i class="fab fa-linkedin"></i>
        </a>

        <a title="Twitter" class="link-icon" target="_blank" href="">
          <i class="fab fa-twitter-square"></i>
        </a>
      </div>
    </header>

    <!-- estrutura do projeto -->
    <main class="projetos">
      <div class="container-projetos">
        <h4>Projetos</h4>
        <p class="line-1 anim-typewriter">Projetos en los cuales estas involucrado</p>
        <ol>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
          <li><a href="" target="_blank"> 🆔 Proyecto</a></li>
        </ol>
      </div>

    </main>
  </div>
  <!-- Script -->
  <script src="app.js"></script>
</body>
</html>


@endsection