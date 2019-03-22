<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);
include("../conexion.php");


$id = $_POST['id'];

$sql = "SELECT * FROM usuario WHERE id = $id";

$query = $mysqli->query($sql);

$result = $query->fetch_array();

echo json_encode($result)
 ?>