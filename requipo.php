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
					<h2 class="text-center"> Registro de equipo</h2>

					<p class="text-center"> En el siguiente formulario en caso de registrar una laptop en la seccion de periferico si no posee uno asignado colocar N/A</p>
					
				</div>
				<!--<div id="div1" onclick="this.style.display='none';document.getElementById('div2').style.display='block';">contendido del div1</div>
				<div id="div2" style="display:none" onclick="this.style.display='none';document.getElementById('div1').style.display='block';">contendido del div2</div>-->
				
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="col-md-12 center-block" >
				<div class="container-fluid" id="formulario" >

					<form  id="registrar-equipo">

			 		 	 <div class="input-group">
			 		 	 	 <span class="input-group-addon">Equipo:</span>	                    	
	                        <input class="form-control" type="text"  placeholder="Desktop" aria-describedby="basic-addon3" id="equipo" >
	                    </div>
	                    
	                    <div class="input-group" >    
					       <span class="input-group-addon">Serial</span>                    	
	                        <input class="form-control" type="text"  placeholder="Q234ERC2" aria-describedby="basic-addon3" id="serial" >
					    </div>
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Marca:</span>
	                        <input class="form-control" type="text"  placeholder="Lenovo" id="marca" >
	                    </div>     
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">RAM:</span>
	                        <input class="form-control" type="text"  placeholder="2GB" id="ram" >
	                    </div> 
	                     <div class="input-group">
			 		 	 	<span class="input-group-addon">HDD o SSD:</span>
	                        <input class="form-control" type="text"  placeholder="500GB" id="hdd" >
	                    </div> 

	                    	<h3 class="text-center"> Perifericos</h3>

	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Monitor:</span>
	                        <input class="form-control" type="text"  placeholder="LG 15" id="monitor" >
	                    </div> 
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Serial del Monitor:</span>
	                        <input class="form-control" type="text"  placeholder="Qrv" id="serialmon" >
	                    </div> 
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Serial mouse:</span>
	                        <input class="form-control" type="text"  placeholder="TQEDS815" id="smouse" >
	                    </div> 
	                   
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Serial teclado:</span>
	                        <input class="form-control" type="text"  placeholder="TR45GD" id="steclado" >
	                    </div> 

	                    <div class="input-group">
			 		 	 	<span class="input-group-addon"> Perifericos adicionales:</span>
	                        <textarea name="descripcion" class="form-control" type="text"  placeholder="Cornetas seriales: Qasdef, rusuarios.phptarjeta de red" id="extrasperi" ></textarea>
	                    </div> 
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Fecha del ultimo Mantenimiento:</span>
	                        <input class="form-control" type="date"  placeholder="TR45GD" id="mantenimiento" >
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