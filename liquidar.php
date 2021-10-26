<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    $clienteA = $_SESSION['clienteA'];
    $consulta = "SELECT * FROM carrito WHERE clientecarro = '$clienteA'";
    $mostrar = mysqli_query($enlace, $consulta);
    $d = rand(1, 9999);
       while($row= mysqli_fetch_array($mostrar)){

           $cant = $row['unidadescarro'];
           $prec = $row['preciocarro'];
            $libro = $row['librocarro'];
           $total = $row['unidadescarro']*$row['preciocarro'];
           $d = rand(1, 9999);
           $sql = "INSERT INTO compras (IdCompra, UnidadCompra, PrecioUnidad, TotalCompra) VALUES ( $d, $cant, $prec, $total)";
           mysqli_query($enlace, $sql);
           $sql1 = "INSERT INTO clientecompra (cliente, compra, libro) VALUES ( '$clienteA', $d, $libro)";
           mysqli_query($enlace, $sql1);
           echo("Error description: " . mysqli_error($enlace));
           $sql2 = "UPDATE libros SET ventas = ventas + $cant WHERE idLibro = $libro ";
           mysqli_query($enlace, $sql2);
          
       }
       echo $d;
           echo("Error description: " . mysqli_error($enlace));
    $consulta2 = "DELETE FROM carrito WHERE clientecarro = '$clienteA'";
    mysqli_query($enlace, $consulta2);
    echo("Error description: " . mysqli_error($enlace));
    header('Location: final.php');
   
    ?>