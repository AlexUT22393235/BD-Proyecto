<?php

//print_r($_POST);

    $nombre_fabricante = $_POST['nombre_fabricante'];

    
include('../connection/connection.php');


//$consulta ="INSERT INTO fabricante (nombre) VALUE('$nombre_fabricante')";
$consulta= "CALL p_RegistroFabricante ('$nombre_fabricante')";

$query= mysqli_query($conn, $consulta);

header('Location: ../fabricantes.php');


?>