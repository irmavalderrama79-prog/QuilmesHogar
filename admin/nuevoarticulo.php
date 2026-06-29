<?php

    require_once "encabezado.php";
    $pdo=conectar();
    $categorias=$pdo->query("select * from categorias");
    
?>
    <form action="guardarnuevo.php" method="POST" enctype="multipart/form-data" class="form_articulo">
        <input type="text" name="articulo" placeholder="articulo..." required autocomplete="off">
        <input type="file" name="foto" required accept="image/*">
        <textarea name="descripcion" required cols="40" rows="20" autocomplete="off" placeholder="Descripcion..."></textarea>
        <input type="text" name="precio" placeholder="Precio..." required autocomplete="off">
    <?php
    echo "<select name='categoria'>";
        foreach ($categorias as $categoria){    
            echo "<option value='$categoria[id]'>$categoria[categoria]</option>";
        }
    echo"</select>";
    ?>
        <input type="submit" value="Guardar" class="botonverde">
        <a href="listadoarticulos.php" class="botonceleste">Volver al listado</a>
    </form>
<?php
    require_once "pie.php";
?>
