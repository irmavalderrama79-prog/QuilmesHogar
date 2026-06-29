<?php
require_once "encabezado.php";
?>
<section class="articulos">

<?php        
    if (isset($_REQUEST["id"])){ //me fijo que exista "id", para evitar errores
        $id_categoria=$_REQUEST["id"];
        if ($id_categoria==0){ // si es 0 mostramos todos los articulos
            $consulta="SELECT * FROM articulos";
        }else {// si no es sero solo mostrwamos los de la categoría "id"
            $consulta="SELECT * FROM articulos WHERE articulos.id_categoria=$id_categoria";
        }
    }else {
        $consulta="SELECT * FROM articulos"; //si no existía el "id" mostramos todos
    }
    $conexion=conectar();
    $productos=$conexion->query($consulta);
    while ($fila = $productos->fetch()){ //este ciclo es para mostrar los artículos
        // cada uno dentro de un article
        echo "<article>";
        echo "<a href='producto.php?id=$fila[id]'><img src='imagenes/articulos/$fila[imagen]'></a>";
        echo "<ul>";
        echo "<li class='articulo'><a href='producto.php?id=$fila[id]'>$fila[articulo]</a></li>";
        echo "<li class='descripcion'><pre>$fila[descripcion]</pre></li>";
        echo "<li class='precio'>$ ". number_format($fila['precio'], 2, ',', '.') ."</li>";
        echo "</ul>";
        echo "</article>";
    }
?>

</section>

<?php
require_once "pie.php";
?>