<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$DDD = $_POST["DDD"];
$telefone = $_POST["telefone"];
$texto = $_POST["texto"];
$link = $_POST["link"];

echo "Nome de usuário: ". $nome;
echo "<br>Email: " . $email;
echo "<br>Telefone: ". $DDD . $telefone;
echo "<br>Endereço: " ;
echo $rua . ", " . $bairro . ", " . $cidade . ", " . $estado . ", " . $cep;
echo "<br>Descrição do problema: ". $texto;
echo "<br>Link do video: ". $link;

?>