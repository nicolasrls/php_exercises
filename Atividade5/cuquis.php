<?php
$nome = $_GET["nome"];
$idade = $_GET["idd"];

setcookie("nome", $nome);
setcookie("idd", $idade);

header('location: nome.php');


?>