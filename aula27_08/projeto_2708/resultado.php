<?php
$postagem = $_POST["postagem"];
$urlAPI = "https://jsonplaceholder.typicode.com/posts/$postagem";

$response = file_get_contents($urlAPI);
$dadosRetornados = json_decode($response, true);

echo "<strong>Código da postagem:</strong> " . $dadosRetornados["id"] . "<br>";
echo "<strong>Título da postagem:</strong> " . $dadosRetornados["title"] . "<br>";
echo "<strong>Texto da postagem:</strong> " . $dadosRetornados["body"] . "<br>";
echo "<strong>Código do usuário:</strong> " . $dadosRetornados["userId"] . "<br>";

echo "<a href='index.php'>Voltar</a>";
