   <?php include 'assets/headerf.php'; ?>
	<?php 
	include 'assets/head.php'; 
	include 'assets/php/conexion.php';

	

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
				<h2 class="text-center" id="title-table"> Gestion de Repuesto</h2>
				
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
<div class="modal fade" id="editRepuesto" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
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
           
            <label for="editRepuesto">
                Repuesto
            </label>
            <input type="text" class="form-control" id="editRepuesto" disabled>
            <hr>
            <label for="editDescripcion">
                Serial
            </label>
            <input type="text" class="form-control" id="editSerial">
            <hr>
            <label for="editMarca">
                Marca
            </label>
             <input type="text" class="form-control" id="editMarca" disabled>
                                        
            <hr>
            <label for="editDescripcion">
                Descripcion
            </label>
            <input type="text" class="form-control" id="editDescripcion">
            <hr>
            
            <hr>
            


           
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateRepuesto()">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarEditarUsuario()">Cerrar</button>
      </div>
    </div>
  </div>
</div>


	<!--script-->
	<?php include 'assets/script.php'; ?>

	<script>
	    $(document).ready(function(){
	    $("#result").load("assets/php/session/tablaRepuesto.php");
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
	        $("#result").load("assets/php/session/tablaRepuesto.php", {'page':num});
		    });
		    
		});
	</script>
	<!--/script-->




</body>
</html>