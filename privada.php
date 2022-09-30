<?php
    $login= $_GET['login'] ?? "0";

    if($login==0){
        header('Location: login.php');
        exit();
    }else if($login ==1){
        echo("Has hecho login");
    }
?>