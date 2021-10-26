<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registrolb.php" method="post">
        <input type="text" placeholder="Titulo" name="titulo">
        <input type="text" placeholder="Editorial" name="editorial">
        <input type="text" placeholder="Autor" name="autor">
        <input type="text" placeholder="Genero" name="genero">
        <input type="number" placeholder="Precio" name="precio" step="any">
        <input type="number" placeholder="Año" name="publicacion">
        <input type="text" placeholder="url de portada" name="port">
        <textarea name="descripcion"></textarea>
        <button type="Submit">Registrar</button>
    </form>

</body>
</html>