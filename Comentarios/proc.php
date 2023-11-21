<?php
function phpAlert($mensagem)
{
    echo '<script type="text/javascript">
      alert("' . $mensagem . '");
    </script>';
}

$conexao = mysqli_connect("localhost", "root", "", "comentarios");
if ($conexao) {
    phpAlert("Conexão válida");
} else {
    phpAlert("Erro na conexão!");
}

$nome 
$diaHora
$texto
$cidade

?>