<?php
    //Crea aquí tu script para seleccionar el idioma
    echo($http_lang = ($_SERVER["HTTP_ACCEPT_LANGUAGE"]));

    //Fin script
    if (strpos(strtolower($http_lang),"en")){
        $content = "This page is in English";
        $title = "Change the language of the page";
    }else if(strpos(strtolower($http_lang),"es")){
        $content = "Esta página está en Castellano (Idioma por defecto)";
        $title = "Cambiar el idioma de la página";
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