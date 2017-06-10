<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/scripts.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Logueate</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrate</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="controlador.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
                                    <label id="lab" for="remember"> Recuerdame</label>
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button  name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" >Logueate</button>
											</div>
										</div>
										<div id="resultadoLogin" class="col-sm-6 col-sm-offset-3">
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Olvidó la contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="controlador.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Nombre de usuario" value="">
									</div>
                                    <div class="form-group">
										<input type="number" name="weight" id="weight" tabindex="1" class="form-control" placeholder="Peso" value="">
									</div>
                                    <div class="form-group">
										<input type="number" name="age" id="age" tabindex="1" class="form-control" placeholder="Edad" value="">
									</div>
                                    <div class="form-group">
										<input type="number" name="height" id="height" tabindex="1" class="form-control" placeholder="Altura" value="" step="0.01">
									</div>
									<div class="col-md-12 form-group center-block">
									<p>Sexo</p>
										<label  for="hombre"> Hombre</label>
										<input  type="radio" name="sexo" value="hombre"id="hombre" />
										<label for="mujer"> Mujer</label>
										<input  type="radio" name="sexo" value="mujer"id="mujer"/><br/><br/>
										</div>
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
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register">Registrate</button>
											</div>
										</div>
									</div>
									<div id="resultadoRegistro" class="col-sm-6 col-sm-offset-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="js/bootstrap.min.js">
</body>
</html>