<?php

$nome = $_GET["nome"];
$altura = $_GET["altura"];
$peso = $_GET["peso"];

function calculaPeso($altura,$peso,$nome){
    $imc = ($peso/($altura*$altura));
    $imc = number_format($imc, 2,',');
    echo $nome . " seu IMC é de " . $imc;
}

calculaPeso($altura,$peso,$nome);

?>