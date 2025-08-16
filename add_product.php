<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    $sql = "INSERT INTO products (name, stock) VALUES ('$name', $stock)";
    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado correctamente.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Agregar Producto</title>
</head>

<body>
    <h2>Agregar Nuevo Producto</h2>
    <form action="add_product.php" method="post">
        Nombre: <input type="text" name="name"><br>
        Stock: <input type="number" name="stock"><br>
        <input type="submit" value="Agregar">
    </form>
    <a href="dashboard.php">Volver al Dashboard</a>
</body>
</html>
