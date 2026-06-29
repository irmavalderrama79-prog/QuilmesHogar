<?php
require_once "conectar.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>QuilmesHogar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>QuilmesHogar</h1>
        <ul>
            <li><a href="https://wa.me/1199994444">WhatsApp: 11-9999-4444</a></li>
            <li><a href="mailto:info@quilmeshogar.com.ar">info@quilmeshogar.com.ar</a></li>
        </ul>
        <img src="imagenes/QuilmesHogar.png" alt="Logo de Quilmes Hogar">
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php?id=0">Productos</a>
                <ul class="submenu">
                    <?php
                        $conexion=conectar();
                        $categorias=$conexion->query(" SELECT * FROM categorias;");
                        while ($categoria=$categorias->fetch()){
                        echo "<li><a href='productos.php?id=$categoria[id]'>$categoria[categoria]</a></li>";
                        }
                    ?>
                </ul>
            </li>

            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="somos.php">Somos</a></li>
        </ul>
    </nav>
    <main>