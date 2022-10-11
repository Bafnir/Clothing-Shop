<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tienda Comercio</title>
		<link href="style.php" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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

        <div class ="registerLogin">
            <form action="register.php" method="post">
                <a href="register.php">
                    <input id='btn' name="submit" type='submit' value='Registrarse'>
                </a>
            </form>
        </div>
	</body>
</html>