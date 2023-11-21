<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NR Consultório</title>
</head>
<body>
    
    <label for="pesq">Pesquisa Pacientes: </label><input type="text" name="pesquisa">
    


    <?php
        include("script.php");
        $nome = $_GET["nome_paciente"];
        
        echo "<p>Nome: $nome</p>";


    ?>
    
</body>
</html>