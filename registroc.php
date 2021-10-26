<?php
    $correo = $_POST['ccorreo'];
    $pass = $_POST['cpass'];
    $numero = $_POST['ctel'];
    $pais = $_POST['cpais'];
    $estado = $_POST['cestado'];
    $ciudad = $_POST['cciudad'];
    $direccion = $_POST['cdireccion'];
    $fecha = $_POST['cfecha'];
    $nombre = $_POST['cnombre'];
    $apellido = $_POST['capellido'];


    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sql = "INSERT INTO cliente (CorreoC, PasswordC, NumeroC, PaisC, EstadoC, CiudadC, DireccionC, fecha_NC, NombreC, ApellidoC) VALUES ( '$correo', '$pass', $numero, '$pais', '$estado', '$ciudad', '$direccion', '$fecha', '$nombre', '$apellido' )";

    mysqli_query($enlace, $sql);
    echo("Error description: " . mysqli_error($enlace));
    echo'<script type="text/javascript">
    alert("Registro exitoso");
    history.go(-1);
    </script>';