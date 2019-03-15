<!DOCTYPE html>
<html>
<head>
	<!-- head-->
	<?php include 'assets/head.php'; ?>
	<!-- /head-->
	<title>Regsitro de usuario</title>
</head>
<body>

	<!--navbar-->
	<?php include 'assets/navbar.php'; ?>
	<!--/navbar-->

	<section id=" formularios">
		<div class=" container-fluid">
			<div class="row">
				<div class="col-md-12"id="formularios">
					<h2 class="text-center"> Registro de usuario</h2>
					
				</div>
				
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="col-md-12 center-block" >
				<div class="container-fluid" id="formulario" >

					<form  id="registrar-usuario">

			 		 	 <div class="input-group">
			 		 	 	 <span class="input-group-addon">Equipo:</span>	                    	
	                        <input class="form-control" type="text"  placeholder="Jhon Doe" aria-describedby="basic-addon3" id="name" >
	                    </div>
	                    
	                    <div class="input-group" >    
					       <span class="input-group-addon">Cedula</span>
					         <select id="t-cedula" name="t-cedula" class="form-control">
					         	<option value="">Seleccione</option>
						        <option value="V">V</option>
						        <option value="E">E</option>
						         <option value="P">P</option>
						    </select>
						    <span class="input-group-addon">-</span>
						     <input type="text" id="cedula" name="cedula"  class="form-control" id="cedula">
					    </div>
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Correo:</span>
	                        <input class="form-control" type="email"  placeholder="jhondoe@email.com" id="email" >
	                    </div>     
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Usuario:</span>
	                        <input class="form-control" type="text"  placeholder="jhondoe" id="usuario" >
	                    </div> 
	                     <div class="input-group">
			 		 	 	<span class="input-group-addon">Contraseña:</span>
	                        <input class="form-control" type="password"   id="password" >
	                    </div> 
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon"> Confirmacion de Contraseña:</span>
	                        <input class="form-control" type="password"   id="conf-pass" >
	                    </div> 


	                    <div class="input-group">
	                         <span class="input-group-addon">Tipo de usuario:</span>	
	                          <select id="t-usuario" name="cedula" class="form-control">
					         	<option value="">Seleccione</option>
						        <option value="usuario">Usuario</option>
						        <option value="administrador">Administrador</option>
						    </select>
	                    </div>            
	                   
	                   
	                    <div class="text-center" style= "margin-top: 40px">
	                        <button class="btn btn-form"   type="submit"> Registrar
	                        </button> 
	                    </div>
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