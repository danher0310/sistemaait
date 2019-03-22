

<?php include 'assets/headerf.php'; ?>
	
	<section id=" formularios">
		<div class=" container-fluid">
			<div class="row">
				<div class="col-md-12"id="formularios">
					<h2 class="text-center"> Registro de repuestos</h2>
					
				</div>
				
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="col-md-12 center-block" >
				<div class="container-fluid" id="formulario" >

					<form  id="registrar-repuesto">

			 		 	  <div class="input-group">
			 		 	 	 <span class="input-group-addon">Repuesto:</span>	                    	
	                        <input class="form-control" type="text"  placeholder="Memoria" aria-describedby="basic-addon3" id="repuesto" >
	                    </div>
	                    
	                    <div class="input-group" >    
					       <span class="input-group-addon">Descripción</span>                    	
	                        <input class="form-control" type="text"  placeholder="4gb" aria-describedby="basic-addon3" id="descripcion" >
					    </div>
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Serial:</span>
	                        <input class="form-control" type="text"  placeholder="Mas34f2o" id="serial" >
	                    </div>     
	                    <div class="input-group">
			 		 	 	<span class="input-group-addon">Marca:</span>
	                        <input class="form-control" type="text"  placeholder="Corsair" id="marca" >
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