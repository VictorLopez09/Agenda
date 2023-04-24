<?php
    include ("conexion.php");
    if(!empty($_POST["btn_modificar"])){
        $id = $_POST['id'];
        $nom = $_POST['salon'];
        
        $consulta = "INSERT INTO lugar (nom_lugar) VALUES (?);";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "s", $nom);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);
        
        header('Location:lugar.php');
    }
?>