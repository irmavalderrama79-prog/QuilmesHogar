<?php
require_once "encabezado.php";
?>
<section class="tablaarticulos">
    <table>
        <tr>
            <th>Imagen</th>    
            <th>Artículo</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
<?php        
    if (isset($_REQUEST["id"])){
        $id_categoria=$_REQUEST["id"];
        $consulta="SELECT * FROM articulos WHERE articulos.id_categoria=$id_categoria";
    }else {
        $consulta="SELECT * FROM articulos";
    }
    $conexion=conectar();
    $productos=$conexion->query($consulta);
    while ($fila = $productos->fetch()){
        echo "<tr>";
        echo "<td><a href='producto.php?id=$fila[id]'><img src='imagenes/articulos/$fila[imagen]'></td>";
        echo "<td>$fila[articulo]</td>";
        echo "<td><pre>$fila[descripcion]</pre></td>";
        echo "<td>$fila[precio]</td>";
        echo "</tr>";
    }
?>
    </table>
</section>

<?php
require_once "pie.php";
?>