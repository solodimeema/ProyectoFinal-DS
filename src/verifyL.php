<?php
    $name = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $puesto = $_POST['ocupacion'];

    session_start();
    $_SESSION['usuario'] = $usuario;  
    $conexion = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    if(isset($_POST['btnLogin'])){
        $resultado = mysqli_query($conexion,"SELECT Nombre,username,Contraseña,Cargo FROM Usuarios WHERE username='$usuario' and Contraseña='$password'");
        $nr = mysqli_num_rows($resultado);
        $filas = mysqli_fetch_array($resultado);
        
        if(($filas == 1)&&(password_verify($password,$filas['contraseña']))){
          header('Location: ../page/admin.php');
        }elseif($filas['Cargo'] == 2){
          header('Location: ../page/cliente.php');
        }else{
          ?>
          <div class="alert alert-warning" role="alert">
            Usuario y/o contraseña incorrectos.
          </div>
          <?php
              include("index.php");
          ?>
          <?php
        }
    }else{
        echo "<script>alert('Usuario o contraseña incorrecto.');'</script>";
        include('index.php');
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);