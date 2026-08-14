<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["usuario"] = $_POST["usuario"];
    header("Location: logado.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto exemplo sessao</title>
</head>

<body>
    <h3>Home</h3>

    <form method="POST" action="">
        <label for="usuario">usuario: </label>
        <input type="text" name="usuario" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>