<?php
 require_once 'controladorComidas.php';
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/scripts.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header >
                <div><img class="img-responsive" src="img/running.jpg"/></div>
                <div class="barra"> <ul class="nav nav-tabs">
            <li class="dropdown">
                <a href="index.php" >Home <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="imc.php" >IMC <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="pesoIdeal.php" >Peso ideal <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="caloriasDiarias.php" >Cálculo calorias diarias <span class="caret"></span></a>
            </li>
                <li class="dropdown">
                <a href="#" >Dieta <span class="caret"></span></a>
                
            </li>
        </ul>
        </div>
    </header>
      <section class="container-fluid">
      <div  class="row">
    <div id="bloque1" class="col-md-12">
      Guarda las comidas realizadas
    </div>
        <div class="col-md-12 textoEncabezado">
            <script>document.writeln(new Date().toJSON().slice(0,10))</script>
        </div>
        <form action="ControladorComidas.php" method="POST">

            
            
        </form>

    </section>

     <footer class="footer">
      <div class="container">
              <a href='#'><i class="fa fa-twitch fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-rss fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-vine fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-flickr fa-3x fa-fw"></i></a>
              <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
            </span>
      </div>
    </footer>
<script src="js/bootstrap.min.js">
</body>
</html>