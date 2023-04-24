<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_de_la_UNACH.svg/2051px-Logo_de_la_UNACH.svg.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
</div>
    <article class="mt-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="card w-70">
                            <div class="card-body">
                                <div class="mb-2">
                                    <h2>Modificar lugar</h2>
                                </div>
                                <form method="POST">
                                    <?php
                                        include('add_l.php');
                                    ?>
                                   <div class="mb-1">
                                        <label for="text" class="form-label">Identificador de carrera:</label>
                                        <input class="form-control" type="text" id="salon" name="salon">
                                    </div>
                            
                                    <div class="mb-4 mx-auto">
                                        <input name="btn_modificar" type="submit" value="Modifcar" class="btn btn-primary">
                                        
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
</body>
</html>