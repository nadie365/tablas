<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar
    </title>
</head>
<body>

    <form action="multiplicacion.php" method="POST">
        <label for="numero">Ingrese el numero a multiplicar</label>
        <input type="number" id="numero" name="numero" required>

        <label for="maximo">Ingrese hasta que numero quiere multiplicar en la tabla</label>
        <input type="number" name="maximo" required>  

        <button>Enviar</button>
    </form>
    
</body>
</html>