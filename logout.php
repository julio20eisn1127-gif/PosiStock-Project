<?php
<link rel="stylesheet" href="style.css">
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
