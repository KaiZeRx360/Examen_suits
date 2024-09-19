<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = $_POST['producto'] ?? '';
    $precio = $_POST['precio'] ?? '';

    // Validar entrada
    if (!empty($producto) && is_numeric($precio) && $precio > 0) {
        // Inicializar el array de productos si no existe
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }

        // Añadir el nuevo producto al array
        $_SESSION['productos'][] = [
            'producto' => htmlspecialchars($producto),
            'precio' => htmlspecialchars($precio)
        ];
    } else {
        $error = "Por favor, ingrese un producto válido y un precio positivo.";
    }
}

$productos = $_SESSION['productos'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Agregar Productos</title>
    <style>
        body {
            background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
        }
        .card-header {
            background-color: #f8f9fa;
            color: #343a40;
            font-size: 1.5rem;
            border-bottom: none;
            text-align: center;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn {
            border-radius: 10px;
            padding: 6px 10px;
            font-size: 0.75rem;
            border: none; /* Elimina el borde */
        }
        .btn-primary {
            background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .text-danger {
            font-size: 0.875rem;
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .product-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Agregar Producto
                    </div>
                    <div class="card-body">
                        <form action="productos.php" method="POST">
                            <div class="mb-3">
                                <label for="producto" class="form-label">Producto</label>
                                <input type="text" class="form-control" name="producto" id="producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="precio" id="precio" step="0.01" required>
                            </div>
                            <?php if (isset($error)) echo '<p class="text-danger">' . $error . '</p>'; ?>
                            <button type="submit" class="btn btn-primary w-100">Agregar Producto</button>
                        </form>
                        <?php if (!empty($productos)): ?>
                            <div class="product-list">
                                <h4>Productos Añadidos</h4>
                                <ul class="list-group">
                                    <?php foreach ($productos as $item): ?>
                                        <li class="list-group-item">
                                            <strong><?php echo htmlspecialchars($item['producto']); ?></strong> - 
                                            $<?php echo htmlspecialchars($item['precio']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
