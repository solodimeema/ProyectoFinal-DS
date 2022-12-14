<?php
  $conn = mysqli_connect("Database","root","MYSQL_ROOT_PASSWORD","DatabaseDS");
  $id = $_GET['id'];
  $sql = "SELECT * FROM Inventario WHERE ID='$id'";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($query);
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
  <?php require 'partials/headerAdmin.php'; ?>

  <main>
    <div class="bg-light">
      <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['ID']  ?>">
        <input type="text" class="form-control mb-3" name="Codigo" placeholder="Codigo" value="<?php echo $row['Codigo']  ?>">
        <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">
        <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
        <input type="text" class="form-control mb-3" name="Color" placeholder="Color" value="<?php echo $row['Color']  ?>">
        <input type="text" class="form-control mb-3" name="Talla" placeholder="Talla" value="<?php echo $row['Talla']  ?>">
        <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']  ?>">
        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
      </form>
    </div>
  </main>

  <?php require 'partials/footer.php'; ?> 
</body>
</html>