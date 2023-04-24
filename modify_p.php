<?php
    include ("conexion.php");
    if (isset($_GET['id'])) {
        // Obtiene el valor del parámetro "id"
        $id = $_GET['id'];
        // Realiza alguna acción con el valor recibido
    } else {
        // Si no se recibió el parámetro "id" en la URL, muestra un mensaje de error
        echo "No se recibió ningún valor.";
        header('Location:modificar_p.php.');
    }
    if(!empty($_POST["btn_modificar"])){
        $nom = $_POST['nombre'];

        $consulta = "UPDATE profesor SET nom_profesor=? WHERE idprofesor=?;";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "si", $nom, $id);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);

        header('Location:profesor.php');
        // Verifica si se recibió el parámetro "id" en la URL
    }
?>