<?php
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    session_start();
    $_SESSION['usuario'] = $usuario;  
    $conexion = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
    
    if(isset($_POST['btnLogin'])){
        $resultado = mysqli_query($conexion,"SELECT Nombre,username,Contraseña,Cargo FROM Usuarios WHERE username='$usuario'");
        $nr = mysqli_num_rows($resultado);
        $filas = mysqli_fetch_array($resultado);
              
        if(($filas['Cargo'] == 1)&&(password_verify($password,$filas['Contraseña']))){
          include('page/admin.php');
        }elseif(($filas['Cargo'] == 2)&&(password_verify($password,$filas['Contraseña']))){
          include('page/cliente.php');
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