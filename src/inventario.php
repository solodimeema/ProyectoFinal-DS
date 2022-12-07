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
      <h1 style=" font-size: 40px; text-align: center;">Administracion de Inventario</h1>
        <table class="table table-dark table-striped" style="width: 95%; margin: auto;">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Marca</th>
              <th scope="col">Color</th>
              <th scope="col">Talla</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Fecha y hora</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>  
    </div>
    <div class="bg-light">
      <h1 style="font-size: 18px; text-align: center;">Ingrese los datos de entrega de proveedores:</h1>
      <form action="#" method="post">
        <p>Codigo del producto:<input type="text" class="form-control" placeholder="" name="codigo"></p>
        <p>Talla:<input type="text" class="form-control" placeholder="" name="talla"></p>
        <p>Cantidad:<input type="text" class="form-control" placeholder="" name="cantidad"></p>
        <p>Fecha:<input type="text" class="form-control" placeholder="" name="time"></p>
        <div class="d-grid w-75" style="margin: auto;">
            <button type="submit" class="btn btn-secondary" name="btnAdd">Añadir</button>
        </div>   
      </form>
    </div>
  </main>
  
  <?php require 'partials/footer.php'; ?> 
</body>
</html>