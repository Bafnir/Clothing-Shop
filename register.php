<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link href="./styles/style-register.php" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
	</head>
	<body>
		<div class="Register">
			<h1>Registro Tienda</h1>
			<form action="register-it.php" method="post">
				<label class="aligned-label" for="username">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Usuario" id="username" required>

				<label class="aligned-label" for="name">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="name" placeholder="Nombre" id="name" required>

				<label class="aligned-label" for="surname">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="surname" placeholder="Apellido" id="surname" required>

				<label class="aligned-label" for="DNI">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="DNI" placeholder="DNI(Unico en DB)" id="DNI" required>

				<label class="aligned-label" for="age">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="age" placeholder="Edad" id="age" required>

				<label class="aligned-label" for="city">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="city" placeholder="Ciudad" id="city" required>

				<label class="aligned-label"  for="password">
                    <i class="fas fa-lock"></i></label>
				<input type="password" name="password" placeholder="Contraseña" id="password" required>

                <label class="aligned-label"  for="email">
                    <i class="fas fa-user"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>

				<input type="submit" value="Registrarse">
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