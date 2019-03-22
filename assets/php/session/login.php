<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include("../conexion.php");

session_start();
$data = array('Success' => false,'Msg' => '','Error' => '' );

$user = $_POST['user']; 
$user = strtoupper(trim($user));
$pass = sha1(md5($_POST['pass']));


$sql = sprintf("SELECT * FROM usuario WHERE usuario = '%s' and password = '%s'",
	$mysqli->real_escape_string($user),
	$mysqli->real_escape_string($pass));

$query = $mysqli->query($sql);

if ($query->num_rows == 1) {

	$result = $query->fetch_array();
    
	$_SESSION['username'] = $result['usuario'];
	$_SESSION['nombre'] = $result['nombre'];
	$_SESSION['correo'] = $result['correo'];
	$_SESSION['cedula'] = $result['cedula'];

	$_SESSION['tusuario'] = $result['tusuario'];

    
	$data['Success'] = true;
	$data['Msg'] = 'Bienvenido '.$result['nombre'];
	?>
	<script>
		alert("Bienvenido <?php echo $_SESSION['nombre']; ?>")
		window.location.href='../../../home.php';
	</script>
	<?php
	}
else{
	?>
	<script>
		alert('Usuario o clave incorrecta ');
		window.location.href='../../../index.php';
	</script>
	<?php 
}


 ?>