<?php
    include ("conexion.php");
    if(!empty($_POST["btn_agregar"])){
        $id = $_POST['id'];
        $nom = $_POST['nombre'];
        
        $consulta = "INSERT INTO profesor (nom_profesor) VALUES (?);";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "s", $nom);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);
        
        header('Location:profesor.php');
    }
?>