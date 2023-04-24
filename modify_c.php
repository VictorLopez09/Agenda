<?php
    include ("conexion.php");
    if (isset($_GET['id'])) {
        // Obtiene el valor del parámetro "id"
        $id = $_GET['id'];
        // Realiza alguna acción con el valor recibido
    } else {
        // Si no se recibió el parámetro "id" en la URL, muestra un mensaje de error
        echo "No se recibió ningún valor.";
        header('Location:modificar_c.php');
    }
    if(!empty($_POST["btn_modificar"])){
        $idn = $_POST['idn'];
        $nom = $_POST['nombre'];

        $consulta = "UPDATE carrera SET idcarrera=?, nom_carrera=? WHERE idcarrera=?;";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "sss", $idn , $nom, $id);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);

        header('Location:carrera.php');
        // Verifica si se recibió el parámetro "id" en la URL
    }
?>