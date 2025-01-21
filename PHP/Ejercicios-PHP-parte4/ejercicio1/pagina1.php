<?php
session_name('ejercicio_texto');
session_start();

$ultimo_texto = '';
if (isset($_SESSION['texto'])) {
    $ultimo_texto = $_SESSION['texto'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página 1 - Ingreso de texto</title>
</head>

<body>
    <h1>Ingrese un texto</h1>
    <?php
    if (!empty($ultimo_texto)) {
        echo "<p>Último texto escrito: " . htmlspecialchars($ultimo_texto) . "</p>";
    }
    ?>
    <form action="pagina2.php" method="post">
        <label for="texto">Texto:</label>
        <input type="text" id="texto" name="texto" required>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>