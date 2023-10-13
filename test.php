<?php
    if (isset($_COOKIE['nota'])) {
        $valor = $_COOKIE['nota'];
        echo "El valor de la cookie es: " . $valor;
    } else {
        echo "La cookie no está definida";
        setcookie('nota', 'Primera nota', time() + 3600, '/');
    }
?>

<?php
    if (isset($_COOKIE['miCookie'])) {
        // Obtener la cadena de texto de la cookie
        $miArrayString = $_COOKIE['miCookie'];

        // Convertir la cadena de texto de vuelta a un arreglo utilizando json_decode()
        $miArray = json_decode($miArrayString, true);

        // Utilizar el arreglo como sea necesario
        echo "El valor de la clave1 es: " . $miArray['clave1'];
        echo "<br/>";
        echo "El valor de la clave2 es: " . $miArray['clave2'];
    } else {
        echo "La cookie no está definida";
        $miArray = array('clave1' => 'valor1', 'clave2' => 'valor2');

        // Convertir el arreglo en una cadena de texto utilizando json_encode()
        $miArrayString = json_encode($miArray);
    
        // Guardar la cadena en una cookie
        setcookie('miCookie', $miArrayString, time() + 3600, '/');
    }
?>