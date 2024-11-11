<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Has ganado!</title>
    <link rel="stylesheet" href="ganado.css">
</head>
<body>
    <?php
    session_start();
    echo "<h1>¡Has ganado!</h1>";
    echo "<p>La palabra era: " . $_SESSION['palabra'] . "</p>";
    echo '<a href="index.php">Juega de nuevo</a>';
    session_destroy();
    ?>
</body>
</html>