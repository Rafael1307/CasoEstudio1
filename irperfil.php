<?php
    session_start();
    $clienteA = $_SESSION['clienteA'];
    if($clienteA == "nulo"){
        header('Location: formulario.php');
    }else{
        header('Location: perfil.php');
    }