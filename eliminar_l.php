<?php             
    include("conexion.php");        
    $id = mysqli_real_escape_string($conexion, $_GET["id"]);
    $consulta = "DELETE FROM lugar WHERE idlugar= '" . $id . "'";
    mysqli_query($conexion, $consulta);
    header("Location:lugar.php"); // redirige a la página deseada después de borrar el registro
    exit();     
?>