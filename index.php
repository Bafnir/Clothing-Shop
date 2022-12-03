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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
</body>
<footer style="position:inherit; max-width:99.9%; background-color: #15264c">
        <div class="footer-content">
            <h3>Clothing Shop ALBA</h3>
            <p>This is a prototype for an university project, here will be the project that me and my team will be developing during this quarter.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
			<p style="max-width:600px">Alejandro Pérez Martínez - Ioan Gabriel Turcas - Judit Rodrigo Carrasco - Aida Córdoba Moreno</p>

        </div>
    </footer>
</html>