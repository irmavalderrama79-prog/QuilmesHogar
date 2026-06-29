<?php
// valores a modificar en el php.ini
// upload_max_filesize = 4M
// post_max_size = 6M
require_once '../conectar.php';
$src='';
$articulo=$_POST['articulo'];
$descripcion=$_REQUEST['descripcion'];
$id_categoria=$_REQUEST['categoria'];
$precio=$_REQUEST['precio'];

if (isset($_FILES['foto'])){
    $archivo=$_FILES['foto'];
    $nombre=$archivo['name'];
    $tipo=$archivo['type'];
    $ruta_temporal=$archivo['tmp_name'];
    $src='../imagenes/articulos/'.$nombre;
    move_uploaded_file($ruta_temporal, $src);
    echo "<a href='listadoarticulos.php'>Volver<a>";
    try {
        $pdo=conectar();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta=$pdo->prepare("INSERT INTO articulos (articulo, descripcion, imagen, id_categoria, precio) VALUES (:articulo, :descripcion, :imagen, :id_categoria, :precio);");
        $consulta->bindParam(':articulo',$articulo);
        $consulta->bindParam(':descripcion',$descripcion);
        $consulta->bindParam(':imagen',$nombre);
        $consulta->bindParam(':id_categoria',$id_categoria);
        $consulta->bindParam(':precio',$precio);
        $consulta->execute();
        // $pdo->query("INSERT INTO peliculas (`id`, `titulo`, `descripcion`, `imagen`, `id_genero`, `id_sala`, `horario`, `precio`) VALUES (NULL, '$titulo', '$descripcion','$src', '$id_genero', '$id_sala', '$horario', '$precio');");
        // $pdo=null;
    }catch(PDOException $e)
        {
        echo "Hubo un error: " . $e->getCode()."   ". $e->getMessage();
        }
}
?>