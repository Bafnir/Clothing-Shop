<?php
//GATHERING PRODUCTS TO SHOW THEM 
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: home.php');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda Comercio</title>
	<link href="../styles/style.php" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body>
	<div class="login">
		<h1>Login Tienda Comercio</h1>
		<form action="authenticate.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Usuario" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Contraseña" id="password" required>
			<input type="submit" value="Continuar">
		</form>
	</div>
	<div class="registerLogin">
		<form action="register.php" method="post">
			<a href="register.php">
				<input id='btn' name="submit" type='submit' value='Registrarse'>
			</a>
		</form>
	</div>
	<footer>
		<div class="footer-content">
			<h3>Proyecto tienda comercio</h3>
			<p>Esto es un proyecto de una tienda online. La implementación se ha hecho principalmente con PHP para el backend, HTML Y CSS puro en el front.</p>

			<p>Copyright &copy;2022 GRUPO 13 COMERCIO ELECTRONICO</p>
		</div>
	</footer>
</body>

</html>