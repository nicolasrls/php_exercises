<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório NR</title>
</head>
<body>
    <h1>Bem-vindo ao sistema!</h1>
    <h3>Insira os clientes abaixo:</h3>

    <form action="cadastrar.php" method="get">
        <label for="name">Nome:</label><input type="text" name="nome_paciente">
        <label for="ema">Email:</label><input type="email" name="email_paciente">
        <label for="num">Numero:</label><input type="number" name="num_paciente">
        <label for="dt">Dt de nascimento:</label><input type="date" name="dt_paciente">
        <input type="submit" value="Enviar para o BD">
    </form>
</body>
</html>