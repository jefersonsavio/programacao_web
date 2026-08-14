<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    echo "usuario nao logado!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logado</title>
</head>

<body>
    <h4>Bem-vindo</h4>
    <p>Ususario logado: <?php echo $_SESSION["usuario"]; ?></p>
    <p><a href="logout.php"></a></p>
</body>

</html>