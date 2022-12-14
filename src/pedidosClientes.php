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
  <?php require 'partials/headerClientes.php'; ?>
    
  <main>
    <div class="bg-light">
      <div class="row"> 
        <div class="col">
          <h1 style="font-size: 20px; text-align: center;">Ingrese los datos:</h1>
          <form action="insertarPedidos.php" method="POST">
            <div class="col">
              <div class="row" style="margin: 5px;">
                <select class="form-select" name="Descripcion">
                  <option selected>Descripcion</option>
                  <?php 
                    $consulta1 = "SELECT * FROM Descripcion";
                    $ejecutar1 = mysqli_query($conn,$consulta1);
                    foreach($ejecutar1 as $opciones1):
                  ?>
                  <option value="<?php echo $opciones1['Descripcion'] ?>"><?php echo $opciones1['Descripcion'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="row" style="margin: 5px;">
                <select class="form-select" name="Marca">
                <option selected>Marca</option>
                  <?php 
                    $consulta2 = "SELECT * FROM Marca";
                    $ejecutar2 = mysqli_query($conn,$consulta2);
                    foreach($ejecutar2 as $opciones2):
                  ?>
                  <option value="<?php echo $opciones2['Marca'] ?>"><?php echo $opciones2['Marca'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="row" style="margin: 5px;">
                <select class="form-select" name="Color">
                  <option selected>Color</option>
                  <?php 
                    $consulta3 = "SELECT * FROM Colores";
                    $ejecutar3 = mysqli_query($conn,$consulta3);
                    foreach($ejecutar3 as $opciones3):
                  ?>
                  <option value="<?php echo $opciones3['Color'] ?>"><?php echo $opciones3['Color'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="row" style="margin: 5px;">
                <input type="text" class="form-control" name="Talla" placeholder="Talla">
              </div>
              <div class="row" style="margin: 5px;">
                <input type="text" class="form-control" name="Cantidad" placeholder="Cantidad">
              </div>
              <div class="row" style="margin: 5px;">
                <input type="text" class="form-control" name="user" placeholder="¿A quien entrego?">
              </div>
            </div>         
                        
            <div class="row" style="padding-top: 20px;">
              <div class="col">
                <div class="d-grid w-50" style="margin: auto;">
                  <button type="submit" class="btn btn-secondary" name="btnCancel">Cancelar</button>
                </div>
              </div>
              <div class="col">
                <div class="d-grid w-50" style="margin: auto;">
                  <button type="submit" class="btn btn-primary" name="btnAdd">Agregar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

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
                <th scope="row"><a href="actualizarPedidos.php?id=<?php echo $row['ID'] ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a></th>
                <th scope="row"><a href="deletePedidos.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></th>                                        
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