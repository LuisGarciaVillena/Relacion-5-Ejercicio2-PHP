<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    if (is_numeric($edad) && $edad >= 18 && $edad <= 130) {
        echo "La edad ingresada es: $edad años";
    } else {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>