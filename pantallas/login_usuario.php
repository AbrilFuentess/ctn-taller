<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login usuario</title>
</head>
<body>
    <header>
            <div class="header">
                <img src="../assets/images/logoappc.png" alt="" width="150px" height="150px" class="img">
            </div>
    </header>
    <div>
        <h1>Login</h1>
        <form action="" method="post">
            <fieldset>

                <label for="email">Correo Electrónico:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required><br>

                <a href="index.php"><button type="submit">Logearse</button></a>
            </fieldset>
        </form>
    </div>
</body>
</html>