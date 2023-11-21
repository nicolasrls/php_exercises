<?php

$nota1=$_POST['nota_1'];
$nota2=$_POST['nota_2'];
$nota3=$_POST['nota_3'];

$media = (($nota1+$nota2+$nota3)/3);
$media_form = number_format($media, 2,',');

if($media >= 7){
    echo "Você está aprovado com média " . $media_form;
}elseif($media > 1 && $media<7){
    echo "Você está na final com média " . $media_form;
}else{
    echo "Você está reprovado com média " . $media_form;
}


?>