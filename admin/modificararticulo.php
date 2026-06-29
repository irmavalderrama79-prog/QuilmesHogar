<?php

    require_once "encabezado.php";
    $pdo=conectar();
    $id=$_REQUEST['id'];
    $categorias=$pdo->query("select * from categorias;");
    $registros=$pdo->prepare("SELECT * FROM articulos WHERE id=$id;");
    $registros->execute();
    $registro=$registros->fetch();
    $articulo=$registro['articulo'];
    $descripcion=$registro['descripcion'];
    $imagen=$registro['imagen'];
    $precio=$registro['precio'];
    $id_categoria=$registro['id_categoria'];
?>
    <form action="guardarmodificar.php?<?php echo "id=$_REQUEST[id]&imagen=$imagen" ?>" method="POST" enctype="multipart/form-data" class="form_articulo">
        <input type="text" name="articulo" placeholder="articulo..." required autocomplete="off" value="<?php echo $articulo ?>">
        <label for="foto">Imagen anterior: <?php echo $imagen ?></label>
        <input type="file" name="foto" accept="image/*" >
        <textarea name="descripcion" required cols="40" rows="20" autocomplete="off" placeholder="Descripcion..."><?php echo $descripcion ?></textarea>
        <input type="text" name="precio" placeholder="Precio..." required autocomplete="off" value="<?php echo $precio ?>">
    <?php
    echo "<select name='categoria'>";
        foreach ($categorias as $categoria){    
            if ($id_categoria==$categoria['id']){
                $seleccionado="selected";
            } else {
                $seleccionado="";
            }
            echo "<option value='$categoria[id]' $seleccionado>$categoria[categoria]</option>";
        }
    echo"</select>";
    ?>
        <input type="submit" value="Guardar" class="botonverde">
        <a href="listadoarticulos.php" class="botonceleste">Volver al listado</a>
    </form>
<?php
    require_once "pie.php";
?>
