<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Registro</title>
    <style>
        /* Estilos similares al archivo proporcionado */
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
            padding: 8px 12px;
            font-size: 0.875rem;
            border: none;
        }
        .btn-primary {
            background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #DCD9D4;
            background-image: linear-gradient(to bottom, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), radial-gradient(at 50% 0%, rgba(255,255,255,0.10) 0%, rgba(0,0,0,0.50) 50%);
            background-blend-mode: soft-light,screen;
        }
        .btn-secondary:hover {
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .text-danger {
            font-size: 0.875rem;
        }
        .icon {
            margin-right: 10px;
        }
        .btn-container {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <i class="fas fa-user-plus icon"></i> Registrar Usuario
                    </div>
                    <div class="card-body">
                        <form action="app/controller/registro.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required pattern="[A-Za-z\s]+" aria-describedby="nombreHelp">
                                    <div id="nombreHelp" class="invalid-feedback">El nombre solo debe contener letras y espacios.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="apellido" id="apellido" required pattern="[A-Za-z\s]+" aria-describedby="apellidoHelp">
                                    <div id="apellidoHelp" class="invalid-feedback">El apellido solo debe contener letras y espacios.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp">
                                    <div id="emailHelp" class="invalid-feedback">Ingrese un correo electrónico válido.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="btn-container">
                                <button type="submit" class="btn btn-primary flex-grow-1"><i class="fas fa-user-check"></i> Registrar</button>
                                <a class="btn btn-secondary" href="login.php"><i class="fas fa-sign-in-alt"></i> Volver al Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
