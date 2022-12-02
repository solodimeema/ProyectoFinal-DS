<?php
    $server='database';
    $username='Master';
    $password='0123';
    $database='DatabaseProject';
    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }catch(PDOException $err){
        die('Conexion Fallida.' . $err->getMessage());
    }
?>