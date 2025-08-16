<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];

    $sql = "SELECT stock FROM products WHERE name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_stock = $row['stock'];
        if ($current_stock >= $quantity) {
            $new_stock = $current_stock - $quantity;
            $sql_update = "UPDATE products SET stock = $new_stock WHERE name = '$name'";
            if ($conn->query($sql_update) === TRUE) {
                $message = "Venta registrada correctamente. Stock actualizado.";
            } else {
                $message = "Error al actualizar el stock: " . $conn->error;
            }
        } else {
            $message = "Stock insuficiente para la venta.";
        }
    } else {
        $message = "Producto no encontrado.";
    }
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Registrar Venta</title>
</head>
<body>
    <h2>Registrar Venta</h2>
    <?php if (!empty($message)) { echo "<p style='color: blue;'>$message</p>"; } ?>
    <form action="sell_product.php" method="post">
        Nombre del Producto: <input type="text" name="name"><br>
        Cantidad: <input type="number" name="quantity"><br>
        <input type="submit" value="Registrar Venta">
    </form>
    <a href="dashboard.php">Volver al Dashboard</a>
</body>
</html>
