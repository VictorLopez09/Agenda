<?php
    include ("conexion.php");
    if(!empty($_POST["btn_modificar"])){
        $id = $_POST['id'];
        $nom = $_POST['nombre'];
        
        $consulta = "INSERT INTO carrera (idcarrera, nom_carrera) VALUES (?, ?);";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "ss", $id, $nom);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);

        if ($stmt) {
            printf("Error: %s\n", mysqli_error($conexion));

            
            header('Location:carrera.php');
            exit();
          }
        
        header('Location:carrera.php');
    }
?>