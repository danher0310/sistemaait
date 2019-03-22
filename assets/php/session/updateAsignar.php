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
$equipo   = $_POST['equipo'];
$asignado     = $_POST['asignado'];
$cedula       = $_POST['cedula'];
$departamento   = $_POST['departamento'];



$data = ['Success' => false, 'Msg' => '', 'Error' => ''];




$sql = "SELECT id FROM equipos WHERE cedula = '$cedula'  ";
$result = $mysqli->query($sql);

	if ($result->num_rows == 0) {

		$sql = sprintf("UPDATE equipos SET asignado = '%s',
							cedula = '%s',
						departamento = '%s'
						WHERE id = '%d'  ",
						$mysqli->real_escape_string($asignado),
						$mysqli->real_escape_string($cedula),
						$mysqli->real_escape_string($departamento),
						$mysqli->real_escape_string($id));

		if($mysqli->query($sql)){
			$data['Success'] = true;
				$data['Msg'] = "Equipo Actualizado Exitosamente";
			}
			else{
				$data['Msg'] = 'Error al actualizar usuario. ';
				$data['Error'] =  $mysqli->error;
			}

		
	}else {
		
	$data['Msg'] = 'Esta persona ya posee un equipo asignado ';
	

	}

	echo json_encode($data)
 ?>