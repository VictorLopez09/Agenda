<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <title>Agenda</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
               <a class="navbar-brand" href="index.php">Agenda UNACH</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link">Registarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    <div class="container">
    <?php
        include ("login.php");    
    ?>
    </div>
    <article class="mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="card w-70">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h2>Registarse</h2>
                                </div>
                                <form method="POST">
                                    <div class="mb-5">
                                        <label for="username" class="form-label">Nombre de usuario:</label>
                                        <input  class="form-control" type="text" id="username" name="username">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="form-label">Contraseña:</label>
                                        <input class="form-control" type="password" id="password" name="password">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="form-label">Confirmar contraseña:</label>
                                        <input class="form-control" type="password" id="password1" name="password1">
                                    </div>
                                    <div class="mb-4 mx-auto">
                                        <input name="btn_registarse" type="submit" value="Registarse" class="btn btn-primary">
                                        
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </article>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <div class="container mt-5">
        <div class="row">
        </div>
    </div>
    
    
    <footer class="bg-dark text-light mt-5">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-6">
                <h5>Información de contacto</h5>
                <p>Dirección: Calle 123, Ciudad, País</p>
                <p>Teléfono: +1 234 567890</p>
                <p>Email: info@example.com</p>
            </div>
            <div class="col-md-6">
                <h5>Enlaces útiles</h5>
                <ul class="list-unstyled">
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Mapa del sitio</a></li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
</body>
</html>