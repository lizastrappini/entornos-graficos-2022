<?php
session_start();
?>
<html>
<body>
<a href="ejercicio4.php"></a>
    <?php
    echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
    ?>
<br>
<br>
<a href="ejercicio4.php">ir a otra</a>
</body>
</html>