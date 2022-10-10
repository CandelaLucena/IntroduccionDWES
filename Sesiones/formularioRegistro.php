<?php
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if(isset($_POST["submit"])){
    $nombre = filtrado($_POST["nombre"]);
    $email = filtrado($_POST["email"]);
    $contraseña = filtrado($_POST["contraseña"]);
    $confirmarContraseña = filtrado($_POST["confirmarContraseña"]);
}

if(empty($nombre)){
    echo("Introduce un nombre");
}else if(empty($email)){
    echo("Introduce un email");
}else if($contraseña!==$confirmarContraseña){
    echo("Contraseñas no coinciden");
}else if(empty($contraseña)){
    echo("Introduce contraseña");
}else if(empty($confirmarContraseña)){
    echo("Verificar contraseña");
}else{

?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?= $nombre ?? "" ?> <br>
    Email : <?= $email ?? "" ?> <br>
    Contraseña : <?= $contraseña ?? "" ?> <br>
    ConfirmarContraseña : <?= $confirmarContraseña ?? "" ?> <br>
    
<?php
}
?>


<html>
<body>
<h2>Formulario Registro</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Nombre Usuario<br>
    <input type="text" name="nombre" maxlength="50"><br><br>
    Email<br>
    <input type="email" name="email"><br><br>
    Contraseña<br>
    <input type="text" name="contraseña"><br><br>
    Confirmar contraseña<br>
    <input type="text" name="confirmarContraseña"><br><br>
    
    <input type="submit" name="submit" value="Enviar"><br><br>
    ¿Todavia no eres miembro? <a href="http://127.0.0.1:8080/formularioLogin.php">Registrate</a>

</form>
</body>
</html>