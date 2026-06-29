<?php
require_once "encabezado.php";
?>
<section class="articulos">

<?php        
    if (isset($_REQUEST["id"])){ //me fijo que existe el dato "id"
        $id=$_REQUEST["id"];
        if ($id==0){ // si el "id" de productos es 0 traemos todos los registros
            $consulta="SELECT * FROM articulos";
        }else { // sino, solo traemos el registro correspondiente a "id"
            $consulta="SELECT * FROM articulos WHERE articulos.id=$id";
        }
    }else { //si no existe "id" traemos todos los registros
        $consulta="SELECT * FROM articulos";
    }
    $conexion=conectar();
    $productos=$conexion->query($consulta);
    while ($fila = $productos->fetch()){ //Armamos los datos del o de los artículos
        echo "<article>";
        echo "<a href='producto.php?id=$fila[id]'><img src='imagenes/articulos/$fila[imagen]'></a>";
        echo "<ul>";
        echo "<li class='articulo'><a href='producto.php?id=$fila[id]'>$fila[articulo]</a></li>";
        echo "<li class='descripcion'><pre>$fila[descripcion]</pre></li>";
        echo "<li class='precio'>$ ". number_format($fila['precio'], 2, ',', '.') ."</li>";
        // number_format es para darle formato numérico visual
        echo "</ul>";
        echo "</article>";
    }
?>

</section>

<?php
require_once "pie.php";
?>