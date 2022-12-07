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
    <section class="bg-light">
      <div class="row" style="margin: auto; padding: 15px;">
        <div class="form-floating">
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Calificanos</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
      <div class="row" style="margin: auto; padding: 25px;">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
          <label for="floatingTextarea2">Escribe aqui un comentario.</label>
        </div>
      </div>
    </section>
  </main>

  <?php require 'partials/footer.php'; ?>
</body>
</html>