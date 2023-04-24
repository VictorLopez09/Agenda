<?php
    function consulta($tabla){
        include ("conexion.php");
        $consulta = "SELECT * FROM ".mysqli_real_escape_string($conexion, $tabla);
        $resultado  = mysqli_query($conexion,$consulta);
        $arreglo_resultados = array(); // inicializamos el arreglo vacío

        if ($resultado) { // validamos que la consulta se haya ejecutado correctamente
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $arreglo_resultados[] = $fila; // agregamos la fila al arreglo
            }
        } else {
            // Aquí puedes agregar un mensaje de error personalizado si la consulta falló
            echo "Error en la consulta: " . mysqli_error($conexion);
        }
        return $arreglo_resultados;
    }
?>