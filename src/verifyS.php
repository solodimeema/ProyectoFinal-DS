<?php
    $name = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $aux1 = 1; // Administradores
    $aux2 = 2; // Clientes

    session_start();
    $_SESSION['usuario'] = $usuario;
    $conexion = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    if(isset($_POST['btnSignup'])){
        $password_sec = password_hash($password,PASSWORD_BCRYPT);
        $registrar = "INSERT INTO Usuarios(Nombre,username,Contraseña,Cargo) VALUES('$name','$usuario','$password_sec','$aux2')";

        if(mysqli_query($conexion,$registrar)){
            echo "<script>alert('Usuario registrado: $name');</script>";
            ?>
            <?php
                include("index.php");
            ?>
            <?php
        }else{
            echo "<script>alert('Datos erroneos o campos sin llenar.');</script>";
            include("signup.php");
        }
    }

    if(isset($_POST['btnAdd'])){
        $password_sec = password_hash($password,PASSWORD_BCRYPT);
        $registrar = "INSERT INTO Usuarios(Nombre,username,Contraseña,Cargo) VALUES('$name','$usuario','$password_sec','$aux1')";

        if(mysqli_query($conexion,$registrar)){
            echo "<script>alert('Usuario registrado: $name');</script>";
            ?>
            <?php
                include("index.php");
            ?>
            <?php
        }else{
            echo "<script>alert('Datos erroneos o campos sin llenar.');</script>";
            include("signup.php");
        }
    }
?>