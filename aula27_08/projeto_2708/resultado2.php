<?php
$pokemon = $_POST["pokemon"];
$urlAPI = "https://pokeapi.co/api/v2/pokemon/$pokemon";

$curl = curl_init($urlAPI);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);

$dadosRetornados = json_decode($response, true);

echo"<h2>DADOS DO POKEMON</h2>";
echo "<strong>Numero: </strong>".$dadosRetornados["id"]. "<br>";
echo "<strong>Nome: </strong>".$dadosRetornados["name"]. "<br>";
echo "<strong>Especie: </strong>".$dadosRetornados["species"]["name"]. "<br>";
echo "<strong>Tipo: </strong>".$dadosRetornados["types"][0]["type"]["name"]. "<br>";
echo "<strong>Experiencia: </strong>".$dadosRetornados["base_experience"]. "<br>";
echo "<img src ='" .$dadosRetornados["sprites"]["front_default"]."'>"."<br><br>";
echo "<img src ='" .$dadosRetornados["sprites"]["back_default"]."'>"."<br><br>";
echo "<a href = 'index2.html'>Voltar</a>"

?>