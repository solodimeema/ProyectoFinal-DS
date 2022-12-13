<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'partials/pagehead.php'; ?>
</head>
<body>
  <?php require 'partials/headerAdmin.php'; ?>
    
  <main>
    <div class="bg-light">
      <h1 style="font-size: 18px; text-align: center;">Ingrese los datos de un nuevo administrador:</h1>
      <form action="verifyS.php" method="post">
        <p>Nombre<input type="text" class="form-control" placeholder="" name="nombre"></p>
        <p>Nombre de usuario<input type="text" class="form-control" placeholder="" name="usuario"></p>
        <p>Contraseña<input type="password" class="form-control" placeholder="" name="contraseña"></p>
        <div class="d-grid w-75" style="margin: auto;">
            <button type="submit" class="btn btn-secondary" name="btnAdd">Añadir</button>
        </div>   
      </form>
    </div>
  </main>
  
  <?php require 'partials/footer.php'; ?> 
</body>
</html>