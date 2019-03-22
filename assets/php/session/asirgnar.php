<!DOCTYPE html>
<html>
<head>
	<!-- head-->
	<?php 
	include 'assets/head.php'; 
	include 'assets/php/conexion.php';

	?>
	
	<!-- /head-->
	<title>Modificar equipo</title>
</head>
<body>

	<!--navbar-->
	<?php 
	include 'assets/navbar.php'; 

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
				<h2 class="text-center" id="title-table"> Gestion de Equipo</h2>
				
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
           
            <label for="editSerial">
                Serial
            </label>
            <input type="text" class="form-control" id="editSerial" disabled>
            <hr>
            <label for="editMarca">
                Marca
            </label>
             <input type="text" class="form-control" id="editMarca" disabled>
                                        
            <hr>
            <label for="editMemoria">
                Memoria
            </label>
            <input type="text" class="form-control" id="editMemoria">
            <hr>
            <label for="editDisco">
                Disco Duro
            </label>
            <input type="text" class="form-control" id="editDisco">
            <hr>
            <label for="editFechas">
                Fecha del ultimo mantenimiento
            </label>            
            <input type="text" class="form-control" id="editFechas" disabled>
            <hr>
             <label for="editFecha">
                Fecha del nuevo mantenimiento 
            </label>
            <input type="date" class="form-control" id="editFecha">
            <hr>
            <p>Si no se le realizao mantenimiento coloque la fecha recordada ateriormente</p>
            <label for="editMonitor">
                Monitor
            </label>
            <input type="text" class="form-control" id="editMonitor">
            <hr>
            <label for="editSerialm">
                Serial de Monitor
            </label>
            <input type="text" class="form-control" id="editSerialm">
            <hr>
            <label for="editSerialmo">
                Serial del Mouse
            </label>
            <input type="text" class="form-control" id="editSerialmo">
            <hr>
            <label for="editTec">
                Serial del Teclado
            </label>
            <input type="text" class="form-control" id="editTecr">
            <hr>
            <label for="editExtras">
                Perifericos extras
            </label>
            <input type="text" class="form-control" id="editExtras">
            <hr>
            


           
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateEquipo()">Actualizar</button>
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