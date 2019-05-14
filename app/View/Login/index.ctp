<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center"><?php echo $page_title; ?></h1>

      <div class="wrapper">
        <div class="row">
          <button class="col-sm-4 btn btn-primary" type="button" name="button"><a href="login/login">Iniciar sesion</a></button>
          <div class="col-sm-4"></div>
          <button class="col-sm-4 btn btn-primary" type="button" name="button"><a href="sign">Registrarse</a></button>
        </div>
      </div>
    </div>
  </body>
</html>
