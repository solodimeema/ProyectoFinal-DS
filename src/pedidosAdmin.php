<?php
  $conn = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");

  $sql = "SELECT * FROM Pedidos";
  $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'partials/pagehead.php'; ?>
</head>
<body>
  <?php require 'partials/headerAdmin.php';?>
    
  <main>
    <div class="bg-light">
      <div class="row">
        <div class="col">
          <h1 style="font-size: 40px; text-align: center;">Pedidos</h1>
          <table class="table table-dark table-striped text-center" style="margin: auto;">
            <thead>
              <tr>
                <td scope="col">Codigo</td>
                <td scope="col">Descripcion</td>
                <td scope="col">Marca</td>
                <td scope="col">Color</td>
                <td scope="col">Talla</td>
                <td scope="col">Cantidad</td>
                <td scope="col">Entregar a</td>
                <td scope="col">Fecha y hora</td>
                <td scope="col"></td>
                <td scope="col"></td>
              </tr>
            </thead>

            <tbody>
              <?php while($row = mysqli_fetch_array($query)){ ?>
              <tr>
                <th scope="row"><?php  echo $row['Codigo']?></th>
                <th scope="row"><?php  echo $row['Descripcion']?></th>
                <th scope="row"><?php  echo $row['Marca']?></th>
                <th scope="row"><?php  echo $row['Color']?></th>    
                <th scope="row"><?php  echo $row['Talla']?></th>
                <th scope="row"><?php  echo $row['Cantidad']?></th>
                <th scope="row"><?php  echo $row['user']?></th>
                <th scope="row"><?php  echo $row['Fecha']?></th>
                <th scope="row"></th>
                <th scope="row"></th>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>  
    </div>
  </main>

  <?php require 'partials/footer.php'; ?>
</body>
</html>