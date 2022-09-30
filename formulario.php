<?php

?>


<html>

<body>

<h2>Formulario</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
    <br><br>
    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>