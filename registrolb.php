<?php
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $publicacion = $_POST['publicacion'];
    $port = $_POST['port'];


    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sql = "INSERT INTO Libros (Titulo, Autor, Genero, Editorial, Precio, Publicacion, Descripcion, Portada) VALUES ( '$titulo', '$autor', '$genero', '$editorial', $precio, $publicacion, '$descripcion', '$port' )";

    mysqli_query($enlace, $sql);
    echo("Error description: " . mysqli_error($enlace));
    header('Location: indexado.php');

    