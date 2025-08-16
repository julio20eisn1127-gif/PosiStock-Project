<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Dashboard - PosiStock</title>
</head>
<body>
    <h1>Bienvenido a PosiStock</h1>
    <p>Este es el panel principal de tu sistema de gestión de inventario.</p>
    <a href="add_product.php">Agregar Producto</a> | 
    <a href="sell_product.php">Registrar Venta</a> | 
    <a href="logout.php">Salir</a>
</body>
</html>
