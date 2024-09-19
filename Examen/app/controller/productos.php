<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../../login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = trim($_POST['producto']);
    $precio = trim($_POST['precio']);

    $errors = [];

    
    if (empty($producto) || empty($precio)) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    
    if (!is_numeric($precio) || $precio <= 0) {
        $errors[] = "El precio debe ser un número positivo.";
    }

    if (count($errors) > 0) {
        echo '<div class="alert alert-danger">';
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '</div>';
    } else {
        
        $_SESSION['productos'][] = [
            'producto' => $producto,
            'precio' => $precio
        ];
    }
}
?>
