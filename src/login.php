<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>
</head>
<body style="padding: 10px;">
    <div class="container w-10 mt-5 rounded-3">
        <div class="row">
            <div class="col text-center">
                <img src="img/TenisAnimado.jpeg" width="600px">
            </div>
            <div class="col">
                <h1 class="fw-bold text-center py-5" style="font-size: 25px;">SNEAKER STUDIO</h1>
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
        </div>
    </div>
</body>
</html>