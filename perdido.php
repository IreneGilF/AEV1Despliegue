<?php
    session_start();
    echo "<h1>¡Oh no! Has perdido</h1>";
    echo "<p>La palabra era: " . $_SESSION['palabra'] . "</p>";
    echo '<a href="index.php">Jugar de nuevo</a>';
    session_destroy();
?>