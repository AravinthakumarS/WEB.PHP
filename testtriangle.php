<?php
if(isset($_GET['lines'])) {
    $nombre = intval($_GET['lines']);

    function triangle($nombre) {
        for ($i = 1; $i <= $nombre; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    echo "Triangle : <br>";
    triangle($nombre);
} else {
    echo "Veuillez spécifier le nombre de lignes dans l'URL.";
}
?>