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

$sql = "SELECT * from usuario ORDER BY id DESC limit $posicion, $total_registros";
$query = $mysqli->query($sql);

echo "<table class='table table-bordered table-hover' style='font-size:15px; margin-left: auto; margin-right: auto; width: 80%'>";
	echo "<thead>";
		echo "<tr>";
            echo "<td>";
                echo "Nombre";
            echo "</td>";
            echo "<td>";
                echo "Cedula";
            echo "</td>";
            echo "<td>";
                echo "Correo";
            echo "</td>";
            echo "<td>";
                echo "Usuario";
            echo "</td>";
            echo "<td>";
                echo "Tipo de Usuario";
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
                echo $row['nombre'];
            echo "</td>";
            echo "<td>";
                echo $row['cedula'];
            echo "</td>";
            echo "<td>";
                echo $row['correo'];
            echo "</td>";
            echo "<td>";
                echo $row['usuario'];
            echo "</td>";
            echo "<td>";
                echo $row['tusuario'];
            echo "</td>";
            /*echo "<td>";
                echo "<button class='btn btn-info' onclick='mostrarUsuario(".$row['id'].")'> Ver </button>";
            echo "</td>";*/
            echo "<td>";
            	echo "<button class='btn btn-warning' onclick='editarUsuario(".$row['id'].")'> Actualizar </button>";
            echo "</td>";
            echo "<td>";
            	echo "<button class='btn btn-danger' onclick='eliminarUsuario(".$row['id'].")'>Eliminar</button>";               
            echo "</td>";
        echo "</tr>";
	}
	echo "</tbody>";
echo "</table>";
?>