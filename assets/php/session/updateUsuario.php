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
$nombre     = $_POST['name'];
$cedula       = $_POST['cedula'];
$pass       = $_POST['pass'];
$confirm    = $_POST['confirm'];
$correo     = $_POST['correo'];
$type       = $_POST['type'];
$usuario     = $_POST['usuario'];

$data = ['Success' => false, 'Msg' => '','type' => $usuario];
if($pass == $confirm){	
	/*
    |--------------------------------------
    |   CONDICIONES
    |       * EL NOMBRE DE USUARIO NO PUEDE TENER ESPACIO EN BLANCO
    |       * LA CLAVE NO PUEDE TENER ESPACIOS EN BLANCO
    |       * LA CLAVE DEBE SER MAYOR A 5 CARACTERES Y MENOS A 17
    |           [6,16]
    |--------------------------------------
    */
    if (!empty($nombre)) {
    	if (preg_match('/\s/',$user) == 0 && !empty($user)) {
			if (preg_match('/\s/',$pass) == 0) {
				if (strlen($pass) > 5 and strlen($pass) < 17) {
					//expresion regular para emails
	               /* $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
	                if (preg_match($pattern,$correo)) {	*/					
	                	$sql = "SELECT id from usuario WHERE usuario = '$usuario' and correo = '$correo'";
						$result = $mysqli->query($sql);
						if ($result->num_rows > 0) {
	                		
							$pass = sha1(md5($pass));
							$sqlup = sprintf("UPDATE usuario 
								SET nombre = '%s', 
									password = '%s', 
									correo = '%s', 
									cedula = '%s', 
									tusuario = '%s',
									usuario = '%s'									
									WHERE id = '" .$id."'",
								$mysqli->real_escape_string($nombre),
					    		$mysqli->real_escape_string($pass),
					    		$mysqli->real_escape_string($correo),
					    		$mysqli->real_escape_string($cedula),
					    		$mysqli->real_escape_string($type),
					    		$mysqli->real_escape_string($usuario)
					    		/*$mysqli->real_escape_string($id)	*/);
							
							if ($mysqli->query($sqlup)) {
								$data['Success'] = true;
								$data['Msg'] = "Usuario Actualizado Exitosamente";
							}
							else{
								$data['Msg'] = 'Error al actualizar usuario. ';
								$data['Error'] =  ($mysqli->error == "Duplicate entry '$usuario' for key 'usuario'") ? "Nombre de usuario no disponible": $mysqli->error;
							}
	                	}
	                	else
	                		$data['Msg'] = "No existe un usuario con este correo: '$correo'";
	                	
	               /* }
	                else
	                	$data['Msg'] = 'El correo no puede estar en blanco';*/
				}
				else
					$data['Msg'] = 'La clave debe tener de 6 a 16'; 
			}
			else
				$data['Msg'] = 'La clave no debe poseer espacios en blancos'; 
			}
		else{
			$data['Msg'] = "El nombre de usuario no puede poseer espacios en blanco";
		}
    }
    else{
    	$data['Msg'] = "El nombre no puede poseer espacios en blanco";
    }
	
}
else{
    $data['Msg'] = utf8_encode('Contraseñas no coinciden');
}
echo json_encode($data);

 ?>