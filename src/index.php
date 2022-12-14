<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/LS.css">
    <title>Log In</title>
</head>
<body>
    <div class="container w-10 mt-5 rounded-3">
      <div class="row">
        <div class="col text-center">
          <img src="img/Muestra2.jpg" width="65%" style="border-radius: 100px;">
        </div>
        <div class="col">
          <div class="row" style="width: 50%; margin: auto;">
            <img src="img/Logo.png" alt="Logo">
          </div>
          <div class="row">
            <form action="verifyL.php" method="post">
              <p>Usuario <input type="text" class="form-control" placeholder="" name="usuario"></p>
              <p>Contraseña <input type="password" class="form-control" placeholder="" name="contraseña"></p>
              <div class="d-grid w-75" style="margin: auto;">
                <button type="submit" class="btn btn-outline-info btn-lg" name="btnLogin">Iniciar sesion</button>
              </div>
              <div class="my-3">
                <span>¿No tienes cuenta? <a href="signup.php">Crear una cuenta</a></span><br>
              </div>                
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>