<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = trim($_POST['text']);

    if (!empty($text)) {
        $_SESSION['text'] = $text;
        $message = "Texto recibido: " . htmlspecialchars($text);
    } else {
        $message = "No se ha escrito ningún texto.";
    }
} else {
    $message = "Acceso directo sin enviar formulario.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Segunda Página</title>
</head>
<body>
    <p><?php echo $message; ?></p>
    <a href="index.php">Volver a la primera página</a>
</body>
</html>
