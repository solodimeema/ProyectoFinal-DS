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
      <form action="verifyComment.php" method="post">
        <div class="row" style="margin: auto;">
          <div class="col">
            <select class="form-select d-grid w-25" name="star">
              <option selected>Calificanos</option>
              <option value="1">1 estrella</option>
              <option value="2">2 estrellas</option>
              <option value="3">3 estrellas</option>
              <option value="4">4 estrellas</option>
              <option value="5">5 estrellas</option>
          </select>
          </div>
        </div>
        <div class="row" style="margin: auto; padding: 15px;">
          <textarea class="form-control" placeholder="Escribe aqui un comentario." id="floatingTextarea2" style="height: 200px" name="comment"></textarea>
        </div>
        <div class="row">
          <div class="col">
            <div class="d-grid w-50" style="margin: auto;">
              <button type="submit" class="btn btn-secondary" name="btnCancel">Cancelar</button>
            </div>
          </div>
          <div class="col">
            <div class="d-grid w-50" style="margin: auto;">
              <button type="submit" class="btn btn-primary" name="btnComment">Enviar</button>
            </div>
          </div>
        </div>
      </form>
    </section>
  </main>

  <?php require 'partials/footer.php'; ?>
</body>
</html>