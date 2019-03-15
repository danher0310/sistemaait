<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include('conexion.php');

$equipo = isset($_POST['equipo'])?$_POST['equipo']:null;
$serial = isset($_POST['serial'])?$_POST['serial']:null;
$marca = isset($_POST['marca'])?$_POST['marca']:null;
$memoria	= isset($_POST['memoria'])?$_POST['memoria']:null;
$discod 	= isset($_POST['discod'])?$_POST['discod']:null;
$monitor = isset($_POST['monitor'])?$_POST['monitor']:null;
$serialmon	= isset($_POST['serialmon'])?$_POST['serialmon']:null;
$serialmous = isset($_POST['serialmous'])?$_POST['serialmous']:null;
$serialtec 	= isset($_POST['serialtec'])?$_POST['serialtec']:null;
$extras 	= isset($_POST['extras'])?$_POST['extras']:null;
$fecha 		= isset($_POST['fecha'])?$_POST['fecha']:null;

$fechaca = new DateTime($fecha);
$fechaca->add(new DateInterval('P6M'));
$fechamo = $fechaca->format('d/m/Y'); 

$fechagu = date('Y-m-d',strtotime($fechamo));

$data = array('Success' => false, 'Msg' => '', 'Error' => '');

if(!empty($equipo) && !empty($serial) && !empty($marca) && !empty($memoria) && !empty($discod)  && !empty($monitor)  && !empty($extras) && !empty($fecha)){

	$sql = "SELECT seriale FROM equipos WHERE seriale = '$serial' ";
	$result = $mysqli->query($sql);

		if($result->num_rows == 0){

			$sql2 = "SELECT serialmon FROM equipos WHERE serialmon =  '$serialmon' ";
			$result2 = $mysqli->query($sql2);

			if($result2->num_rows==0){

				$sql3 = "SELECT serialmous FROM equipos WHERE serialmous = '$serialmous' ";
				$result3 = $mysqli->query($sql3);

				if($result3->num_rows == 0){

					$sql4 = "SELECT serialtec FROM equipos WHERE serialtec = '$serialtec' ";
					$result4 = $mysqli->query($sql4);

					if($result4->num_rows ==0){
						$sqlf = sprintf("INSERT INTO equipos(equipo, seriale, marca, memoria, discod, monitor, serialmon, serialmous, serialtec, extras, fechai, fechaf) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",

							mysqli_real_escape_string($mysqli, $equipo),
							mysqli_real_escape_string($mysqli, $serial),
							mysqli_real_escape_string($mysqli, $marca),
							mysqli_real_escape_string($mysqli, $memoria),
							mysqli_real_escape_string($mysqli, $discod), 
							mysqli_real_escape_string($mysqli, $monitor),
							mysqli_real_escape_string($mysqli, $serialmon),
							mysqli_real_escape_string($mysqli, $serialmous),
							mysqli_real_escape_string($mysqli, $serialtec),
							mysqli_real_escape_string($mysqli, $extras),
							mysqli_real_escape_string($mysqli, $fecha), 
							mysqli_real_escape_string($mysqli, $fechagu)
							);

							if ($mysqli->query($sqlf)) {
								$data['Success'] = true;
								$data['Msg']     = 'El equipo '.$serial. 'fue registrado exitosamente y su proximo \n mantemiento es ' .$fechamo;
							} else {
								$data['Msg']   = 'Ocurrio un error al momenot de registrar';
								$data['Error'] = $mysqli->error;
							}
					}else{
						$data['Msg'] = 'El Serial del teclado ya esta asignado a otro equipo';
					}

				}else{
					$data['Msg'] = 'El Serial del mouse ya esta asignado a otro equipo';
				}
			}else{
				$data['Msg'] = 'El Serial del monitor ya esta asignado a otro equipo';
			}
			

		}else{
			$data['Msg'] = 'El serial de este equipo ya fue registrado';
		}
	
	
}else{
		$data['Msg'] = 'Todos los campos deben Completarse'; 
}

echo json_encode($data);
 ?>