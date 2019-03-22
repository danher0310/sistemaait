<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('../conexion.php');

if (isset($_POST['page'])) {
	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if (!is_numeric($page_number)) {
	    die('Numero invalido');
	}
}
else{
    $page_number = 1;
}   

$total_registros = 5; //visualizar 5 usuarios por paginas
$posicion = (($page_number - 1) * $total_registros);

$sql = "SELECT * from equipos ORDER BY fechaf DESC limit $posicion, $total_registros";
$query = $mysqli->query($sql);

echo "<table class='table table-bordered table-hover' style='font-size:15px; margin-left: auto; margin-right: auto; width: 80%'>";
	echo "<thead>";
		echo "<tr>";
            echo "<td>";
                echo "Equipo";
            echo "</td>";
            echo "<td>";
                echo "Serial";
            echo "</td>";
            echo "<td>";
                echo "Asignado";
            echo "</td>";
            echo "<td>";
                echo "Cedula";
            echo "</td>";
            echo "<td>";
                echo "Departamento";
            echo "</td>";
            

            echo "<td colspan='3'>";
                echo "Accion";
            echo "</td>";
        echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while ($row = $query->fetch_array()) {
		echo "<tr>";
            echo "<td>";
                echo $row['equipo'];
            echo "</td>";
            echo "<td>";
                echo $row['seriale'];
            echo "</td>";
            echo "<td>";
                echo $row['asignado'];
            echo "</td>";
            echo "<td>";
                echo $row['cedula'];
            echo "</td>";
            echo "<td>";
                echo $row['departamento'];
            echo "</td>";
            /*echo "<td>";
                echo "<button class='btn btn-info' onclick='mostrarUsuario(".$row['id'].")'> Ver </button>";
            echo "</td>";*/
            echo "<td>";
            	echo "<button class='btn btn-warning' onclick='asignar(".$row['id'].")'> Asignar </button>";
            echo "</td>";
            /*echo "<td>";
            	echo "<button class='btn btn-danger' onclick='eliminarEquipo(".$row['id'].")'>Eliminar</button>";               
            echo "</td>";*/
        echo "</tr>";
	}
	echo "</tbody>";
echo "</table>";
?>