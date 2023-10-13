<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-3">
    <h1 class="fs-3 text-center mb-3">Registro de calificaciones</h1>
    <h2 class="fs-6 alert alert-dark d-flex align-items-center gap-1 justify-content-center"><img src="./assets/cookie.svg" alt="cookie-icon">Esta pagina usa cookies para guardar localmente tu registro de calificaciones.</h2>
        <form action="../helpers/add.php" method='post' class="form-group d-flex align-items-center gap-2 justify-content-around">
                <label for="class" class="ms-5">Clase</label>
                <input type="text" name="class" id="class" require  class="form-control me-2">
            
                <label for="score" class="">Calificación</label>
                <input type="text" name="score" id="score" require  class="form-control">
            
            <input type="submit" value="Agregar" class="btn btn-primary mx-auto me-5">
        </form>
    </div>
</body>
</html>