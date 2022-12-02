<?php
    $server='Database';
    $username='root';
    $password='MYSQL_ROOT_PASSWORD';
    $database='DatabaseDS';
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }catch(PDOException $err){
        die('Conexion Fallida.' . $err->getMessage());
    }
?>