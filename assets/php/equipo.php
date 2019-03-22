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

$nombre 	= isset($_POST['nombre'])?$_POST['nombre']:null;
$cedula		= isset($_POST['cedula'])?$_POST['cedula']:null;
$depart		= isset($_POST['departamento'])?$_POST['departamento']:null;

$fechaca = new DateTime($fecha);
$fechaca->add(new DateInterval('P6M'));
$fechamo = $fechaca->format('d/m/Y'); 

/*$fechagu = date('Y-m-d',strtotime($fechamo));*/

$fechagu = $fechaca->format('Y-m-d'); 

$data = array('Success' => false, 'Msg' => '', 'Error' => '');

if(!empty($equipo) && !empty($serial) && !empty($marca) && !empty($memoria) && !empty($discod) && !empty($fecha)){

	$sql = "SELECT seriale FROM equipos WHERE seriale = '$serial' ";
	$result = $mysqli->query($sql);

	if($result->num_rows == 0){

		if(!empty($monitor) && !empty($serialmon) && !empty($serialmouse) && !empty($serialtec) && !empty($extras)){

			if(!empty($nombre) && !empty($cedula) && !empty($depart)){

				$sqlc = "SELECT cedula FROM equipos WHERE cedula = '$cedula'  ";
				$resultc = $mysqli->query($sqlc);

				if($resultc->num_rows == 0){
					
					$sql2 = "SELECT serialmon FROM equipos WHERE serialmon =  '$serialmon' ";
					$result2 = $mysqli->query($sql2);

					if($result2->num_rows==0){
						$sql3 = "SELECT serialmous FROM equipos WHERE serialmous = '$serialmous' ";
						$result3 = $mysqli->query($sql3);

						if($result3->num_rows == 0){

							$sql4 = "SELECT serialtec FROM equipos WHERE serialtec = '$serialtec' ";
							$result4 = $mysqli->query($sql4);

							if($result4->num_rows ==0){

								$sqlf = sprintf("INSERT INTO equipos(equipo, seriale, marca, memoria, discod, monitor, serialmon, serialmous, serialtec, extras, fechai, fechaf, asignado, cedula, departamento) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
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
									mysqli_real_escape_string($mysqli, $fechagu),
									mysqli_real_escape_string($mysqli, $nombre),
									mysqli_real_escape_string($mysqli, $cedula), 
									mysqli_real_escape_string($mysqli, $depart)
										);
									if ($mysqli->query($sqlf)) {
										$data['Success'] = true;
										$data['Msg']     = 'El equipo '.$serial. ' fue registrado exitosamente y su proximo mantemiento es ' .$fechamo. ' Y este equipo esta asignado a '.$nombre. ' Perteneciente al departamento' .$depart;
									} else {
										$data['Msg']   = 'Ocurrio un error al momenot de registrar';
										$data['Error'] = $mysqli->error;
									}

							}else{
								$data['Msg'] = 'Este teclado ya fue asignado a otro equipo';
							}

						}else{
							$data['Msg'] = 'Este mouse ya esta asignado a un equipo';
						}
					}else{
						$data['Msg'] = 'Este monitor ya esta asignado a un equipo';
					}
				}else{
					$data['Msg'] = 'Ya esta persona tiene asignado un equipo';
				}


			}else{
				$sqlfcpsa = sprintf("INSERT INTO equipos(equipo, seriale, marca, memoria, discod, monitor, serialmon, serialmous, serialtec, extras, fechai, fechaf) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",

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

				if ($mysqli->query($sqlcpsa)) {
					$data['Success'] = true;
					$data['Msg']     = 'El equipo '.$serial. ' fue registrado exitosamente y su proximo mantemiento es ' .$fechamo. '  Este equipo no ha sido asignado a ningun usuario';
				} else {
					$data['Msg']   = 'Ocurrio un error al momenot de registrar';
					$data['Error'] = $mysqli->error;
				}
			}


		}elseif(!empty($nombre) && !empty($cedula) && !empty($depart)){
			$sqlc = "SELECT cedula FROM equipos WHERE cedula = '$cedula' ";
			$resultc = $mysqli->query($sqlc);

			if($resultc->num_rows == 0){

				$sqlfsp = sprintf("INSERT INTO equipos(equipo, seriale, marca, memoria, discod, fechai, fechaf, asignado, cedula, departamento) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
					mysqli_real_escape_string($mysqli, $equipo),
					mysqli_real_escape_string($mysqli, $serial),
					mysqli_real_escape_string($mysqli, $marca),
					mysqli_real_escape_string($mysqli, $memoria),
					mysqli_real_escape_string($mysqli, $discod), 
					mysqli_real_escape_string($mysqli, $fecha), 
					mysqli_real_escape_string($mysqli, $fechagu),
					mysqli_real_escape_string($mysqli, $nombre),
					mysqli_real_escape_string($mysqli, $cedula), 
					mysqli_real_escape_string($mysqli, $depart)
						);
					if ($mysqli->query($sqlfsp)) {
						$data['Success'] = true;
						$data['Msg']     = 'El equipo '.$serial. ' fue registrado exitosamente y su proximo mantemiento es ' .$fechamo. ' Y este equipo esta asignado a '.$nombre. ' Perteneciente al departamento ' .$depart;
					} else {
						$data['Msg']   = 'Ocurrio un error al momento de registrar con asignacion';
						$data['Error'] = $mysqli->error;
					}

			}else{
				$data['Msg'] = 'Este usuaro ya tiene un equipo asignado';
			}

		}else{



			$sqlspsa = sprintf("INSERT INTO equipos(equipo, seriale, marca, memoria, discod, fechai, fechaf) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s') ",

			mysqli_real_escape_string($mysqli, $equipo),
			mysqli_real_escape_string($mysqli, $serial),
			mysqli_real_escape_string($mysqli, $marca),
			mysqli_real_escape_string($mysqli, $memoria),
			mysqli_real_escape_string($mysqli, $discod), 				
			mysqli_real_escape_string($mysqli, $fecha), 
			mysqli_real_escape_string($mysqli, $fechagu)
			);

			if ($mysqli->query($sqlspsa)) {
				$data['Success'] = true;
				$data['Msg']     = 'El equipo '.$serial. ' fue registrado exitosamente y su proximo mantemiento es '.$fecha.'  Este equipo no ha sido asignado a ningun usuario';
			} else {
				$data['Msg']   = 'Ocurrio un error al momento de registrar sin perifericos sin asginar';
				$data['Error'] = $mysqli->error;
			}

		}//fin validadcion monitor y demas y elseif

	}else{
		$data['Msg']= ' Este equipo ya esta registrado';
	}

}else{
		$data['Msg'] = 'Todos los campos de la seccion del equipo deben Completarse'; 
}//fin primer if

echo json_encode($data);
 ?>