<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/vacaciones.css">
    <title>Solicitud de Vacaciones</title>

</head>
<body>

<div class="background-image">
    <div class="container">
        <div class="signupFrm">
        <img src="slogo.png" alt="Imagen Lateral" class="side-image">
            <form action="" class="form">
                <h1 class="title">Solicitud de Vacaciones</h1>

                <div class="inputContainer">
                    <input type="text" class="input" name="cedula" required>
                    <label for="cedula" class="label">Cedula</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" name="nombre_completo" required>
                    <label for="nombre_completo" class="label">Nombre Completo</label>
                </div>

                <div class="inputContainer">
                    <input type="date" class="input" name="fecha_inicio" required>
                    <label for="fecha_inicio" class="label">Fecha Inicio</label>
                </div>

                <div class="inputContainer">
                    <input type="date" class="input" name="fecha_fin" required>
                    <label for="fecha_fin" class="label">Fecha Final</label>
                </div>

                <div class="inputContainer">
                    <input type="text" class="input" name="cargo" required>
                    <label for="cargo" class="label">Cargo</label>
                </div>
                <input type="submit" class="submitBtn" value="Enviar">
            </form>
        </div>
    </div>
</div>

</body>
</html>