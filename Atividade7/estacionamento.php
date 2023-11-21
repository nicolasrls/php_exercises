<?php
    $conexao = mysqli_connect("localhost","root","","estacionamento");
    if($conexao){
        echo "Conexão válida";
    }else{
        echo "Erro na conexão!";
    }

    // mysqli_query($conexao,"CREATE TABLE veiculos(id INT NOT NULL AUTO_INCREMENT, 
    // placa varchar(255),
    // marca varchar(255),
    // modelo varchar(255),
    // hora_entrada varchar(255),
    // hora_saida varchar(255),
    // PRIMARY KEY(id))");

    mysqli_query($conexao,"INSERT INTO veiculos(placa,marca,modelo,hora_entrada,hora_saida) VALUES('SKY67K8','BYD','DOLPHIN','13:30','17:30')");

    




?>