<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    $clienteA = $_SESSION['clienteA'];
    if($clienteA == "nulo"){
        echo'<script type="text/javascript">
    alert("Inicie sesion para ir al carrito");
    history.go(-1);
    </script>';
    }else{
        $contsql = "SELECT COUNT(*) as ttl FROM carrito WHERE clientecarro = '$clienteA'";
        $cont = mysqli_query($enlace, $contsql);
        $num =  mysqli_fetch_assoc($cont);
        if($num <= 0){
            echo'<script type="text/javascript">
    alert("Su carrito esta vacio");
    history.go(-1);
    </script>';
        }else{
        header('Location: carrito.php');
        }
    }
    ?>