<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);
include("../conexion.php");

$id = $_POST['id'];

$data = array('Success' => true , 'Msg' => '', 'Error' => '' );

$sql = "DELETE FROM usuario WHERE id = $id";

if ($mysqli->query($sql)) {
	$data['Success'] = true;
	$data['Msg'] = "Usuario eliminado satisfactoriamente";
}
else{
	$data['Msg'] = 'No es posible eliminar en estos momentos';
	$data['Error'] = $mysqli->error;
}
echo json_encode($data);
 ?>
