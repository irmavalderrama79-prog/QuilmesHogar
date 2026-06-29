<?php

function conectar() {
    $servidor = 'localhost'; // Dirección del servidor
    $nombreBaseDatos = 'quilmeshogar'; // Nombre de tu base de datos
    $usuario = 'root'; // Usuario de MySQL
    $contrasena = ''; // Contraseña del usuario
    
    try {
        // DSN (Data Source Name) para especificar el tipo de base de datos y otros parámetros
        $dsn = "mysql:host=$servidor;dbname=$nombreBaseDatos;charset=utf8mb4";
        $opciones = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de error
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de recuperación dedatos
        PDO::ATTR_EMULATE_PREPARES => false, // Evitar la emulación de sentenciaspreparadas
        ];
        // Creación del objeto PDO
        $conexion = new PDO($dsn, $usuario, $contrasena, $opciones);
        return $conexion; // Retorna el objeto PDO si la conexión es exitosa

    } catch (PDOException $e) {
        // Manejo de errores si no se puede conectar
        echo "Error en la conexión: " . $e->getMessage();
        exit; // Finaliza el script si hay un error
    }
}


?>