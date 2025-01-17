<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Primera Página</title>
</head>
<body>
    <form action="page2.php" method="post">
        <label for="text">Escribe un texto:</label>
        <input type="text" id="text" name="text" value="<?php echo isset($_SESSION['text']) ? $_SESSION['text'] : ''; ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
