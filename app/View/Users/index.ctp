<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <title>Usuarios</title>
  </head>
  <body>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">Bienvenido <?php echo $username; ?></a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/users">Usuarios</a></li>
            <li><a href="#">Inventario</a></li>
            <li><a href="#">ventas</a></li>
          </ul>
          <form class="navbar-form navbar-left" id="search"  method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="query" name="search" placeholder="Busqueda">
            </div>
            <input type="submit" class="btn btn-default" value="Buscar">
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/users/logout">Cerrar sesion</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <h1 class="text-center"><?php echo $page_title; ?></h1>
        <table class="table" id="table">
          <thead>
            <tr>
              <td><?php echo $this->Paginator->sort('User.id', 'Id') ?></td>
              <td><?php echo $this->Paginator->sort('User.username', 'Username') ?></td>
              <td><?php echo $this->Paginator->sort('User.email', 'Email') ?></td>
              <td>Acciones</td>
            </tr>
            <tbody>
            <?php foreach($users as $user): ?>
              <tr>
                <td><?=$user['User']['id'] ?></td>
                <td><?=$user['User']['username'] ?></td>
                <td><?=$user['User']['email'] ?></td>
                <td>
                  <a href="/users/edit/<?=$user['User']['id'] ?>">Editar</a>
                  <a href="/users/delete/<?=$user['User']['id'] ?>">Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
		<div class="text-center">
			<?php echo $this->element('pagination'); ?>
		</div>
      </div>
  </body>
</html>
