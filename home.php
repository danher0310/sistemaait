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

	<?php include 'assets/script.php'; ?>


	<!--script-->
	<?php include 'assets/script.php'; ?>

	<script>
	    $(document).ready(function(){
	    $("#result").load("assets/php/session/tablahome.php");
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
	        $("#result").load("assets/php/session/tablahome.php", {'page':num});
		    });
		    
		});
	</script>
	<!--/script-->

</body>
</html>
	

	
