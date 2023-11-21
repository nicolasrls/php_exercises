<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="teste.php" method="POST">
        <label for="nome">Nome: </label><input type="text" name="nome" /><br>
        <label for="email">Email: </label><input type="email" name="email" /><br>
        <label for="telefone">Telefone: </label><input type="text" maxlength="2" name="DDD" /><input type="text" maxlength="9" name="telefone"><br>
        <h4>Endereço: </h4>
        <label for="endereço">Rua/Av: </label><input type="text" name="rua" /><br>
        <label for="endereço">Bairro: </label><input type="text" name="bairro" /><br>
        <label for="endereço">Cidade: </label><input type="text" name="cidade" /><br>
        <label for="endereço">Estado: </label><input type="text" name="estado" /><br>
        <label for="endereço">CEP: </label><input type="text" maxlength="9" name="cep" /><br><br>      
        <label for="texto">Descrição do problema: </label><textarea name="texto" cols="20" rows="5"></textarea><br>
        <label for="url">Link do video: </label><input type="link" name="link" /><br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>