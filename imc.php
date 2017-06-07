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
      Consigue y mantén tu peso ideal
    </div>

    <div >
    <div  class="col-md-6 col-md-offset-3 textoBloque1">
      Para saber si tu peso es el adecuado para tu constitución corporal, la OMS ofrece el Indice de masa corporal o IMC. Dicho indice nos indica si el peso que tenemos es el adecuado para nuestra constitución y establece una escala por la cual se mide el riesgo de padecer enfermedades si no estamos en un peso adecuado para nuestra edad y constitución.
    </div>

    <div class="col-md-6 col-md-offset-3 textoBloque1 calculoIMC" >
           
        <form method="post" id="formulario">
            <label class="col-md-12" for="peso"> Peso en Kg</label>
            <input  type="number" name="peso" id="peso" step="0.01"/><br/><br/>
            <label class="col-md-12" for="altura"> Altura en cm</label>
            <input  type="number" name="altura" id="altura" step="0.01"/><br/><br/>
            <button class="btn btn-primary btn-lg btn-block" id="enviar" type="button"> Calcula tu IMC </button><br/>
            <div id="resultado" class="col-md-12"> </div>

        </form>

    </div>

     <div class="col-md-6 col-md-offset-3 textoBloque1" id="tabla"  >
            <div class="table-responsive"> 
             <div class="col-md-12 textoEncabezado">
                 Tabla de IMC
            </div>      
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>ÍNDICE MASA CORPORAL</th>
        <th>CLASIFICACIÓN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>>16</td>
        <td>Infrapeso: Delgadez Severa</td>
        
      </tr>

      <tr>
        <td>2</td>
        <td>16.00 - 16.99</td>
        <td>Infrapeso: Delgadez moderada</td>
        
      </tr>

      <tr>
        <td>3</td>
        <td>17.00 - 18.49</td>
        <td>Infrapeso: Delgadez aceptable</td>
        
      </tr>

      <tr>
        <td>4</td>
        <td>18.50 - 24.99</td>
        <td>Peso Normal</td>
        
      </tr>

      <tr>
        <td>5</td>
        <td>25.00 - 29.99</td>
        <td>Sobrepeso</td>
        
      </tr>

      <tr>
        <td>6</td>
        <td>30.00 - 34.99</td>
        <td>Obeso: Tipo I</td>
        
      </tr>

      <tr>
        <td>7</td>
        <td>35.00 - 40.00</td>
        <td>Obeso: Tipo II</td>
        
      </tr>

      <tr>
        <td>8</td>
        <td>>40.00</td>
        <td>Obeso: Tipo III</td>
        
      </tr>
    </tbody>
  </table>
  </div>
</div>

    </div>

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