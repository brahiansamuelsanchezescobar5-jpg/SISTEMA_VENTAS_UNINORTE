<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor o menor de edad</title>
</head>
<body>
    <h1>Verificar edad</h1>
    
    <!-- Formulario corregido -->
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    // Condicional y bloque PHP corregido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];

        echo "<h2>Resultado</h2>";
        
        // Lógica sugerida para evaluar la edad
        if ($edad >= 18) {
            echo "<p>$nombre es mayor de edad.</p>";
        } else {
            echo "<p>$nombre es menor de edad.</p>";
        }
    } // La llave se cierra dentro de PHP
    ?>
</body>
</html>