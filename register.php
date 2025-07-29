<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php include("components/menu.php") ?>
    <main>
        <h2>Iniciar sesion</h2>
        <form id="register-form">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
        </form>
    </main>
    <div id="footer-container"></div>
</body>

</html>