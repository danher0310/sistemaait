<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include('conexion.php');

$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
$cedula = isset($_POST['cedula'])?$_POST['cedula']:null;
$correo = isset($_POST['correo'])?$_POST['correo']:null;
$user	= isset($_POST['user'])?$_POST['user']:null;
$pass 	= isset($_POST['pass'])?$_POST['pass']:null;
$conpas = isset($_POST['conpas'])?$_POST['conpas']:null;
$tuser	= isset($_POST['tuser'])?$_POST['tuser']:null;

$data = array('Success' => false, 'Msg' => '', 'Error' => '');

if(!empty($nombre) && !empty($cedula) && !empty($correo) && !empty($user) && !empty($pass) && !empty($conpas) && !empty($tuser)){

	if($pass == $conpas){
		if (strlen($pass) > 7 && strlen($pass) < 17){
			list($v_e_p, $num_cedula) = explode("-", $cedula);
			if (is_numeric($num_cedula)){ 

				$user = strtoupper(trim($user));
				#elimina los espacios en blanco y pone el nombre de usuario en mayus.
				#validando el nombre del usuario
				$sql    = "SELECT usuario FROM usuario WHERE usuario = '$user'";
				$result = $mysqli->query($sql);
				if ($result->num_rows == 0){

					$sql2 = " SELECT cedula FROM usuario WHERE  cedula = '$num_cedula'";
					$result2 = $mysqli->query($sql2);

					if($result2->num_rows ==0){
						if (strlen($user) > 5 && strlen($user) < 11){

							$pass = sha1(md5($pass));
							$sql = sprintf("INSERT INTO usuario(nombre, cedula, correo, usuario, password, tusuario) VALUES ('%s','%s','%s','%s','%s', '%s')",
							mysqli_real_escape_string($mysqli, $nombre),
							mysqli_real_escape_string($mysqli, $v_e_p.'-'.$num_cedula),
							mysqli_real_escape_string($mysqli, $correo),
							mysqli_real_escape_string($mysqli, $user),
							mysqli_real_escape_string($mysqli, $pass),
							mysqli_real_escape_string($mysqli, $tuser )
							);
							if ($mysqli->query($sql)) {
								$data['Success'] = true;
								$data['Msg']     = 'Usuario '.$nombre.' registrado exitosamente';
							} else {
								$data['Msg']   = 'Ocurrio un error al momenot de registrar';
								$data['Error'] = $mysqli->error;
							}



						}else{
							$data['Msg'] = 'El nombre de usuario debe contener de 6 a 10 caracteres';
						}


					} else{
						$data['Msg'] = 'Este numero de cedula ya fue registrado';
					}


				}else{
					$data['Msg'] = 'Este nombre de usuario ya existe';
				}

			}else{
				$data['Msg'] = 'Numero de cedula no valido';
			}

		}else{
			$data['Msg'] = 'La contraseña debe tener un minimo de 6 caracteres y un maximo de 16';
		}

	}else{
		$data['Msg'] = 'Las contraseñas no coincides';
	}

}else{
	$data['Msg'] = 'Todos los campos deben Completarse';
}
echo json_encode($data);
 ?>