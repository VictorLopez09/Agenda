<?php
    include ("conexion.php");

    if(!empty($_POST["btn_ingresar"])){
        $user = $_POST['username'];
        $contra = $_POST['password'];

        if(empty($contra) || empty($user)){
            echo "<script>";
            echo "Swal.fire({";
            echo "icon: 'error',";
            echo "title: 'Oops...',";
            echo "text: '¡No se permiten campos vacíos!',";
            echo "})";
            echo "</script>";
        }
        if (isset($_POST['username'], $_POST['password']) &&
        !empty($_POST['username']) &&
        !empty($_POST['password'])){

                $consulta = "SELECT * FROM usuario WHERE usuario = '".mysqli_real_escape_string($conexion, $user)."'";
                $resultado  = mysqli_query($conexion,$consulta);



                if (!$resultado) {
                // Mostrar un mensaje de error si la consulta falla
                    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
                } else {
                    $num_filas = mysqli_num_rows($resultado);
                    if ($num_filas > 0) {
                        $fila = mysqli_fetch_assoc($resultado);
                        // Obtener el primer dato de la fila
                        $contrasena_r = $fila["pass"];
                        if (password_verify($contra,$contrasena_r)) {
                            # code...
                            session_start();
                            // Establecer las variables de sesión
                            $_SESSION['username'] = $user;
                            header("Location: main.php");
                            exit;
                        }else{
                            echo "<script>";
                            echo "Swal.fire({";
                            echo "icon: 'error',";
                            echo "title: 'Oops...',";
                            echo "text: '¡Verifique sus datos!',";
                            echo "})";
                            echo "</script>";
                        }
                    } else {
                        // No se encontró ningún usuario con ese nombre
                        echo "<script>";
                        echo "Swal.fire({";
                        echo "icon: 'error',";
                        echo "title: 'Oops...',";
                        echo "text: '¡Verifique sus datos!',";
                        echo "})";
                        echo "</script>";
                        exit;
                    }
                }
            }
    }
    if(!empty($_POST["btn_registarse"])){

        $user = $_POST['username'];
        $contra = $_POST['password'];
        $contra1 = $_POST['password1'];


        $consulta = "SELECT * FROM usuario WHERE usuario = '".mysqli_real_escape_string($conexion, $user)."'";
        $resultado  = mysqli_query($conexion,$consulta);

        if (empty($user) || empty($contra) || empty($contra1)) {
            echo "<script>";
            echo "Swal.fire({";
            echo "icon: 'error',";
            echo "title: 'Oops...',";
            echo "text: '¡Por favor, complete todos los campos!',";
            echo "})";
            echo "</script>";
            
        }
        
        if (isset($_POST['username'], $_POST['password'], $_POST['password1']) &&
            !empty($_POST['username']) &&
            !empty($_POST['password']) &&
            !empty($_POST['password1'])) {
                if (mysqli_num_rows($resultado) > 0) {
                    echo "<script>";
                    echo "Swal.fire({";
                    echo "icon: 'error',";
                    echo "title: 'Oops...',";
                    echo "text: '¡Ya existe un usuario!',";
                    echo "})";
                    echo "</script>";
                    
                }else{
                    $contra = password_hash($contra1,PASSWORD_DEFAULT,['cost'=>10]);
                    $insertar = "INSERT INTO usuario (usuario, pass) VALUES ('".mysqli_real_escape_string($conexion, $user)."', '".mysqli_real_escape_string($conexion, $contra)."')";
                    $resultado  = mysqli_query($conexion,$insertar);
                    header("Location: index.php");
                    // Todas las variables tienen un valor asignado
                    // Aquí puede colocar el código que desea ejecutar cuando todas las variables estén llenas
                }

            
        }
        

    
    }

?>