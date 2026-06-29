<?php
require_once "encabezado.php";

try {
    $pdo=conectar();
    $consulta=$pdo->prepare("DELETE FROM articulos WHERE id=:id;");
    $consulta->execute([":id"=>"$_REQUEST[id]"]);
    @unlink("../imagenes/articulos/$_REQUEST[imagen]"); #unlink() elimina un archivo - @ omite mensajes de error
    echo "El artículo fue eliminado con éxito";
    echo "<a href='listadoarticulos.php'>Volver<a>";
} catch (PDOException $e) {
    echo "Hubo un error: " . $e->getCode()."   ". $e->getMessage();
}

?>