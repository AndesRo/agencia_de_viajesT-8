<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "AGENCIA";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

