<?php
   session_start();
   if(isset($_SESSION['user_id'])){
        header('Location: /.');
   }
   require 'db.php';

   if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn -> prepare('SELECT idUsuario, email, password FROM Usuarios WHERE email = :email');
        $records -> bindParam(':email', $_POST['email']);
        $records -> execute();
        $results = $records -> fetch(PDO::FETCH_ASSOC);

        $message = '';
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['idUsuario'];
            header('Location: /.');
        }else{
            $message = 'Usuario/password incorrectos.';
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
  
  <div class="container w-10 mt-5 rounded-3">
    <div class="row">
      <div class="col">
        <h1 class="fw-bold text-center py-5">¡ H O L A !</h1>
        <form action="#">
          <div class="mb-4">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="mb-4">
            <input type="checkbox" class="form-check-input" name="connected">
            <label for="connected" class="form-check-label">Mantener sesion iniciada</label>
          </div>
          <div class="d-grid w-75">
            <button type="submit" class="btn btn-outline-info">Iniciar sesion</button>
          </div>
          <div class="my-3">
            <span>¿No tienes cuenta? <a href="#">Crear una cuenta</a></span><br>
          </div>
        </form>
      </div>
      <div class="col text-center">
        <img src="img/bg.jpg" width="400px">
      </div>
    </div>
  </div>
</body>
</html>