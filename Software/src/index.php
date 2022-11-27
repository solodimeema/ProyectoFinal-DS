<?php
   session_start();

   require 'db.php';
   if(isset($_SESSION['user_id'])){
        $records = $conn -> prepare('SELECT idUsuario, email, password FROM usuarios WHERE idUsuario =: id');
        $records -> bindParam(':id',$_SESSION['user_id']);
        $records -> execute();
        $results = $records -> fetch(PDO::FETCH_ASSOC);

        $user = null;

        if(count($results) > 0){
            $user = $results;
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
    <?php if(!empty($user)): ?>
        <br>Bienvenido <?= $user['email'];?>
        <br>Estas conectado correctamente. 
        <a href="logout.php">Cerrar Session</a>
    <?php else: ?>
        <h1>Datos errones. Intentalo de nuevo.</h1>
        <a href="login.php">Log in</a> or <a href="signup.php">Sign in</a>
    <?php endif ?>
</body>
</html>