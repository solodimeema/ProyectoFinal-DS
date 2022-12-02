<?php 
    require'db.php';
    $message = '';
    
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO Usuarios(email, password) VALUES (:email, :password)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam('email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt -> bindParam(':password', $password);
        
       
        if($stmt -> execute()){
            $message = 'USUARIO REGISTRADO CON EXITO.';
        }else{
            $message = 'NO SE LOGRO REGISTRAR AL USUARIO.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gentleman</title>
    <?php require'partials/fonts.php' ?>
</head>
<body>
    <?php if(!empty($message)): ?>
        <p> <?= $message ?> </p>
    <?php endif; ?>

    <h1>Registrate</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>