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
    <?php   
        session_start();
        // Acceder a las variables de sesión establecidas en set_session.php
        $username = $_SESSION['username'];
        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
        }
    ?>
    <title>Document</title>
</head>
<?php
    include ("cabecera.php");
?>
<body>
    <article>
        <div class="container">
            <h1>Vamos por buen camino!!!</h1>
            <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Materia</th>
                            <th>Profesor</th>
                            <th>Lugar</th>
                            <th>Temas</th>
                            <th>Grado grupo</th>
                            <th>Carrera</th>
                            <th>Usuario</th>
                            <th>Eliminar</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("comandos.php");
                            $registros = consulta("registro");
                            foreach($registros as $registro) {
                                echo "<tr>";
                                echo "<td>".$registro['idcalendario']."</td>";
                                echo "<td>".$registro['idmateria']."</td>";
                                echo "<td>".$registro['idprofesor']."</td>";
                                echo "<td>".$registro['idlugar']."</td>";
                                echo "<td>".$registro['temas']."</td>";
                                echo "<td>".$registro['gradogrupo']."</td>";
                                echo "<td>".$registro['idcarrera']."</td>";
                                echo "<td>".$registro['idusuario']."</td>";
                                echo "<td><a class='btn btn-danger' href='eliminar.php?id=".$registro['idcalendario']."' onclick='confirmarEliminacion(event);'>Eliminar</a></td>";
                                echo "<td><a class='btn btn-warning' href='modificar.php?id=".$registro['idcalendario']."' onclick='confirmacionModificar(event)'>Modificar</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <script>
                    function confirmacionModificar(event) {
                        event.preventDefault(); // Detener el comportamiento predeterminado del enlace
                        Swal.fire({
                            title: '¿Está seguro de que desea modificar este registro?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Sí, modificar registro',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                            window.location.href = event.target.href; // Redireccionar a la página de modificación
                            }
                        })
                    }
                    function confirmarEliminacion(event) {
                        event.preventDefault(); // evitar que se ejecute el enlace
                        Swal.fire({
                            title: '¿Estás seguro?',
                            text: "Esta acción no se puede deshacer",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Sí, eliminar',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                            location.href = event.target.href; // continuar con la eliminación
                            }
                        })
                    }
                </script>
                <div class="mb-4 mx-auto" class="form-label">
                    <form action="logout.php" method="post">
                        <input type="submit" class="btn btn-secondary" value="Cerrar sesión">
                        <a href="agregar.php" class="btn btn-secondary">Registarse</a>
                    </form>
                </div>
        </div>
    </article>
<footer class="footer fixed-bottom bg-dark text-light mt-5">
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