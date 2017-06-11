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
        <div class="col-md-6 col-md-offset-3 textoEncabezado">
            Fecha: <script>document.writeln(new Date().toJSON().slice(0,10))</script>
        </div>
        <form action="ControladorComidas.php" method="POST">
              <div class="form-group col-md-6 col-md-offset-3">
              <br/>
                <label for="desayunos">Desayuno:</label>
                <select class="form-control" name="desayunos" id="desayunos">
                    <?php foreach($desayuno as $desayuno):?>
                        <option value="<?= $desayuno["codigo"]?>" id="<?= $desayuno["codigo"]?>"><?= $desayuno["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="almuerzos">Almuerzo:</label>
                <select class="form-control" name="almuerzos" id="almuerzos">
                    <?php foreach($almuerzo as $almuerzos):?>
                        <option value="<?= $almuerzos["codigo"]?>" id="<?= $almuerzos["codigo"]?>"><?= $almuerzos["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="comidas">Comida:</label>
                <select class="form-control" name="comidas" id="comidas">
                    <?php foreach($comida as $comidas):?>
                        <option value="<?= $comidas["codigo"]?>" id="<?= $comidas["codigo"]?>"><?= $comidas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="postres">Postres:</label>
                <select class="form-control" name="postres" id="postres">
                    <?php foreach($postre as $postre):?>
                        <option value="<?= $postre["codigo"]?>" id="<?= $postre["codigo"]?>"><?= $postre["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="merienda">Merienda:</label>
                <select class="form-control" name="merienda" id="merienda">
                    <?php foreach($merienda as $meriendas):?>
                        <option value="<?= $meriendas["codigo"]?>" id="<?= $meriendas["codigo"]?>"><?= $meriendas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="cena">Cena:</label>
                <select class="form-control" name="cena" id="cena">
                    <?php foreach($cena as $cenas):?>
                        <option value="<?= $cenas["codigo"]?>" id="<?= $cenas["codigo"]?>"><?= $cenas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <button class="btn btn-primary btn-lg btn-block" id="enviarComidas">Guardar comidas del día</button>
            
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