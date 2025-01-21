<?php
session_name('ejercicio_texto');
session_start();

$texto = '';
if (isset($_POST['texto'])) {
    $texto = trim($_POST['texto']);
}

if (empty($texto)) {
    $mensaje = "No se ha escrito ningún texto en el formulario.";
} else {
    $mensaje = "Se ha escrito el siguiente texto: " . htmlspecialchars($texto);
    $_SESSION['texto'] = $texto;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página 2 - Resultado</title>
</head>

<body>
    <h1>Resultado</h1>
    <p><?php echo $mensaje; ?></p>
    <a href="pagina1.php">Volver a la página 1</a>
</body>

</html>