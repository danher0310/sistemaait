<?php
ini_set('display_errors', 1);//visualizacion de errores
$host   = "localhost";
$user   = "root";
$pass   = 'clon.21079951';
$db     = 'sistemait';
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
	echo "Error: ".$mysqli->connect_error;
}

//probando pdo//

/**
 * conectar
 */
/*class db
{
	public function conectar(){
		$host   = "localhost";
		$user   = "root";
		$pass   = 'clon.21079951';
		$db     = 'sistemait';

		try {
			$link = new PDO("mysql:host=$host; dbname= $db;" , $user, $pass);
			$link->exec("set name utf8");

			return $link;
		}catch(PDOException $e){
			echo "Failed to get DB Handle: ". $e->getMessage();
			exit;
		}
	}
	
	
}*/


?>