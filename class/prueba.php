

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertarproducto.php" method="post" enctype="multipart/form-data">
    <input type="text" disable name="id"><br>
        <label for="2">Nombre Producto</label><br>
        <input type="text" name="nombrep" id="2"><br>
        <label for="3">Marca del Producto</label><br>
        <input type="text" name="marca" id="3"><br>
        <label for="4">Descripcion del producto</label><br>
        <input type="text" name="descrip" id="4"><br>
        <label for="5">Precio</label><br>
        <input type="number" name="precio" id="5"><br>
        <label for="6">Imagen</label><br>
        <input type="file" name="img" id="6" ><br>
        <label for="7">tipo</label><br>
        <input type="text" name="tipo" id="7" ><br>
        <input type="submit" value="Ingresar">

    </form>
</body>

</html>