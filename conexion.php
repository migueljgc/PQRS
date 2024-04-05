<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "Osoted12."; // Hashea y salta la contraseña antes de almacenarla
$dbname = "pqrs";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

insertar($conexion);

function insertar($conexion) {
    // Obtener los datos del formulario
    $titulo = $_POST['Titulo'];
    $tipo_pqrs = $_POST['tipo_pqrs'];
    $dependencia = $_POST['tipodepe'];
    $pqrs = $_POST['PQRS'];

    // Preparar la consulta SQL para insertar los datos en la tabla correspondiente
    $sql = "INSERT INTO tabla_pqrs(Titulo, tipo_pqrs, tipodepe, PQRS) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("ssss", $titulo, $tipo_pqrs, $dependencia, $pqrs);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

// Cerrar la conexión
$conexion->close();
?>
