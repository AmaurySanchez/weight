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
        <form action="controladorComidas.php" method="POST" id="comidasForm">

               <div>

                     <div class="form-group col-md-6 col-md-offset-3">
              <br/>
                <label for="desayunos">Fechas:</label>
                <select class="form-control" name="desayunos" id="desayunos">
                    <?php foreach($fechas as $fecha):?>
                        <option value="<?= $fecha["fecha"]?>" id="<?= $fecha["fecha"]?>"><?= $fecha["fecha"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

               </div>

              <div class="form-group col-md-6 col-md-offset-3">
              <br/>
                <label for="desayunos">Desayuno:</label>
                <select class="form-control" name="desayunos" id="desayunos">
                    <?php foreach($desayuno as $desayunos):?>
                        <option value="<?= $desayunos["codigo_comida"].",".$desayunos["tipo"]?>" id="<?= $desayunos["codigo_comida"]?>"><?= $desayunos["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="almuerzos">Almuerzo:</label>
                <select class="form-control" name="almuerzos" id="almuerzos">
                    <?php foreach($almuerzo as $almuerzos):?>
                        <option value="<?= $almuerzos["codigo_comida"]?>" id="<?= $almuerzos["codigo_comida"]?>"><?= $almuerzos["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="comidas">Comida:</label>
                <select class="form-control" name="comidas" id="comidas">
                    <?php foreach($comida as $comidas):?>
                        <option value="<?= $comidas["codigo_comida"]?>" id="<?= $comidas["codigo_comida"]?>"><?= $comidas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="postres">Postres:</label>
                <select class="form-control" name="postres" id="postres">
                    <?php foreach($postre as $postre):?>
                        <option value="<?= $postre["codigo_comida"]?>" id="<?= $postre["codigo_comida"]?>"><?= $postre["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="merienda">Merienda:</label>
                <select class="form-control" name="merienda" id="merienda">
                    <?php foreach($merienda as $meriendas):?>
                        <option value="<?= $meriendas["codigo_comida"]?>" id="<?= $meriendas["codigo_comida"]?>"><?= $meriendas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-md-6 col-md-offset-3">
                <label for="cena">Cena:</label>
                <select class="form-control" name="cena" id="cena">
                    <?php foreach($cena as $cenas):?>
                        <option value="<?= $cenas["codigo_comida"]?>" id="<?= $cenas["codigo_comida"]?>"><?= $cenas["nombre"]?></option>
                    <?php endforeach;?>
                </select>
              </div>

              <button class="btn btn-primary btn-lg btn-block" id="enviarComidas">Guardar comidas del día</button>
            
        </form>
        <script>alert("<?=$_SESSION["email"]?>"); </script>

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
    <?php //session_destroy();?>
<script src="js/bootstrap.min.js">
</body>
</html>