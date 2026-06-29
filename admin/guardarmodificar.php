<?php
require_once "../conectar.php";

$id=$_REQUEST['id'];
$articulo=$_REQUEST['articulo'];
$descripcion=$_REQUEST['descripcion'];
$imagen=$_REQUEST['imagen'];
$id_categoria=$_REQUEST['categoria'];
$precio=$_REQUEST['precio'];

$pdo=conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_FILES['foto'])){
    $archivo=$_FILES['foto'];
    $nombre=$archivo['name'];
    if ($nombre!=""){
       $tipo=$archivo['type'];
        $ruta_temporal=$archivo['tmp_name'];
        $src='imagenes/articulos/'.$nombre;
        @unlink($imagen);
        move_uploaded_file($ruta_temporal, $src);
        $imagen=$src;
        $consulta="UPDATE articulos SET articulo=:articulo, descripcion=:descripcion, imagen=:imagen, id_categoria=:id_categoria, precio=:precio WHERE articulos.id=:id;";
        $registros=$pdo->prepare($consulta);
        $registros->excecute([
            ':articulo'=>$articulo,
            ':descripcion'=>$descripcion,
            ':imagen'=>$nombre,
            ':id_categoria'=>$id_categoria,
            ':precio'=>$precio,
            ':id'=>$id
        ]);

    }else{
        $consulta="UPDATE articulos SET articulo=:articulo, descripcion=:descripcion, id_categoria=:id_categoria, precio=:precio WHERE articulos.id=:id;";
        $registros=$pdo->prepare($consulta);
        $registros->execute([
            ':articulo'=>$articulo,
            ':descripcion'=>$descripcion,
            ':id_categoria'=>$id_categoria,
            ':precio'=>$precio,
            ':id'=>$id
        ]);
    }


    // $pdo->query($consulta);
    
}
echo "<h1>Modificación realizada con éxito!</h1>";
echo "<a href='listadoarticulos.php'>Volver<a>";
?>