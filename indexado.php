<?php
    $enlace = mysqli_connect("localhost", "root", "", "casoestudio");
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Segunda Pagina</title>
	<meta charset="utf-8">
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	html, body{
		width: 100%;
		height: 100%;
	}
	html{
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	nav{
		position: fixed;
		margin-top: -110px;
	width: 100%;
	height: 100px;
	background-color: black;
	}
	nav ul {
		list-style: none;
	}	
		nav ul li {
			text-align: center;
			display: inline-block;
            width: 20%;
			line-height: 100px;
		}		
			nav ul li a {
				color: white;
				display: block;
				text-decoration: none;
			}	
				nav ul li a:hover {
					color: black;
					background: white;
				}
		div#img{
			float: left;
			width: 80%;
			height: auto;
			padding: 3%;
		}
		img{
			width: 94%;
			height: 94%;
		}
		article{
			background-color: rgba(10, 10, 10 ,.8);
			border-radius: 20px;
			border: silver 15px ridge;
			width: 80%;
			margin: auto;
			margin-top: 110px;
			height: auto;
		}
		div#contenido{
			width: 90%;
			margin: auto;
			text-align: center;
		}
		h2, p{
			color: white;
		}
        table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 95%;
  margin: auto;
  margin-top: 15px;
}
table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}
table tr{background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #005757;
  color: white;
}
	</style>
</head>
<body>
	<nav>
		<center>
		<ul>
			<li><a href="masv.php">Mas vendido</a></li>
			<li><a href="menosv.php">Menos vendido</a></li>
			<li><a href="indexado.php">Agregar titulo</a></li>
            <li><a href="logout.php">Salir</a></li>
		</ul>
	</center>
	</nav>
	<article>
		<section>
            <h1>Agrgar titulo:</h1>
        <table>
        <form action="registrolb.php" method="post">
		<tr>
			<th>Titulo</th>
			<th>Autor</th>
			<th>Genero</th>
		</tr>
		<tr>
			<td><input type="text" placeholder="Titulo" name="titulo" required></td>
			<td><input type="text" placeholder="Autor" name="autor" required></td>
			<td><input type="text" placeholder="Genero" name="genero" required></td>
		</tr>
        <tr>
			<th>Editorial</th>
			<th>Precio</th>
			<th>Año de publicacion</th>
		</tr>
		<tr>
			<td><input type="text" placeholder="Editorial" name="editorial" required></td>
			<td><input type="number" placeholder="Precio" name="precio" step="any" required></td>
			<td><input type="number" placeholder="Año" name="publicacion" required></td>
		</tr>
        <tr>
			<th>URL portada</th>
			<th>Descripcion</th>
			<th>Agregar</th>
		</tr>
		<tr>
			<td><input type="number" placeholder="Año" name="publicacion" required></td>
			<td><textarea name="descripcion"></textarea></td>
			<td><button type="Submit">Registrar</button></td>
		</tr>
        </form>
        </table>
		</section>
	</article>
</body>
</html>
    
        
        
        
        
        

        
        
   
