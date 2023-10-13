
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de calificaciones</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include './components/form.php';?>
    <div class="container mt-3">
        <?php
            
            if (isset($_COOKIE['miCookie'])) {
                // Obtener la cadena de texto de la cookie
                $miArrayString = $_COOKIE['miCookie'];

                // Convertir la cadena de texto de vuelta a un arreglo utilizando json_decode()
                $miArray = json_decode($miArrayString, true);

                // Utilizar el arreglo como sea necesario
                foreach ($miArray as $clave => $valor) {
                    if($valor <= 3){
                        echo "<p class='alert alert-danger'>$clave: $valor. - Tienes que repetir la clase.</p>";
                    }else if($valor <= 5){
                        echo "<p class='alert alert-warning'>$clave: $valor. - Echale ganitas.</p>";
                    }else if($valor <= 6){
                        echo "<p class='alert alert-success'>$clave: $valor. - Apenas y pasaste.</p>";
                    }else if($valor <= 8){
                        echo "<p class='alert alert-primary'>$clave: $valor. - Very good.</p>";
                    }else if($valor <= 10){
                        echo "<p class='alert alert-info'>$clave: $valor. - Eres el/la mejor.</p>";
                    }
                }
            } else {
                $miArray = array('Programación web' => 3,
                    'Matematicas' => 4.6,
                    'Base de Datos' => 6,
                    'Ingenieria de software' => 7.5,
                    'Diseño de algoritmos' => 9
                );

                // Convertir el arreglo en una cadena de texto utilizando json_encode()
                $miArrayString = json_encode($miArray);
            
                // Guardar la cadena en una cookie
                setcookie('miCookie', $miArrayString, time() + 3600, '/');
                header('Location: ./index.php');
            }
        ?>
    </div>
</body>
</html>