<?php
    $name = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $puesto = $_POST['ocupacion'];
    $conexion = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    if(isset($_POST['btnSignup'])){
        $password_sec = password_hash($password,PASSWORD_DEFAULT);
        $registrar = "INSERT INTO Usuarios(Nombre,username,Contraseña,Cargo) VALUES('$name','$usuario','$password_sec','$puesto')";

        if(mysqli_query($conexion,$registrar)){
            echo "<script>alert('Usuario registrado: $name'); window.location: 'index.php'</script>";
            include("index.php");
        }else{
            echo "<script>alert('Datos erroneos o campos sin llenar.');</script>";
            include("signup.php");
        }
    }

    if(isset($_POST['btnLogin'])){
        session_start();
        $_SESSION['$usuario'];
        $user_sesion = mysqli_query($conexion,"SELECT*FROM Usuarios WHERE username='$usuario'");
        $nr = mysqli_num_rows($user_sesion);
        $filas = mysqli_fetch_array($user_sesion);
        
        if(($nr == 1)&&(password_verify($password,$filas['Contraseña']))){
            if($filas['Cargo'] == 1){
                header('Location: admin.php');
            }elseif($filas['Cargo'] == 2){
                header('Location: /cliente.php');
            }else{
                ?>
                <?php
                    include("index.php");
                ?>
                <script>alert('Error en la autenticacion.');</script>
                <?php 
            }
        }else{
            echo "<script>alert('Usuario o contraseña incorrecto.'); window.location: 'index.php'</script>";
        }
    }