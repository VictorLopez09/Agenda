<?php
    include ("conexion.php");
    if (isset($_GET['id'])) {
        // Obtiene el valor del parámetro "id"
        $id = $_GET['id'];
        // Realiza alguna acción con el valor recibido
    } else {
        // Si no se recibió el parámetro "id" en la URL, muestra un mensaje de error
        echo "No se recibió ningún valor.";
        header('Location:modificar_l.php.');
    }
    if(!empty($_POST["btn_modificar"])){
        $nom = $_POST['salon'];

        $consulta = "UPDATE lugar SET nom_lugar=? WHERE idlugar=?;";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "si", $nom, $id);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);

        header('Location:lugar.php');
        // Verifica si se recibió el parámetro "id" en la URL
    }
?>