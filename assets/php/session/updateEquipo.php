<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("../conexion.php");
/*
|--------------------------------------
|   RECIBIENDO VALORES
|--------------------------------------
*/
//var_dump($_POST);
$id 		= $_POST['id'];
$serial = $_POST['serial'];
$memoria   = $_POST['memoria'];
$disco       = $_POST['disco'];
$fecha       = $_POST['fecha'];
$monitor    = $_POST['monitor'];
$serialm    = $_POST['serialm'];
$serialmo    = $_POST['serialmo'];
$serialtec    = $_POST['serialtec'];
$extras = $_POST['extra'];

$fechaca = new DateTime($fecha);
$fechaca->add(new DateInterval('P6M'));
$fechamo = $fechaca->format('d/m/Y'); 

$fechagu = $fechaca->format('Y-m-d'); 


$data = ['Success' => false, 'Msg' => '', 'type' => $serial];

if(!empty($monitor) && !empty($serialm) && !empty($serialmo) && !empty($serialtec) && !empty($extras)){

	$sql = "SELECT id FROM equipos WHERE seriale = '$serial'  ";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		
		$sqlup = sprintf("UPDATE equipos 
						SET memoria ='%s',
						discod = '%s',
						monitor = '%s',
						serialmon = '%s',
						serialmous = '%s',
						serialtec = '%s',
						extras = '%s',
						fechai = '%s',
						fechaf = '%s'

						WHERE id = '%d' ",
		$mysqli->real_escape_string($memoria),
		$mysqli->real_escape_string($disco),
		$mysqli->real_escape_string($monitor),
		$mysqli->real_escape_string($serialm),
		$mysqli->real_escape_string($serialmo),
		$mysqli->real_escape_string($serialtec),
		$mysqli->real_escape_string($extras), 
		$mysqli->real_escape_string($fecha),
		$mysqli->real_escape_string($fechagu),
		$mysqli->real_escape_string($id)
	);	

		if ($mysqli->query($sqlup)) {
				$data['Success'] = true;
				$data['Msg'] = "Equipo Actualizado Exitosamente";
			}
			else{
				$data['Msg'] = 'Error al actualizar usuario. ';
				$data['Error'] =  $mysqli->error;
			}

}else {
	$data['Msg'] = 'Debe completar todos los perifericos. ';
	
		} 
}else{

	$sql = "SELECT id FROM equipos WHERE seriale = '$serial'  ";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {

		$sqlup = sprintf("UPDATE equipos 
						SET memoria ='%s',
						discod = '%s',								
						fechai = '%s',
						fechaf = '%s'
						WHERE id = '%d' ",
		$mysqli->real_escape_string($memoria),
		$mysqli->real_escape_string($disco),	
		$mysqli->real_escape_string($fecha),
		$mysqli->real_escape_string($fechagu),
		$mysqli->real_escape_string($id)
	);	

		if ($mysqli->query($sqlup)) {
				$data['Success'] = true;
				$data['Msg'] = "Equipo Actualizado Exitosamente";
			}
		}
			else{
				$data['Msg'] = 'Error al actualizar equipo. ';
				$data['Error'] = $mysqli->error;
			}

}

echo json_encode($data);

 ?>