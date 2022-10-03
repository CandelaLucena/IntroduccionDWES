<?php
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if(isset($_POST["submit"])){
    $nombre = filtrado($_POST["nombre"]);
    $educacion = filtrado($_POST["educacion"]);
    $email = filtrado($_POST["email"]);
    $avatar = $_FILES["avatar"];

    
    $nombreArchivo = $_FILES['avatar']['name'];
    $directorioTemp = $_FILES['avatar']['tmp_name'];
    $extension = $arrayArchivo['extension'];
    $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
    move_uploaded_file($directorioTemp, $nombreCompleto);
}

if(empty($nombre)){
    echo("Introduce un nombre");
}else if(empty($email)){
    echo("Introduce un email");
}else{

?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?= $nombre ?? "" ?> <br>
    Educación : <?= $educacion ?? "" ?> <br>
    Email : <?= $email ?? "" ?> <br>
    Avatar : <?= $avatar ?? "" ?> <br>
<?php
}
?>



<html>
<body>
<h2>Formulario</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Nombre<br>
    <input type="text" name="nombre" maxlength="50"><br><br>
    Email<br>
    <input type="email" name="email"><br><br>
    Educación<br>
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br><br>
    Avatar
    <input type="file" name="avatar"><br><br>
    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>