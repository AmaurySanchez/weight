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
                <a href="index.php" data-toggle="dropdown">Home <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown">IMC <span class="caret"></span></a>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown">Cálculo calorias diarias <span class="caret"></span></a>
            </li>
                <li class="dropdown">
                <a href="#" data-toggle="dropdown">Dieta <span class="caret"></span></a>
                
            </li>
        </ul>
        </div>
    </header>
      <section class="container-fluid">
      <div  class="row">
    <div id="bloque1" class="col-md-12">
     Calcula las calorias que debes consumir para estar en forma
    </div>

    <div >
    <div  class="col-md-6 col-md-offset-3 textoBloque1">
      <p>Una vez que sabes tu tu IMC y conoces tu estado físico lo siguiente que debes hacer es calcular las calorias diarias que debes consumir para mantenerte en forma</p>
    </div>

    <div class="col-md-6 col-md-offset-3 textoBloque1 calculoIMC backgroundCalorias" >
            <p class="textoEncabezado">Calculadora de calorías diarias</p>
        <form method="post" id="formulario">
            <label class="col-md-12" for="peso"> Peso en Kg</label>
            <input  type="number" name="peso" id="peso" step="0.01"/><br/><br/>
            <label class="col-md-12" for="altura"> Altura en m</label>
            <input  type="number" name="altura" id="altura" step="0.01"/><br/><br/>
            <div class="col-md-12">
            <p>Sexo</p>
            <label  for="hombre"> Hombre</label>
            <input  type="radio" name="sexo" value="hombre"id="hombre" />
            <label for="mujer"> Mujer</label>
            <input  type="radio" name="sexo" value="mujer"id="mujer"/><br/><br/>
            </div>


            <label class="col-md-12" for="edad"> Edad</label>
            <input  type="number" name="edad" id="edad"/><br/><br/>

            <div class="form-group">
                <label for="nivelActividadFisica">Nivel de actividad física:</label>
                <select class="form-control" name="nivelActividadFisica" id="nivelActividadFisica">
                    <option value="1">Poco o ningún ejercicio</option>
                    <option value="2">Ejercicio ligero (1-3 días a la semana)</option>
                    <option value="3">Ejercicio moderado (3-5 días a la semana)</option>
                    <option value="4">Ejercicio fuerte (6-7 días a la semana)</option>
                    <option value="5">Ejercicio muy fuerte (dos veces al día, entrenamientos muy duros)</option>
                </select>
            </div>

            <button class="btn btn-primary btn-lg btn-block" id="enviar" type="button"> Calcula tu IMC </button><br/>
            <div id="resultado" class="col-md-12"> </div>

        </form>

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