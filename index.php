<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primer formulario con php</title>
</head>
<body>
    <center>
    <form action="pruebas.php" method="get">
        <label for="palabra">Ingresa la palabra:</label>
        <input type="text" name="palabra" id="palabra">
        <br>
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="mayusculas">Mayusuculas</option>
            <option value="minusculas">Minusculas</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
    </center>
    <br><br>
    <center>
    <form action="pruebas.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo">
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select>
        <br>
        <label for="pais">Pais:</label>
        <select name="pais" id="pais">
            <option value="argentina">Argentina</option>
            <option value="brasil">Brasil</option>
            <option value="chile">Chile</option>
            <option value="colombia">Colombia</option>
            <option value="peru">Peru</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    </center>
</body>
</html>