<?php
session_start();
// Información de conexión con DB 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'bbdd_mytiendainfoalba';

// Probamos a conectar a la base de datos, en caso de error devolvemos mensaje de error
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['name'], $_POST['surname'], $_POST['age'], $_POST['DNI'], $_POST['city']) ) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $age=$_POST['age'];
    $DNI=$_POST['DNI'];
    $city=$_POST['city'];
    
    $temp = mysqli_query($conn,"INSERT INTO clients (username,password,email,name,surname,age,DNI,city) 
    VALUES ('$username','$password','$email','$name','$surname','$age','$DNI','$city')");

    if(!$temp){
        echo "error";
    }else{
        //now we log into the account we just created.
        if ($stmt = $conn->prepare('SELECT id, password FROM clients WHERE username = ?')) {
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
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
                    echo 'Se ha producido un error al registrar el usuario';
                }
            } else {
                // Incorrect username
                echo 'Se ha producido un error al registrar el usuario';
            }
        
            $stmt->close();     
    }
}
}