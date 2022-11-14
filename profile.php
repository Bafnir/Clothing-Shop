<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bbdd_mytiendainfoalba';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM clients WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Perfil y Datos</title>
		<link href="../styles/style.php" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1><a href="home.php" style="color:black;"><h1>Home</h1></a></h1>
				<a style="color:black;" href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
				<a style="color:black;" href="logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
			</div>
		</nav>
		<div>
		</div>
		<div class="content">
			<h2>Página de perfil</h2>
			<div>
				<p>Los datos de tu cuenta:</p>
				<table>
					<tr>
						<td>Usuario:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Contraseña(Encriptada):</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>