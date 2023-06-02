<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if($usuario == "nathy@nathy.com" && $senha == 123){
        header("location:panel.php");
    }
    else{
        header("location:usuario-invalido.php");
    }
    ?>