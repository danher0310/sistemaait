<?php 
session_start();

if (isset($_SESSION['username'])) {
    header('location:home.php');
    exit(); 
}
 ?>


<!DOCTYPE html>
<html>
<!-- head-->
	<?php include 'assets/head.php'; ?>
	<!-- /head-->
	<title>Sistema</title>
</head>
<body>

	<!--navbar-->
	<?php include 'assets/navbar.php' ?>
	<!--/navbar-->


	<section id=" formularios">
		<div class=" container-fluid">
			<div class="row">
				<div class="col-md-12"id="formularios">
					<h2 class="text-center"> Inicio de Session</h2>
					
				</div>
				
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="col-md-12 center-block" >
				<div class="container-fluid" id="formulario" >

					<form action="assets/php/session/login.php" method="POST" class="form-group">

			 		 	 <div class="panel-body">
                           <!--Nombre de Usuario-->
                                <label for="username">
                                    Nombre de Usuario
                                </label>
                                <input type="text" name="user" id="username" class="form-control" placeholder="Nombre del usuario">
                                <hr>
                            <!--Contraseña del usuario-->
                                <label for="pass">
                                    Contraseña
                                </label>
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="******">
                            </div>
                            <div class="panel-footer">
                            <input type="submit" class="btn btn-success" value="Iniciar Session">
                               <!-- Botones Para iniciar sesion/reset formulario-->
                            <input type="reset" class="btn btn-warning" value="Cancelar">
                           
                	</form>
					
				</div>
				
			</div>
			
		</div>
		
	</section>

	

	<!--script-->
	<?php include 'assets/script.php'; ?>
	<!--/script-->
	
</body>
</html>