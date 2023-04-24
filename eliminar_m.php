<?php             
    include("conexion.php");        
    $id = mysqli_real_escape_string($conexion, $_GET["id"]);
    $consulta = "DELETE FROM materia WHERE idmateria= '" . $id . "'";
    mysqli_query($conexion, $consulta);
    header("Location:materia.php"); // redirige a la página deseada después de borrar el registro
    exit();     
?>