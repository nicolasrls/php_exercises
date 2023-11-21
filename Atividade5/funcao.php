<?php

$valor1 = $_POST["num1"];
$valor2 = $_POST["num2"];


function maiorValor($num1,$num2){
    if($num1 > $num2){
        echo "O maior valor é ".$num1;
    }else{
        echo "O maior valor é ".$num2;
    }
}

maiorValor($valor1,$valor2);

?>