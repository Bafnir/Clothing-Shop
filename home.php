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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<img src="/images/ClothingLogo.png">
			<h1 style="color:black;">Tienda de ROPA</h1>
			<a style="color:black;" href="profile.php"><i class="fas fa-user-circle"></i>Perfil</a>
			<a style="color:black;" href="Cart.php"><i class="fas fa-shopping-cart"></i>Carrito</a>
			<a style="color:black;" href="logout.php"><i class="fas fa-sign-out-alt"></i>Desconectar</a>
		</div>
	</nav>
	<div class="content">
	<div class="card-body height3">
        			<ul class="chat-list">
        				<li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Asesor Clothing Shop Alba</h5>
        							<p>Bienvenido de vuelta, <?= $_SESSION['name'] ?>!</p>
        						</div>
        					</div>
        				</li>
        				
        		</div>
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
					foreach ($products as $pro) {
						echo "<tr>";
						echo "<td>" . $pro['name'] . "</td>";
						echo "<td>" . $pro['price'] . "€</td>";
						echo "<td>" . $pro['colour'] . "</td>";
						echo "<td><img src='" . $pro['image_src'] . "' alt='Clothing item' width='200' height='200'></td>";
						echo "<td><form method='post' action='showProducto.php/?id=" . $pro['id'] . "'><a href='showProducto.php/?id=" . $pro['id'] . "'><input id='btn-see' type='submit' value='Detalles'></a></form>
							<form method='post' action='addToCart.php/?id=" . $pro['id'] . "'><a href='addToCart.php/?id=" . $pro['id'] . "'><input id='btn-see' type='submit' value='Añadir al carrito'></a></form>
							</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
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