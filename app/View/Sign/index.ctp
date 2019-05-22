<!--<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="/css/main.css">
<script type="text/javascript" src="/js/main.js"></script>
<title>Registro de usuario</title>
</head>
<body>
<div class="container">
<h1 class="text-center"><?php echo $page_title; ?></h1>

<form class="form-login" id="formSign" action="/sign" method="post">
<hr class="borderline">
<div class="form-group">
<label for="username">Nombre de usuario</label>
<input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico">
</div>
<div class="form-group">
<label for="password">Contraseña</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
</div>
<div class="form-group">
<label for="password2">Repite contraseña</label>
<input type="password" class="form-control" id="password2" name="password2" placeholder="Repite contraseña">
</div>
<input type="submit" name="submit" class="btn btn-default" value="Registrarse">
<div class="errors"><?php if (!empty($message)) echo $message; ?></div>
</form>
<p class="register"><a href="/login/login">¿Ya eres miembro? Inicia sesion</a></p>
</div>

</body>
</html>-->

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
	<title>Registro de usuario</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center"><?php echo $page_title; ?></h1>
		<?php echo $this->Form->create('User',array(
			'id' => 'formSign',
			'class' => 'form-login',
			'inputDefaults' => array(
				'div' => 'form-group',
				'class' => 'form-control',
			),
		));
		?>
		<hr class="borderline">
		<?php
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('username', array(
			'id' => 'username',
			'required' => false,
			'label' => array(
				'text' => 'Nombre de usuario'
			),
		));
		echo $this->Form->input('email', array(
			'id' => 'email',
			'required' => false,
			'label' => array(
				'text' => 'Email'
			),
		));
		echo $this->Form->input('password', array(
			'id' => 'password',
			'required' => false,
			'label' => array(
				'text' => 'Contraseña'
			),
		));
		echo $this->Form->input('password', array(
			'id' => 'password2',
			'required' => false,
			'label' => array(
				'text' => 'Repite contraseña'
			),
		));
		echo $this->Form->end(array(
			'label' => 'Registrarse',
			'class' => 'btn btn-default',
		));
		?>
		<div class="errors"><?php if (!empty($message)) echo $message; ?></div>
		<p class="register"><?php echo $this->Html->link('¿Ya eres miembro? Inicia sesion','/login/login') ?></p>
	</div>

</body>
</html>
