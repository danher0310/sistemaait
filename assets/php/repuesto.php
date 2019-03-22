<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include('conexion.php');

$repuesto = 	isset($_POST['repuesto'])?$_POST['repuesto']:null;
$descripcion =	isset($_POST['descripcion'])?$_POST['descripcion']:null;
$serial =		isset($_POST['serial'])?$_POST['serial']:null;
$marca =		isset($_POST['marca'])?$_POST['marca']:null;

$data = array('Success' => false, 'Msg' => '', 'Error' => '');

if(!empty($repuesto) && !empty($descripcion) && !empty($serial) && !empty($marca)){

	$sql = "SELECT seriale FROM repuestos WHERE seriale = '$serial' ";
	$result = $mysqli->query($sql);

	if($result->num_rows == 0 ){
		$sql2 = sprintf("INSERT INTO repuestos (repuesto, descripcion, seriale, marca) VALUES ('%s', '%s', '%s', '%s') ",
		mysqli_real_escape_string($mysqli, $repuesto),
		mysqli_real_escape_string($mysqli, $descripcion),
		mysqli_real_escape_string($mysqli, $serial),
		mysqli_real_escape_string($mysqli, $marca)

		);
		if ($mysqli->query($sql2)) {
				$data['Success'] = true;
				$data['Msg']     = 'El Repuesto '.$serial. ' fue registrado exitosamente  ';
		} else {
			$data['Msg']   = 'Ocurrio un error al momenot de registrar';
			$data['Error'] = $mysqli->error;
		}

	}else{
		$data['Msg'] = 'Este repuesto ya fue registrado';
	}

}else{
	$data['Msg'] = ' Todos los campos deben ser completados';
}


echo json_encode($data);
 ?>