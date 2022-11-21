<?php
//GATHERING PRODUCTS TO SHOW THEM 
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tienda de Ropa</title>
	<link href="../styles/style-home.php" rel="stylesheet" type="text/css">
	<link href="../styles/style.php" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1 style="color:black;">Tienda de ROPA</h1>
			<a style="color:black;" href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
			<a style="color:black;" href="logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div class="content">
		
		<p>Bienvenido de vuelta, <?= $_SESSION['name'] ?>!</p>
	</div>

	<div>
		<div class="center-home">
			<h1> Productos disponibles</h1>
			<table class="user-table">
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Precio</td>
						<td>Color</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						require('Controller/C_seeProducts.php');
						foreach($products as $pro){
							echo"<tr>";
							echo"<td>". $pro['name'] ."</td>";
							echo"<td>". $pro['price'] ."€</td>";
							echo"<td>". $pro['colour'] ."</td>";
							echo"<td><img src='".$pro['image_src']."' alt='Clothing item' width='200' height='200'></td>";
							echo"<td><form method='post' action='showProducto.php/?id=".$pro['id']."'><a href='showProducto.php/?id=".$pro['id']."'><input id='btn-see' type='submit' value='Detalles'></a></form>
							<form method='post' action='addToCart.php/?id=".$pro['id']."'><a href='addToCart.php/?id=".$pro['id']."'><input id='btn-see' type='submit' value='Añadir al carrito'></a></form>
							</td>";
							echo"</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
</body>

</html>