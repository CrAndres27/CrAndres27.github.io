<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar y validar entradas
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $estadoCivil = isset($_POST['estado']) ? $_POST['estado'] : '';
    $tieneHijos = isset($_POST['hijos']) ? $_POST['hijos'] : '';
    $intereses = isset($_POST['intereses']) ? implode(", ", $_POST['intereses']) : 'Ninguno';

    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registro";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono, estado, hijos, intereses) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombre, $email, $telefono, $estadoCivil, $tieneHijos, $intereses);

    if ($stmt->execute() === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "Método no soportado.";
}
?>

