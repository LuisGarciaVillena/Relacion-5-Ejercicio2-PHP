<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Edad</title>
</head>
<body>
    <form action="procesar_edad.php" method="post">
        <label for="edad">Edad (entre 18 y 130 años):</label>
        <input type="text" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>