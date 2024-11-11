<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro</title>
</head>
<body>
    <header>
            <div class="header">
                <img src="../assets/images/logoappc.png" alt="" width="150px" height="150px" class="img">
            </div>
    </header>
    <div>
        <h1>Registro</h1>
        <form action="" method="post">
            <fieldset>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br>


                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido" required><br>


                <label for="email">Correo Electrónico:</label><br>
                <input type="email" id="email" name="email" required><br>


                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required><br>


                <label for="confirm_password">Confirmar Contraseña:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br>

                <a href="index.php"><button type="submit">Registrarse</button></a>
            </fieldset>
        </form>
    </div>
</body>
</html>