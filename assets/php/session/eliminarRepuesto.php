<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("../conexion.php");

$id = $_POST['id'];

$data = array('Success' => true , 'Msg' => '', 'Error' => '' );

$sqlde ="DELETE FROM repuestos WHERE id = $id";

if ($mysqli->query($sqlde)) {
	$data['Success'] = true;
	$data['Msg'] = "Equipo eliminado satisfactoriamente";
}
else{
	$data['Msg'] = 'No es posible eliminar en estos momentos';
	$data['Error'] = $mysqli->error;
}
echo json_encode($data);
 ?>
