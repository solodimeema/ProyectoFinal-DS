<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>
<body>
    <?php if(!empty($message)): ?>
        <p> <?= $message ?> </p>
    <?php endif; ?>

    <h1>Registrate</h1>
    <form action="verify.php" method="post">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre completo">
        <input type="text" name="usuario" placeholder="Ingresa tu nombre de usuario">
        <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
        <input type="text" name="ocupacion" placeholder="Ingresa si eres cliente o administrador">
        <input type="submit" value="Aceptar" name="btnSignup">
    </form>
</body>
</html>