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
                                    <h2>Agregar</h2>
                                </div>
                                <form method="POST">
                                    <?php
                                        include('add.php');
                                    ?>
                                    <div class="mb-1">
                                        <label for="text" class="form-label">Materia:</label>
                                        <select class="form-control" name="materia" id="materia">
                                        <?php
                                            include("comandos.php");
                                            $reg1 = consulta("materia");
                                            foreach ($reg1 as $reg1) {
                                                echo "<option value='" .$reg1['idmateria']."'>" .$reg1['nom_materia']. "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label for="text" class="form-label">Profesor:</label>
                                        <select class="form-control" name="profesor" id="profesor">
                                        <?php
                                            
                                            $reg2 = consulta("profesor");
                                            foreach ($reg2 as $reg2) {
                                                echo "<option value='" .$reg2['idprofesor']."'>" .$reg2['nom_profesor']. "</option>";
                                            }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="mb-1">
                                        <label for="text" class="form-label">Lugar:</label>
                                        <select class="form-control" name="lugar" id="lugar">
                                        <?php
                                            
                                            $reg3 = consulta("lugar");
                                            foreach ($reg3 as $reg3) {
                                                echo "<option value='" .$reg3['idlugar']."'>" .$reg3['nom_lugar']. "</option>";
                                            }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="mb-1">
                                        <label for="text" class="form-label">Temas:</label>
                                        <input class="form-control" type="text" id="temas" name="temas">
                                    </div>
                                    
                                    <div class="mb-1">
                                        <label for="text" class="form-label">Grado grupo:</label>
                                        <input class="form-control" type="text" id="gradogrupo" name="gradogrupo">
                                    </div>
                                    
                                    <div class="mb-1">
                                        <label for="username" class="form-label">Carrera:</label>
                                        <select class="form-control" name="carrera" id="carrera">
                                        <?php
                                            
                                            $reg4 = consulta("carrera");
                                            foreach ($reg4 as $reg4) {
                                                echo "<option value='" .$reg4['idcarrera']."'>" .$reg4['nom_carrera']. "</option>";
                                            }
                                        ?>
                                        </select>
                                    </div>

                                    <div class="mb-1">
                                        <label for="username" class="form-label">Usuario:</label>
                                        <select class="form-control" name="usuario" id="Usuario">
                                        <?php
                                            
                                            $reg5 = consulta("usuario");
                                            foreach ($reg5 as $reg5) {
                                                echo "<option value='" .$reg5['idusuario']."'>" .$reg5['usuario']. "</option>";
                                            }
                                        ?>
                                        </select>
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