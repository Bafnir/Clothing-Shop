<html>
	<head>
		<meta charset="utf-8">
		<title>Tienda Comercio</title>
		<link href="style.php" rel="stylesheet" type="text/css">
    </head>
</html>
<?php
session_start();
// Información de conexión con DB 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bbdd_mytiendainfoalba';

// Probamos a conectar a la base de datos, en caso de error devolvemos mensaje de error
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {
	// No se ha podido obtener la información
	exit('Porfavor complete los datos de registro');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM clients WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            //Inicializamos el carrito al logear
            $_SESSION['shoppingCart'] = array();
            ini_set('session.gc_maxlifetime', 3600);
            header('Location: home.php');
        } else {
            // Incorrect password
            echo '<script type="text/javascript">';
            echo 'alert("Usuario o contraseña incorrecto");';
            echo 'window.location.href= "index.php";';
            echo '</script>';
        }
    } else {
        // Incorrect username
        echo '<script type="text/javascript">';
        echo 'alert("Usuario o contraseña incorrecto");';
        echo 'window.location.href= "index.php";';
        echo '</script>';
    }
	$stmt->close();
}
?>
