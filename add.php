<?php
    include ("conexion.php");
    if(!empty($_POST["btn_modificar"])){
        $materia = $_POST['materia'];
        $profesor = $_POST['profesor'];
        $lugar = $_POST['lugar'];
        $stemas = $_POST['temas'];
        $gradogrupo = $_POST['gradogrupo'];
        $carrera = $_POST['carrera'];
        $usuario = $_POST['usuario'];

        $consulta = "INSERT INTO registro (idmateria, idprofesor, idlugar, temas, gradogrupo, idcarrera, idusuario) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "iiisssi", $materia, $profesor, $lugar, $stemas, $gradogrupo, $carrera, $usuario);
        mysqli_stmt_execute($stmt);
        $numFilas = mysqli_stmt_affected_rows($stmt);
        header('Location:main.php');
    }
?>