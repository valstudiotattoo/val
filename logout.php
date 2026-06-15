<?php
session_start();
session_destroy(); // Destrói os dados de login
header("Location: index.php"); // Manda de volta para a tela de login
exit();
?>