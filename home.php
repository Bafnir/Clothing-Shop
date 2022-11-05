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

// Probamos a conectar a la base de datos, en caso de error devolvemos mensaje de error
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql); // First parameter is just return of "mysqli_connect()" function

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda de Ropa</title>
	<link href="style.php" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1 style="color:black;">Tienda de ROPA</h1>
			<a style="color:black;" href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div class="content">
		<h2 class="title-home">Pagina de compra de Ropa</h2>
		<p>Bienvenido de vuelta, <?= $_SESSION['name'] ?>!</p>
	</div>

	<div>
		<div class="center-home">
			<h1> Productos disponibles</h1>
			<?php
			echo "<br>";
			echo '<table class="user-table"> ';
			$first_row = true;
			while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
				if ($first_row) {
					$first_row = false;
					// Output header row from keys.
					echo '<tr>';
					foreach ($row as $key => $field) {
						echo '<th>' . htmlspecialchars($key) . '</th>';
					}
					echo '</tr>';
				}
				echo "<tr>";
				foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
					echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
				}
				echo "</tr>";
			}
			echo "</table>";

			?>
		</div>


</body>

</html>