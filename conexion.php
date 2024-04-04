<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor (generalmente es localhost)
$username = "root"; // Nombre de usuario de la base de datos
$password = "Osoted12."; // Contraseña de la base de datos
$dbname = "pqrs"; // Nombre de la base de datos

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname) or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
// Obtener los datos del formulario
$Titulo = $_POST['Titulo'];
$tipo_pqrs = $_POST['tiposoli'];
$dependencia = $_POST['tipodepe'];
$pqrs = $_POST['PQRS'];

// Preparar la consulta SQL para insertar los datos en la tabla correspondiente
$sql = "INSERT INTO tabla_pqrs(Titulo, tiposoli, tipodepe, PQRS) VALUES ('$Titulo', '$tipoPQRS', '$dependencia', '$pqrs')";
mysqli_query($conexion, $consulta);
mysqli_close($conexion);

}
?>