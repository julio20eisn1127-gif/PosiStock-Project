<?php
<link rel="stylesheet" href="style.css">
$servername = "localhost";
$username = "tu_usuario_de_mysql";
$password = "tu_contraseña_de_mysql";
$dbname = "posistock_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
