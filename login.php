<?php
	session_start();
	$Usuario = $_POST['ccorreo'];
	$Password = $_POST['cpass'];

	

		$link = mysqli_connect("localhost", "root", "", "casoestudio") or die ("<h2>No hay conexion</h2>");

		$sql = "SELECT COUNT(*) as cont FROM cliente WHERE CorreoC = '$Usuario' AND PasswordC = '$Password'";

		$resultado = mysqli_query($link, $sql);
		$array = mysqli_fetch_array($resultado);
        echo("Error description: " . mysqli_error($link));
		if ($array['cont']>0) {
			$_SESSION['clienteA']= $Usuario;

			echo'<script type="text/javascript">
    alert("Bienvenido");
    </script>';
    header('Location: perfil.php');
		}else{
            echo("Error description: " . mysqli_error($link));
			echo'<script type="text/javascript">
            alert("Correo o contraseña incorrectos");
            history.go(-1);
            </script>';
		}
?>