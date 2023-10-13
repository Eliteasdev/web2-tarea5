<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $clase = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
    $calificacion = filter_input(INPUT_POST, 'score', FILTER_VALIDATE_FLOAT);

    // Validar los datos
    if (($clase && $calificacion !== false) && !($calificacion<0 || $calificacion>10)) {
        // Obtener la cadena de texto de la cookie
        $miArrayString = $_COOKIE['miCookie'];

        // Convertir la cadena de texto de vuelta a un arreglo utilizando json_decode()
        $miArray = json_decode($miArrayString, true);
        $miArray[$clase] = $calificacion;

        setcookie('miCookie', json_encode($miArray), time() + 3600, '/');
        header('Location: ../index.php');
    } else {
        header('Location: ../components/error.php');
    }
}
?>