<?php
    include ("conexion.php");
    if (isset($_GET['id'])) {
        // Obtiene el valor del parámetro "id"
        $calendario = $_GET['id'];
        // Realiza alguna acción con el valor recibido
    } else {
        // Si no se recibió el parámetro "id" en la URL, muestra un mensaje de error
        echo "No se recibió ningún valor.";
        header('Location:main.php');
    }
    if(!empty($_POST["btn_modificar"])){
        $materia = $_POST['materia'];
        $profesor = $_POST['profesor'];
        $lugar = $_POST['lugar'];
        $stemas = $_POST['temas'];
        $gradogrupo = $_POST['gradogrupo'];
        $carrera = $_POST['carrera'];
        $usuario = $_POST['usuario'];

        $consulta = "UPDATE registro SET idmateria=?, idprofesor=?, idlugar=?, temas=?, gradogrupo=?, idcarrera=?, idusuario=? WHERE idcalendario=?;";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "iiisssii", $materia, $profesor, $lugar, $stemas, $gradogrupo, $carrera, $usuario, $calendario);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);
        
        header('Location:main.php');
        // Verifica si se recibió el parámetro "id" en la URL
    }
?>