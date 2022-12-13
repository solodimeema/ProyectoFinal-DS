<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'partials/pagehead.php'; ?>
</head>

<body>
  <header style="width: 100%;">
    <div class="container">
      <img src="img/Logo.png" alt="Logo" width="15%">
    </div>
  </header>

  <main>
    <section class="bg-light">
      <div class="row text-center" style="padding-bottom: 10px;">
        <h1>Bienvenido</h1>
      </div>
      <div class="row" style="text-align: center;">
        <div class="col">
          <div class="card" style="width: 14em; margin: auto;">
            <div style="text-align: center; padding: 10px;">
              <img src="img/Admins.png" class="card-img-top" style="width: 12em; height: 12em; border-radius: 10px;">
            </div>
            <div class="card-body">
              <div class="title">
                <h5 class="card-title">Administradores</h5>
              </div>
              <div class="pricing">
                <a href="addAdmin.php" class="btn btn-dark px-5 mb-5">Ir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 14em; margin: auto;">
            <div style="text-align: center; padding: 10px;">
              <img src="img/Pedidos.png" class="card-img-top" style="width: 12em; height: 12em; border-radius: 10px;">
            </div>
            <div class="card-body">
              <div class="title">
                <h5 class="card-title">Pedidos</h5>
              </div>
              <div class="pricing">
                <a href="pedidosAdmin.php" class="btn btn-dark px-5 mb-5">Ir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 14em; margin: auto;">
            <div style="text-align: center; padding: 10px;">
              <img src="img/Inventario.png" class="card-img-top" style="width: 12em; height: 12em; border-radius: 10px;">
            </div>
            <div class="card-body">
              <div class="title">
                <h5 class="card-title">Inventario</h5>
              </div>
              <div class="pricing">
                <a href="inventario.php" class="btn btn-dark px-5 mb-5">Ir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 14em; margin: auto;">
            <div style="text-align: center; padding: 10px;">
              <img src="img/Cerrar.png" class="card-img-top" style="width: 12em; height: 12em; border-radius: 10px;">
            </div>
            <div class="card-body">
              <div class="title">
                <h5 class="card-title">Cerrar Sesion</h5>
              </div>
              <div class="pricing">
                <a href="logout.php" class="btn btn-dark px-5 mb-5">Salir</a>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>
  </main>

  <?php require 'partials/footer.php'; ?>
</body>
</html>