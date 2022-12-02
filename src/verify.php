<?php 
    $usuario = $_POST['username'];
    $password = $_POST['Contraseña'];
    session_start();
    $_SESSION['username'] = $usuario;

    $conexion = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    $consulta = "SELECT*FROM Usuarios where username='$usuario' and Contraseña='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_fetch_array($resultado);
    
    if($filas['Cargo']==1){
        header["Location:admin.php"];
    }elseif($filas['Cargo']==2){
        header["Location:cliente.php"];
    }else{
        ?>
        <?php
            include("inicio.php");
        ?>
        <h1 class="bad"> ERROR EN LA AUTENTICACION</h1>
        <?php 
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);