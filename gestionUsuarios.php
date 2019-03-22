   <?php include 'assets/headerf.php'; ?>
	<?php 
	include 'assets/head.php'; 
	include 'assets/php/conexion.php';

	?>
	
	
	<?php 
	 

	$sql2 = "SELECT count(id) FROM usuario";
	$query = $mysqli->query($sql2);
	$users = $query->fetch_array(); 
	$total = $users[0];
	$paginas = ceil($total/5);
	?>
	<!--/navbar-->

	<section id="gestion-usuario">
		<div class="container-fluid">
			<div class="row">
				<h2 class="text-center" id="title-table"> Gestion de Usuario</h2>
				
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                &times;
            </span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
      </div>
      <div class="modal-body">
        <form action="#" class="form-group">
            <input type="hidden" id="idEdit" >
           <label for="editName">
               Nombre
           </label>
           <input type="text" class="form-control" id="editName">
           <hr>
            <label for="editUsername">
                Cedula
            </label>
            <input type="text" class="form-control" id="editCedula">
            <hr>
            <label for="editCorreo">
                Correo
            </label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="editCorreo">
                </div>  
                
            </div>
            <hr>
            <label for="editPass">
                Contraseña
            </label>
            <input type="password" class="form-control" id="editPass">
            <hr>
            <label for="editConfirm">
                Confirmacion
            </label>
            <input type="password" class="form-control" id="editConfirm">
            <hr>
            <div class="col-md-6">
                    <label for="editUsuario">
                       Usuario
                    </label>
                    <input type="text" name="editdireccion" id="editUsuario" class="form-control">
            </div>

            <div class="col-md-6">
                    <label for="editTusuario">
                       Tipo de Usuario
                    </label>
                    <input type="text" name="editdireccion" id="editTusuario" class="form-control">
            </div>
            <label for="editType">
                Tipo de Usuario
            </label>
            <div class="row">
                <div class="col-md-6">
                    <select id="editType" class="form-control">
                        <option value="user">Analista</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                
            </div>
            <hr>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="updateUsuario()">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiarEditarUsuario()">Cerrar</button>
      </div>
    </div>
  </div>
</div>


	<!--script-->
	<?php include 'assets/script.php'; ?>

	<script>
	    $(document).ready(function(){
	    $("#result").load("assets/php/session/tablaUsuarios.php");
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
	    }).on("page",function(e,num){
	        $("#result").load("assets/php/session/tablaUsuarios.php", {'page':num});
		    });
		    
		});
	</script>
	<!--/script-->




</body>
</html>