<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <script type="text/javascript" src="/js/main.js"></script>
    <title>Iniciar sesion</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center"><?php echo $page_title; ?></h1>

      <form class="form-login" id="formLogin" action="/login/login" method="post">
        <hr class="borderline">
        <div class="form-group">
          <label for="username">Usuario</label>
          <input type="text" class="form-control" id="username" name="data[User][username]" placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" name="data[User][password]" placeholder="Contraseña">
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="Iniciar sesion">
        <div class="errors"><?php if (!empty($message)) echo $message; ?></div>
      </form>
      <p class="register"><a href="/sign">¿No tienes una cuenta? Registrate</a></p>
    </div>

  </body>
</html>
