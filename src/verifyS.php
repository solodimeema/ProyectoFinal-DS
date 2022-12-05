<?php
    if(isset($_POST['btnSignup'])){
        $password_sec = password_hash($password,PASSWORD_BCRYPT);
        $registrar = "INSERT INTO Usuarios(Nombre,username,Contraseña,Cargo) VALUES('$name','$usuario','$password_sec','$puesto')";

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