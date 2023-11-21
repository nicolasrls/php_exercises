<?php
    $conexao = mysqli_connect("localhost","root","","consultorio");
    if($conexao){
        echo "Conexão válida";
    }else{
        echo "Erro na conexão!";
    }

    // mysqli_query($conexao,"CREATE TABLE pessoas(id INT NOT NULL AUTO_INCREMENT, 
    // Nome varchar(255),
    // CPF varchar(255),
    // Email varchar(255),
    // Telefone varchar(255),
    // Data_Nascimento varchar(255),
    // PRIMARY KEY(id))");

    mysqli_query($conexao,"INSERT INTO pessoas(Nome,CPF,Email,Telefone,Data_Nascimento) VALUES('Nicolas','11029791473','nicolas.261195@gmail.com','83987336416','26/11/2001')");

?>