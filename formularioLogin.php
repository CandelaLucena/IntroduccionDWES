<?php
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
if(isset($_POST["submit"])){
    $nombre = filtrado($_POST["nombre"]);
    $contraseña = filtrado($_POST["contraseña"]);  
}
if(empty($nombre)){
    echo("Introduce un nombre");
}else if(empty($contraseña)){
    echo("Introduce una contraseña");
}else{
?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?= $nombre ?? "" ?> <br>
    Contraseña : <?= $contraseña ?? "" ?> <br>
<?php
}
?>
<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "sa";
$db_name = "Proyecto1";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();

$sql = "SELECT * username FROM users";

$_SESSION['username'] = $username;
?>

<html>
<body>
<h2>Formulario Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Nombre Usuario<br>
    <input type="text" name="nombre" maxlength="50"><br><br>
    Contraseña<br>
    <input type="text" name="contraseña"><br><br>

    <input type="submit" name="submit" value="Enviar"><br><br>
    ¿Ya eres miembro? <a href="http://127.0.0.1:8080/formularioRegistro.php">Acceso a miembros</a>

</form>
</body>
</html>