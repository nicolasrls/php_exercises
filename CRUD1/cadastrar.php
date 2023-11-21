<?php

$nome = $_GET["nome_paciente"];
$email = $_GET["email_paciente"];
$dt_nascimento = $_GET["dt_paciente"];
$telefone = $_GET["num_paciente"];

include("script.php");

if(mysqli_query($conexao,"INSERT INTO pessoas(nome,email,telefone,Data_nascimento) VALUES('$nome','$email','$telefone','$dt_nascimento')")){
    echo "Sucesso";
}

?>