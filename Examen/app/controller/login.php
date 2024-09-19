<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el usuario está registrado
    if (isset($_SESSION['usuarios'][$email])) {
        if ($_SESSION['usuarios'][$email]['password'] === $password) {
            $_SESSION['user'] = $email; // Guardar el email en la sesión
            header('Location: ../../productos.php');
            exit();
        }
    }

    // Redirigir de vuelta al login si hay error
    header('Location: ../../login.php?error=1');
    exit();
}
?>
