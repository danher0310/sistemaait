   <?php include 'assets/headerf.php'; ?>
	<?php 
	include 'assets/head.php'; 
	include 'assets/php/conexion.php';

	?>
	<?php 
	include 'assets/head.php'; 
	include 'assets/php/conexion.php';

	?>
	
	

	<!--navbar-->
	<?php 


	$sql2 = "SELECT count(id) FROM equipos";
	$query = $mysqli->query($sql2);
	$users = $query->fetch_array(); 
	$total = $users[0];
	$paginas = ceil($total/5);
	?>
	<!--/navbar-->

	<section id="gestion-usuario">
		<div class="container-fluid">
			<div class="row">
				<h2 class="text-center" id="title-table"> Asignacion de Equipo</h2>
				
			</div>
			
		</div>

		<div id="result"></div>  
		
		<div class="row">
		    <div class="text-center">
		        <div class="pagination"></div>
		    </div>
		</div>
		    
	</section>



	<!--
|----------------------------------------------------------
|       VENTANA MODAL PARA EDITAR USUARIOS
|----------------------------------------------------------
   -->   

<!-- Modal -->
<div class="modal fade" id="editAsignar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                &times;
            </span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editar Equipo</h4>
      </div>
      <div class="modal-body">
        <form action="#" class="form-group">
            <input type="hidden" id="idEdit" >
           
            <label for="editEquipo">
                Equipo
            </label>
            <input type="text" class="form-control" id="editEquipo" disabled>
           
           
            <hr>
            <label for="editDescripcion">
                Serial
            </label>
            <input type="text" class="form-control" id="editSerial" disabled >
            <hr>
            <label for="editAsignado">
                Asignado
            </label>
             <input type="text" class="form-control" id="editAsignado" >
                                        
            <hr>
            <label for="editCedula">
                Cedula
            </label>
            <input type="text" class="form-control" id="editCedula">
            <hr>
             <label for="editDepartamento">
                Departamento
            </label>
            <input type="text" class="form-control" id="editDepartamento">
            <hr>
            


           
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateAsignar()">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarEditarUsuario()">Cerrar</button>
      </div>
    </div>
  </div>
</div>


	<!--script-->
	<?php include 'assets/script.php'; ?>

	<script>
	    $(document).ready(function(){
	    $("#result").load("assets/php/session/tablaAsignar.php");
	    $(".pagination").bootpag({
	        total: "<?php echo $paginas; ?>",
	        page: 1,
	        maxVisible: 5,
	        leaps: true,
	        firstLastUse: true, 
	        first: '←',
	        last: '→',
	        wrapClass: 'pagination',
	        activeClass: 'active',
	        disabledClass: 'disabled',
	        nextClass: 'next',
	        prevClass: 'prev',
	        lastClass: 'last',
	        firstClass: 'first'
	    }).on("page",function(event,num){
	        $("#result").load("assets/php/session/tablaAsignar.php", {'page':num});
		    });
		    
		});
	</script>
	<!--/script-->




</body>
</html>