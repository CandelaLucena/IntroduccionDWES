<?php
//Crea aquí tu script para mostrar o no la pagina
echo($http_lang = ($_SERVER["HTTP_USER_AGENT"]));

//Fin script
if (strpos(strtolower($http_lang),"firefox")){
    $content = "Esta pagina se muestra correctamente";
    $title = "Correcto";
}else{
    $content = "Esta pagina no se muestra correctamente";
    $title = "Error";
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title><?= $title ?></title>
<meta name="author" content="Víctor Ponz">
</head>    
<body>
<ul><?= $title ?>
</ul>
<?= $content ?>
</body>
</html>