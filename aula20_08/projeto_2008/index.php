<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("cor_usuario", $_POST["cor"], time() + 3600);
    setcookie("idioma_usuario", $_POST["idioma"], time() + 3600);
    header("Location: index.php");
    exit();
}

$cor_fundo = isset($_COOKIE["cor_usuario"]) ? $_COOKIE["cor_usuario"] : "FFFFFF";
$idioma_salvo = isset($_COOKIE["idioma_usuario"]) ? $_COOKIE["idioma_usuario"] : "pt-br";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cookiest</title>
</head>

<body style="background-color: <?php echo $cor_fundo ?>">
    <h1>Bem Vindo!</h1>
    <h2>Preferências do usuário</h2>
    <form action="" method="POST">
        <label for="cor">Escolha a cor do tema</label>
        <input type="color" name="cor" value="<?php echo $cor_fundo ?>"><br><br>
        <label for="idioma">Escolha o idioma</label>
        <select name="idioma">
            <option value="pt-br">Português</option>
            <option value="en">Inglês</option>
            <option value="es">Espanhol</option>
            <option value="fr">Francês</option>
        </select><br><br>
        <button type="submit">Aplicar</button>
    </form>
    <br><br>
    <a href="limpar.php">Restaurar</a>

</body>

</html>