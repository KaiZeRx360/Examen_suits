<?php
session_start();

// Eliminar todos los datos de la sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al formulario de inicio de sesión
header('Location: ../../login.php');
exit();
?>
