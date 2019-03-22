<header id="header" class="">
	<nav class="navbar navbar-default navbar-fixed-top" id="menu">
		<div class="container-fluid" id=" contenedor">
			<div class="navbar-header">
				<button type="button " class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="glyphicon glyphicon-menu-hamburger"  style="color: white;" aria-hidden="true"></span></i>
				</button>
				<a href="/" class="navbar-brand" title="">
					<img src="assets/img/759673.png" alt="logo" class="img-responsive" id="logo">
				</a>				
			</div>
			<div class="collapse navbar-collapse" id="menu">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" title=""><span class="glyphicon glyphicon-home" style="color: rgb(5,67,87) "></span> Home</a></li>
                    
					<li class="dropdown">
                         <?php if ($_SESSION['tusuario'] == 'administrador'): ?>
                            
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Usuario  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" style="color: rgb(5,67,87) "></span></a> 
                        <?php endif; ?>
                        <ul class="dropdown-menu" id="menu2">
                            <?php if ($_SESSION['tusuario'] == 'administrador'): ?>

                            <li><a href="rusuarios.php">Registrar</a></li>
                            <?php endif; ?>
                            
                            <?php if ($_SESSION['tusuario'] == 'administrador'): ?>
                              <li><a href="gestionUsuarios.php">Modificarl</a></li>  
                            <?php endif; ?>
                            

                        </ul>
                    </li>
					<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Equipo  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" style="color: rgb(5,67,87) "></span></a> 
                        <ul class="dropdown-menu" id="menu2">
                            <li><a href="requipo.php">Registrar</a></li>
                            <li><a href="gestionEquipo.php">Modificarl</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Repuesto  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true" style="color: rgb(5,67,87) "></span></a> 
                        <ul class="dropdown-menu" id="menu2">
                            <li><a href="rrepuesto.php">Registrar</a></li>
                            <li><a href="gestionRepuesto.php">Modificarl</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="asignar.php" title="">Asignar</a>
                    </li>
                    <li class="">
                        
                        <a href="assets/php/session/logout.php" onclick="" title="" disabled>Cerrar Session</a>

                         
                    </li>

                    
					
				</ul>
				
			</div>
		</div>
		
	</nav>


    <div class="col-md-offset-3">
                <div id="loader" hidden="true">
                    <!-- Circulo de carga -->
                </div>
            </div>
	
</header>
<script>
    function cerrarSesion(){
        console.log("assets/php/session/logout.php");
        $.confirm({
            title:'Confirmar',
            content:'Desea realmente cerrar sesion?',
            confirm:function(){
                window.location.href = '/index.php'
            },
            cancel:function(){}
        });
    }
</script>
<!-- /header -->