<?php
require_once "encabezado.php";
?>
<section class="nuevoarticulo">
    <a href="nuevoarticulo.php" class="botonverde">+ Nuevo</a>
</section>
<section class="tablaarticulos">
    <table>
        <tr>
            <th>Imagen</th>    
            <th>Artículo</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
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
        echo "<td><img src='../imagenes/articulos/$fila[imagen]'></td>";
        echo "<td>$fila[articulo]</td>";
        // echo "<td><pre>$fila[descripcion]</pre></td>";
        echo "<td>$fila[precio]</td>";
        echo "<td><a href='modificararticulo.php?id=$fila[id]'>✏️</a></td>";
        echo "<td><a href='eliminararticulo.php?id=$fila[id]&imagen=$fila[imagen]' onclick='return confirm(\"Seguro?\");'>❌</a></td>";
        echo "</tr>";
    }
?>
    </table>
</section>

<?php
require_once "pie.php";
?>